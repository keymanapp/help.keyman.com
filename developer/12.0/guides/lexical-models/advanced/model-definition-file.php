<?php
  require_once('includes/template.php');

  head([
    'title' => "The model definition file"
  ]);
?>

<h1>The model definition file</h1>

<p>This is a small <a href="https://www.typescriptlang.org/">TypeScript</a>
source code file that tells us how to define our model.

<p>In the case of the <strong>wordlist lexical models</strong>, the model
definition file indicates where find to find the
<a href="../../../reference/file-types/tsv.php">TSV source files</a>, as well as
gives us the option to tell the compiler a little bit more about our
language’s spelling system or <em>orthography</em>.</p>

<h2> The model definition template </h2>

<p><strong>Keyman Developer</strong> provides a default model definition
similar to the following. If you want to create the file yourself, copy-paste
the following template, and save it as <code>model.ts</code>. Place this file
in the same folder as <code>wordlist.tsv</code>.</p>

<pre><code class="lang-typescript">/*
  sencoten 1.0 generated from template.

  This is a minimal lexical model source that uses a tab delimited wordlist.
  See documentation online at https://help.keyman.com/developer/ for
  additional parameters.
*/

const source: LexicalModelSource = {
  format: 'trie-1.0',
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

<p> On the third line, we're telling the <code>trie</code> where to find our wordlist. </p>
<pre><code class="lang-typescript">  sources: ['wordlist.tsv'],</code></pre>

<p> The fourth line marks the termination of the lexical model source code. If we specify any customizations, they <strong>must</strong> be declared above this line: </p>
<pre><code class="lang-typescript">};</code></pre>

<p> The fifth line is necessary to allow external applications to read the lexical model source code.</p>
<pre><code class="lang-typescript">export default source;</code></pre>


<h2> Customizing a wordlist lexical model </h2>

<p> The template, as described in the previous section, is a good starting
point, and may be all you need for you language. However, most language
require a few customizations. The <code>trie</code> model supports the
following customizations: </p>

<dl>
  <dt> punctuation </dt> <dd> How to define certain punctuation in your language </dd>
  <dt> word breaking </dt> <dd> How to determine when words start and end in the writing system </dd>
  <dt> search term to key </dt> <dd> How and when to ignore accents and lettercase </dd>
</dl>

<h3> Punctuation</h3>

<aside>
  <p>Main page <a href="punctuation.php"> Punctuation </a></p>
</aside>


<h3>Word breaking</h3>

<aside>
  <p>Main page <a href="word-breaking.php"> Word breakng </a></p>
</aside>

<p> The <code>trie</code> family of lexical models needs to know what a word
is in running text. In language using the Latin script—like, English, French,
and SENĆOŦEN—finding words is easy. Words are separated by spaces or
punctuation. The actual rules for where to find words can get quite tricky to
describe, but Keyman implements the <a href="https://unicode.org/reports/tr29/#Word_Boundaries">
Unicode Standard Annex #29 §4.1 Default Word Boundary Specification </a>
which works well for most languages.
</p>

<p> However, in languages written in other scripts—especially East Asian
scripts like Chinese, Japanese, Khmer, Lao, and Thai—there are is no obvious
break in between words. For these languages, there must be special rules for
determining when words start and stop. This is what a <dfn>word breaking
function</dfn> is responsible for. It is a little bit of code that looks at some
text to determine where the words are. </p>

<h3> Search term to key </h3>

<aside>
  <p>Main page <a href="search-term-to-key.php"> Search term to key </a></p>
</aside>

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

  // The resultant key is lowercased, and has no accents or diacritics.
  return termWithoutDiacritics;
},</code></pre>

<p> This should be sufficient for most Latin-based writing systems. However,
there are cases, such as with SENĆOŦEN, where some characters do not decompose
into a base letter and a diacritic. In this case, it is necessary to write
your own key function. </p>

<h2> Write your own custom model </h2>

<p> If all of the above seems too limiting, you can write your own custom
model. This means, implementing the interface of the <code>LexicalModel</code>
class, and generating predictions yourself. This is the most difficult and
time consuming option, however, it gives you the most flexibility. </p>
