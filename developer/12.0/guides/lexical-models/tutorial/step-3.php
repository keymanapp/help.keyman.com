<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 3: Creating a model definition file"
  ]);
?>

<h1>Step 3: Creating a model definition file</h1>

<p>We have exported our wordlist to <code>wordlist.tsv</code>. We now need to
tell the <strong>lexical model compiler</strong> how to turn this raw word list
into a lexical model that is quick to use on a smartphone.</p>

<p>To do this, we must create a model definition file.</p>

<p>This is a small <a href="https://www.typescriptlang.org/">TypeScript</a>
source code file that tells us where to find the word list file, as well as
gives us the option to tell the compiler a little bit more about our
language’s spelling system or <em>orthography</em>.</p>

<h2> The model definition template </h2>

<p>Copy-paste the following template, and save it as <code>model.ts</code>. Place this file in the same folder as <code>wordlist.tsv</code>.</p>

<pre><code class="lang-typescript">const source: LexicalModelSource = {
  format: 'trie-1.0',
  sources: ['wordlist.tsv'],
};
export default source;</code></pre>

<p> Let's step through this file, line-by-line</p>

<p> On the first line, we're declaring a new lexical model source code. </p>
<pre><code class="lang-typescript">const source: LexicalModelSource = {</code></pre>

<p> On the second line, we're saying the lexical model will use the
<code>trie-1.0</code> format. The <code>trie<code> format creates a lexical
model from one or more word lists, and creates a lexical model that is able to
predict through thousands of words very quickly. </p>

<pre><code class="lang-typescript">  format: 'trie-1.0',</code></pre>

<p> On the third line, … </p>

<pre><code class="lang-typescript">  sources: ['wordlist.tsv'],</code></pre>

<p> We may specify customizations below this line. </p>

<p> On the fourth line, … </p>
<pre><code class="lang-typescript">};</code></pre>

<p> On the fifth line, … </p>
<pre><code class="lang-typescript">export default source;</code></pre>

<h2> Customizing our lexical model </h2>

<p><a href="step-4.php" title="Step 4: Compile the language model">Step 4: Compile the lexical model model</a></p>
