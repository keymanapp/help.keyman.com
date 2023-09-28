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
<a href="../../../reference/file-types/tsv">TSV source files</a>, as well as
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
Keyman supplies a default algorithm that conforms to the rules expected for many
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
require a few customizations. The <code>trie-1.0</code> wordlist model
supports the following customizations: </p>

<dl>
  <dt> <a href="punctuation"> Punctuation </a> </dt>
  <dd> How to define certain punctuation in your language </dd>
  <dt> <a href="word-breaker"> Word breaker </a> </dt>
  <dd> How to determine when words start and end in the writing system </dd>
  <dt> <a href="search-term-to-key"> Search term to key </a> </dt>
  <dd> How and when to ignore accents and letter case </dd>
</dl>

<p> To see all of the things possible in a model definition file, see the
<a href="https://github.com/keymanapp/keyman/blob/stable-14.0/developer/js/source/lexical-model-compiler/lexical-model.ts#L95-L146">
  <code>LexicalModelSource</code> interface</a>.
