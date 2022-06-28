---
title: Casing support
---

Support for case-sensitivity in a touch keyboard is surprisingly complex. In
this guide, we will look the various features that Keyman includes to implement
comprehensive casing support, in particular:

* Determination of casing keys (Keyman 14+)
* Caps Lock layer vs Shift layer (Keyman 15+)
* Start of sentence detection (Keyman 15+)
* Automatic return to default layer (Keyman 15+)

Alongside keyboard support for casing, a lexical model may also contain casing
rules. See the [Lexical Model search term to
key](../../current-version/guides/lexical-models/advanced/search-term-to-key)
topic for more details.

## Determination of casing keys

The [`&casedkeys` system store](../reference/casedkeys) determines which keys
have automatic Caps Lock casing behaviour. This impacts desktop and touch
keyboards.

## Caps Lock layer

To add support for double-tapping Shift to reach a 'sticky' Caps Lock layer,
introduce a separate 'caps' layer into the layout file. The presence of this
layer will enable the double-tap gesture in Keyman on the Shift key.

## Automatic return to default layer

In earlier versions of Keyman, it was common to include `nextlayer` controls on
individual output keys (particularly in shift or symbol layers) to return to the
previous layer after touching them. In Keyman 15 and later versions, this can be
implemented with more control using the [`begin PostKeystroke` rule](../reference/begin).

`begin PostKeystroke` is also used for start-of-sentence detection.

## Start of Sentence detection

Start of sentence detection comes into play both when a user enters a text
field, or moves the cursor within a text field, and after the user types a
keystroke.

When entering a text field, or moving the cursor, the [`begin NewContext`
rule](../reference/begin) will be called. The keyboard may not emit any
characters when this rule is called, but may change the current layer or set
other variable store values.

After each keystroke, the `begin PostKeystroke` rule is called. While some of
the same functionality can be replicated by including it in the `begin Unicode`
processing, this entry point is called after both model input (e.g. selecting a
word from the banner), and after `nextlayer` processing from the touch layout,
giving the keyboard a chance to adjust the layer and other variable stores.

We do need to be careful, however, not to override the user's recent touch of a
layer switch key. Keyman provides the [`&newLayer` system store](../reference/newlayer)
and the [`&oldLayer` system store](../reference/oldlayer) to allow the
keyboard to detect this and avoid overriding it.

Start of sentence detection can also be used for other contextual layer
controls, for example, moving to the numeric layer when digits are found.

## Worked example

This example keyboard demonstrates how to integrate all the above features for
an English keyboard. Adding more nuance is left as an exercise for the reader!

```keyman
c Sample English keyboard with start-of-sentence detection
store(&VERSION) '10.0'
store(&NAME) 'Casing Support'
store(&TARGETS) 'any'
store(&VISUALKEYBOARD) 'casing.kvks'
store(&LAYOUTFILE) 'casing.keyman-touch-layout'

c Note three entry points, rather than the traditional single entry point

begin Unicode > use(main)
begin NewContext > use(NewContext)
begin PostKeystroke > use(PostKeystroke)

c This tells Keyman which keys should have casing behavior applied
store(&CasedKeys) [K_A] .. [K_Z]

c We'll define some useful stores here
store(key) [K_A] .. [K_Z] [SHIFT K_A] .. [SHIFT K_Z]
store(out) 'a' .. 'z'     'A' .. 'Z'

store(caps) 'A'..'Z'
store(digit) '0'..'9'

group(NewContext) readonly
    c Any time we get a new context, by mouse click, tap,
    c cursor movement, new document, etc, we'll try and
    c determine the best layer to use. We don't want to
    c do this on a desktop platform, though!
    platform('touch') > use(detectStartOfSentence)

group(PostKeystroke) readonly
    c We get here after every keystroke and model action is processed
    c Note that we only want to do layer changes on touch

    c Okay, let's stay on the numeric layer if we are there already
    platform('touch') if(&newLayer = "") if(&layer = 'numeric') any(digit) > context

    c Don't swap off the caps lock layer automatically
    platform('touch') if(&layer = 'caps') > context

    c no other changes, so detect sentence or layer change, as long
    c as the user hasn't attempted to change layer themselves.
    platform('touch') if(&newLayer = "") > use(detectStartOfSentence)

group(detectStartOfSentence) readonly
    c We have a shared group for the start of sentence detection now
    c which will set the current layer according to the current context.

    c Some common end-of-sentence punctuation
    store(sentencePunctuation) '.?!'

    c If we are at the start of a text field, we're at the 'start of a
    c sentence', so we'll move to the Shift layer
    nul > layer('shift')

    c Otherwise, we'll move to the Shift layer only if we see end of a
    c sentence followed by one or two spaces.
    any(sentencePunctuation) ' ' > layer('shift')
    any(sentencePunctuation) '  ' > layer('shift')

    c And because we haven't see any of these situations above, we'll
    c move to the default layer. Note that this effectively drops us
    c back to the default layer after every keystroke that isn't blocked
    c by the `PostKeystroke` or early `detectStartOfSentence` rules.
    nomatch > layer('default')

group(main) using keys
    + any(key) > index(out, 1)
```

## See also

* [Keyman language overview](overview)
* [Using groups](groups)
* [Using rules](rules)
* [`group()` statement](../reference/group)
* [`begin()` statement](../reference/begin)
* [`&newLayer` system store](../reference/newlayer)
* [`&oldLayer` system store](../reference/oldlayer)
