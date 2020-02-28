<?php
  require_once('includes/template.php');

  head([
    'title' => "Search term to key"
  ]);
?>

<h1 class="title"> Search term to key </h1>

<p> To look up words quickly, the <code>trie</code> model creates a <dfn>
search key </dfn> that takes the latest word (as determined by the <a
href="word-breaker.php">word breaker</a> and converts it into an internal form.
The purpose of this internal form is to make searching for a word work,
as expected,
regardless of things such as <strong>accents</strong>,
<strong>diacritics</strong>, <strong>letter case</strong>, and minor
<strong>spelling variations</strong>.
The internal form is called the <dfn>key</dfn>.  Typically, the key is always
in lowercase, and lacks all accents and diacritics. For example, the key
for “naïve" is <codE>naive</code> and the key for “Canada” is
<code>canada</code>. </p>

<p> The form of the word that is stored is “regularized” through the use of a
<dfn>key function</dfn>, which you can define in TypeScript code. </p>

<p> Note: this function runs both <strong>on every word when the wordlist is
compiled</strong> and <strong>on the input, whenever a suggestion is requested</strong>.
This way, whatever a user types is <em>matched</em> to something stored in the
lexical model, without the user having to type things in a specific way.
</p>

<p> The key function takes a string which is the raw search term, and returns a
new string, being the “regularized” key. As an example, consider the <strong>default
key function</strong>; that is, the key function that is used if you do not
specify one: </p>

<pre><code class="lang-typescript">searchTermToKey: function (term: string): string {
  // Use this pattern to remove common diacritical marks.
  // See: https://www.compart.com/en/unicode/block/U+0300
  const COMBINING_DIACRITICAL_MARKS = /[\u0300-\u036f]/g;

  // Converts to Unicode Normalization form D.
  // This means that MOST accents and diacritics have been "decomposed" and
  // are stored as separate characters. We can then remove these separate
  // characters!
  //
  // e.g., Å → A + ˚
  let normalizedTerm = term.normalize('NFD');

  // Now, make it lowercase.
  //
  // e.g.,  A + ˚ → a + ˚
  let lowercasedTerm = normalizedTerm.toLowerCase();

  // Now, using the pattern above replace each accent and diacritic with the
  // empty string. This effectively removes all accents and diacritics!
  //
  // e.g.,  a + ˚ → a
  let termWithoutDiacritics = lowercasedTerm.replace(COMBINING_DIACRITICAL_MARKS, '')

  // The resultant key is lowercased, and has no accents or diacritics.
  return termWithoutDiacritics;
},</code></pre>

<p> This should be sufficient for most Latin-based writing systems. However,
there are cases, such as with SENĆOŦEN, where some characters do not decompose
into a base letter and a diacritic. In this case, it is necessary to write
your own key function. </p>

<h2> Use in your model definition file </h2>

<p> To use this in your model definition file, provide a function as the
<code>searchTermToKey</code> property of the lexical model source:</p>

<pre><code class="lang-typescript">const source: LexicalModelSource = {
  format: 'trie-1.0',
  sources: ['wordlist.tsv'],
  searchTermToKey: function (wordform: string): string {
    // Your searchTermToKey function goes here!
    let key = wordform.toLowerCase();
    return key;
  },
  // other customizations go here:
};

export default source;</code></pre>

<h2> Suggested customizations </h2>

<ul>
  <li> For all writing systems, <strong> normalize into NFC</strong> or
       <strong>NFD</strong> form using <code>wordform = wordform.normalize('NFC')</code>. </li>
  <li> For Latin-based scripts, <strong>lowercase</strong> the word, and
      <strong>remove diacritics</strong>. </li>
  <li> For scripts that use the U+200C zero-width joiner (ZwJ) and/or the U+200D zero-width
       non-joiner (ZWNJ) (e.g., Brahamic scripts),
      <strong>remove the ZWJ or ZWNJ</strong> from the <strong>end</strong> of the input with
      <code>wordform = wordform.replace(/[\u200C\u200D]+$/</code> </li>
</ul>

<hr>

<p> <a href="./">Return to “Advanced Lexical Model Topics”</a> </p>
