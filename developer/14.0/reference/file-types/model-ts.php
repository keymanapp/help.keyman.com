<?php
  require_once('includes/template.php');

  head([
    'title' => "MODEL.TS files"
  ]);
?>

<h1>MODEL.TS files</h1>

<dl>
  <dt>Used by:</dt>
  <dd><span class="application">Keyman Developer</span>.</dd>

  <dt>Description:</dt>
  <dd>A .MODEL.TS file is a <a href='../../guides/lexical-models'>lexical model</a> definition source file. This holds all the code used by a Keyman lexical model, in plain text.</dd>

  <dt>Details:</dt>
  <dd>A .MODEL.TS file is written in the <a href="https://www.typescriptlang.org/">TypeScript</a> language.
    <span class="application">Keyman Developer</span> compiles this Keyman lexical model source file which can also
    reference a (<a href="tsv">.TSV</a>) wordlist</a> to make a lexical model (<a href='model-js'>.MODEL.JS</a>) file.</dd>
</dl>

<h2>Reference</h2>

<p>This is a small <a href="https://www.typescriptlang.org/">TypeScript</a>
source code file that tells us where to find the word list file, as well as
gives us the option to tell the compiler a little bit more about our
language’s spelling system or <em>orthography</em>.</p>

<h2> The model definition template </h2>

<p><strong>Keyman Developer</strong> will provide you with a model definition
similar to the following.</p>

<pre><code class="lang-typescript">/*
  sencoten 1.0 generated from template.

  This is a minimal lexical model source that uses a tab delimited wordlist.
  See documentation online at https://help.keyman.com/developer/ for
  additional parameters.
*/

const source: LexicalModelSource = {
  format: 'trie-1.0',
  wordBreaker: {
    use: 'default',
  },
  sources: ['wordlist.tsv'],
};
export default source;</code></pre>

<p> Let's step through this file, line-by-line.</p>

<p> On the first line, we're declaring the source code of a new lexical model. </p>
<pre><code class="lang-typescript">const source: LexicalModelSource = {</code></pre>

<p> On the second line, we're saying the lexical model will use the
<code>trie-1.0</code> format. The <code>trie</code> format creates a lexical
model from one or more word lists; the <code>trie</code> structures the
lexical model such that it can predict through thousands of words very
quickly. </p>
<pre><code class="lang-typescript">  format: 'trie-1.0',</code></pre>

<p> On lines 3–5, we're specifying the word breaking algorithm that we want to use.
Keyman supplies a default algorithm that conforms to the rules expected for many Latin-script
languages.</p>
<pre><code class="lang-typescript">  wordBreaker: {
  use: 'default',
},</code></pre>

<p> On the sixth line, we're telling the <code>trie</code> where to find our wordlist. </p>
<pre><code class="lang-typescript">  sources: ['wordlist.tsv'],</code></pre>

<p> The seventh line marks the termination of the lexical model source code. If we specify any customizations, they <strong>must</strong> be declared above this line: </p>
<pre><code class="lang-typescript">};</code></pre>

<p> The eighth line is necessary to allow external applications to read the lexical model source code.</p>
<pre><code class="lang-typescript">export default source;</code></pre>


<h2> Customizing our lexical model </h2>

<p> The template, as described in the previous section, is a good starting
point, and may be all you need for you language. However, most language
require a few customizations. The <code>trie</code> model supports the
following customizations: </p>

<dl>
  <dt> word breaking </dt> <dd> How to determine when words start and end in the writing system. </dd>
  <dt> search term to key </dt> <dd> How and when to ignore accents and lettercase </dd>
</dl>

<h3>Word breaking</h3>

<p> The <code>trie</code> family of lexical models needs to know what a word
is in running text. In language using the Latin script—like, English, French,
and SENĆOŦEN—finding words is easy. Words are separated by spaces or
punctuation. The actual rules for where to find words can get quite tricky to
describe, but Keyman implements the <a href="https://unicode.org/reports/tr29/#Word_Boundaries">
Unicode Standard Annex #29 §4.1 Default Word Boundary Specification </a>
which works well for most languages.
If the default doesn't <em>quite</em> work for your language,
you can <a href="../../guides/lexical-models/advanced/word-breaker.php#join">tweak it</a>.
</p>

<p> However, in languages written in other scripts—especially East Asian
scripts like Chinese, Japanese, Khmer, Lao, and Thai—there are no obvious
break in between words. For these languages, there must be special rules for
determining when words start and stop. This is what a <dfn>word breaking
function</dfn> is responsible for. It is a little bit of code that looks at some
text to determine where the words are. </p>

<h3> Search term to key </h3>

<p> To look up words quickly, the <code>trie</code> model creates a <dfn>
search key </dfn> that takes the latest word (as determined by the <a
href="#toc-word-breaking">word breaking</a> and converts it into a “regular” form.
The purpose of this “regular” form is to make searching for a word work,
regardless of things such as <strong>accents</strong>,
<strong>diacritics</strong>, <strong>lettercase</strong>, and minor
<strong>spelling variations</strong>.
The ”regular” form is called the <dfn>key</dfn>.  Typically, the key is always
in lowercase, and lacks all accents and diacritics. For example, the key form
of “naïve" is "naive" and the keyform of Canada is “canada”. </p>

<p> The form of the word that is stored is “regularized” through the use of a
<dfn>key function</dfn>, which you can define in TypeScript code. </p>

<p> The key function takes a string, the raw search term, and returns a
string, being the “regular” key. As an example, consider the <strong>default
key function</strong>; that is, the key function that is used if you do not
specify one: </p>

<pre><code class="lang-typescript">searchTermToKey: function (term) {
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

  // Recombine any remaining decomposed forms (for Latin, there may not be many),
  // converting to Unicode Normalization form C "composed".
  let termWithoutDiacriticsNFC = termWithoutDiacritics.normalize('NFC');

  // The resultant key is lowercased, and has no accents or diacritics.
  return termWithoutDiacriticsNFC;
},</code></pre>

<p> This should be sufficient for most Latin-based writing systems. However,
there are cases, such as with SENĆOŦEN, where some characters do not decompose
into a base letter and a diacritic. In this case, it is necessary to write
your own key function. </p>
