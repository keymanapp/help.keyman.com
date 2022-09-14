---
title: Customization and extension of the Unicode word breaker
---

<aside>
  <p>
    <strong>Note</strong>:  While this offers a great amount of flexibility and
    customization that may assist predictions for your language, note that this
    approach may get quite technical!
  </p>
</aside>

As mentioned on the <a href="./word-breaker.php">main word breaker page</a>,
our currently-supported lexical models need to know what a word
is in running text.  After all, it is quite difficult to look up a word in a
dictionary when unclear about what the start and end of that word even is.

In languages using the Latin script—like, English, French,
and SENĆOŦEN—finding words is easy. Words are separated by spaces or
punctuation. The actual rules for where to find words can get quite tricky to
describe, but Keyman implements the <a href="https://unicode.org/reports/tr29/#Word_Boundaries">
Unicode Standard Annex #29 §4.1 Default Word Boundary Specification </a>
which works well for most languages.

This guide is about techniques that may be used to customize and extend
the behaviors of that specification to be better tailored to your language.
This is done by using similar patterns and structures to the rules found in
the specification itself.

There are three ways - all of them optional - to extend and customize
the word-breaking rules themselves:

* If you need to prevent splits in very specific scenarios and/or add
       splits in other specific scenarios, you may specify <a href="#rules">
       context-based rules</a> to obtain the desired behavior.
* If certain characters are not handled appropriately for their role in
       your language, you may <a href="#map">map characters</a> to different
       word-breaking character classes - including custom ones.  This will
       override the default property they are assigned by the default
       implementation, with the new property applying for all word-breaking
       rules.
* If the default word-breaking classes from the specification are
       too general for certain aspects of your language, it is possible to
       <a href="#define">custom character classes</a> for use in custom rules.

## <a name="example" id="example"></a> An example walkthrough for customizing the word-breaker

This example was designed to address the needs of a minority language in the country
of Cambodia.  The majority language does not use spaces for wordbreaking, while the
minority language in question does use them.  In addition, hyphens sometimes occur
within words.

The word breaker function can be specified in the <a href="./model-definition-file.php">
model definition file</a> as follows:

```typescript
const source: LexicalModelSource = {
  format: 'trie-1.0',
  sources: ['wordlist.tsv'],
  // CUSTOMIZE THIS:
  wordBreaker: (text) => {
    let customization = {

      /*** Definition of extra word-breaking rules ***/
      rules: [{
        match: (context) => {
          if(context.propertyMatch(null, ["ALetter"], ["Hyphen"], ["ALetter"])) {
            return true;
          } else if(context.propertyMatch(null, ["ALetter"], ["Hyphen"], ["eot"])) {
            return true;
          } else if(context.propertyMatch(["ALetter"], ["Hyphen"], ["ALetter"], null)) {
            return true;
          } else {
            return false;
          }
        },
        breakIfMatch: false
      }],

      /*** Character class overrides for specific characters ***/
      propertyMapping: (char) => {
        let hyphens = ['\u002d', '\u2010', '\u058a', '\u30a0'];
        // treats Khmer consonants & independent vowels in the same manner
        // as the basic latin-script based alphabet
        if(char >= '\u1780' && char <= '\u17b3') {
            return "ALetter";
        } else if(hyphens.includes(char)) {
            return "Hyphen";
        } else {
          // The other Khmer characters already have useful word-breaking
          // property assignments.
          return null;
        }
      },

      /*** Declares any new, custom character classes to be recognized by the word-breaker ***/
      customProperties: ["Hyphen"]
    };

    /*** Connects all the pieces together for actual use ***/
    return wordBreakers['default'](text, customization);
  },
  // ...
};

export default source;
```

This example's customization is designed to accomplish two goals:

1. Unicode's wordbreaker does not map base Khmer consonants to any of the
  <a href="https://unicode.org/reports/tr29/#Table_Word_Break_Property_Values">
  relevant wordbreaking character properties</a>, causing it to be treated as `"Other"`.
  The minority language in question instead wishes for Latin-script like word-breaking,
  so mapping the consonants to the same property as Latin-script consonants allows
  them to be treated similarly - in the manner they expect.

2. By default, the wordbreaker will automatically insert word boundaries before
  and after a hyphen.  To allow mid-word hyphens, we need to remap them to
  a different character property.

  While the specification itself mentions that we could
  just map hyphens to `"MidLetter"`, this example opts to define
  a custom-tailored property that ensures only hyphens are affected in order to add
  a special, end-of-context rule that may be useful when typing - the rule above
  referencing `"eot"`.
</ol>

More on the wordbreaking character properties will be covered later.

## <a name="rules" id="rules"></a> Custom word-breaking rules

When defining additional rules for use in word-breaking, it is advisable to reference
the <a href="https://unicode.org/reports/tr29/#Word_Boundary_Rules"> rules of the
Unicode Standard Annex #29 §4.1 Default Word Boundary Specification</a>.

Rules WB1 through WB4 of the specification will always apply first, before any
custom rules.  Custom rules will then be applied in order of their definition within
the model, with them all being applied before the specification's rules labeled WB5
and onward.

Each rule should be of the following form:

```typescript
{
  // A function that returns 'true' whenever the rule should apply
  match: (context) => {
    // ...
  },
  // Whether to prevent (false) or to enforce (true) a boundary when the rule applies.
  breakIfMatch: false
}
```

Toward this end, the `context` object received by match provides a function called
`propertyMatch` in order to define rules like those of the wordbreaker specification.
Let's take WB6 - "do not break letters across certain punctuation" - as an example.

As written in the spec, WB6 reads **AHLetter x (MidLetter | MidNumLetQ) AHLetter**.

To break that down:
- (implicit) **Any**
- **AHLetter**: `ALetter` or `Hebrew_Letter`
- **x** - "do not break"
- (either) **MidLetter** or **MidNumLetQ**: one of `MidNumLet` or `Single_Quote`
- **AHLetter**: `ALetter` or `Hebrew_Letter`
    - These expansions are defined at https://unicode.org/reports/tr29/#WB_Rule_Macros.

If written as a custom rule, it takes the following form:

```typescript
{
  match: (context) => {
    return context.propertyMatch(null, // no requirements:  implicit "Any".
                                ["ALetter", "Hebrew_Letter"],
                                // x
                                ["MidLetter", "MidNumLet", "Single_Quote"],
                                ["ALetter", "Hebrew_Letter"]);
  },
  breakIfMatch: false // do not break
}
```

Almost all of the specification's rules are of this form:  up to two characters
before a potential boundary may be considered alongside up to two characters after
the potential boundary.

#### Word-breaking property names
The names used in each array must be defined in one of the
following places:
* https://unicode.org/reports/tr29/#Table_Word_Break_Property_Values (case-insensitive)
* `customProperties` - your <a href="#define">declaration of any custom property types</a>
* This list: `["Other", "sot", "eot"]`
    * `Other`:  a character without an associated word-breaking property value
    * `sot`:  "start of text" - a marker indicating the beginning of the string being word-broken
    * `eot`:  "end of text" - a marker indicating the end of the string being word-broken

#### Applying the example
As an example, when determining whether or not to break the English word `don't` when
applying WB6 as written above, this is what happens near the apostrophe:

```typescript
{
  match: (context) => {
    return context.propertyMatch(null, /* automatic match */                // "o" - ALetter
                                ["ALetter", "Hebrew_Letter"],               // "n" - ALetter
                                // x
                                ["MidLetter", "MidNumLet", "Single_Quote"], // "'" - Single_Quote
                                ["ALetter", "Hebrew_Letter"]);              // "t" - ALetter
  },
  breakIfMatch: false // do not wordbreak at any position where the rule matches.
}
```

The rule applies at the position between the `n` and the `'` of `don't`, telling the
word-breaker not to word-break if the rule matches at that location.

```typescript
{
  match: (context) => {
    return context.propertyMatch(null, /* automatic match */                // "n" - ALetter
                                ["ALetter", "Hebrew_Letter"],               // "'" - Single_Quote
                                // x
                                ["MidLetter", "MidNumLet", "Single_Quote"], // "t" - Single_Quote
                                ["ALetter", "Hebrew_Letter"]);              //     - eot
  },
  breakIfMatch: false // do not break
}
```

The rule, however, does not apply between the `'` and the `t`, so without the spec's WB7 rule,
a wordbreak could occur here.

You may define any number of these rule objects in any order for use within the wordbreaker within the
`rules` array.

Defining custom rules is a powerful tool, but it is detailed work and may be somewhat tedious
to get right.  Feel free to <a href="https://community.software.sil.org/c/keyman/19">ask for
help at our Community Site </a> for assistance.

## <a name="map" id="map"></a> Character word-breaking property remapping



## <a name="define" id="define"></a> Declaring new word-breaking property classes


<hr>

<p> <a href="./">Return to “Advanced Lexical Model Topics”</a> </p>
