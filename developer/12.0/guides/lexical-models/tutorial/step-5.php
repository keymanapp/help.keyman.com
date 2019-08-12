<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 4: Creating the package file"
  ]);
?>

<h1>Step 4: Creating the package file</h1>

<p>Now that we have a unique ID for our model, and wordlist data, we can the
  appropriate packaging files.</p>

<p>Say we’re currently in a folder called <code>release</code>: our model will
  follow this template for its directory structure.</p>

<pre><code>release/
└── {author}/
    └── {bcp47}.{uniq}/
        ├── {author}.{bcp47}.{uniq}.model_info
        └── source/
            ├── {author}.{bcp47}.{uniq}.model.kps
            ├── wordlist.tsv
            └── model.ts</code></pre>

<p>Notice how under <code>release</code>, there is a folder that is named
  after the author. Within that folder is a folder for each model created by
  that particular author. Within each model folder, there is a folder called
  <code>source</code> that contains <strong>wordlist.tsv</strong>. We will
  discuss what the other files are called a bit later in this document.</p>

<p>For our example of <code>example.str.tutorial</code>, I’ll want the
following folder structure:</p>

<pre><code>release/
└── example/
    └── str.tutorial/
        ├── example.str.tutorial.model_info
        └── source/
            ├── example.str.tutorial.model.kps
            ├── wordlist.tsv
            └── model.ts</code></pre>

<p>To create this folder structure, I can execute the following in Git Bash or the terminal:</p>

<pre><code>cd /type/the/path/to/release
mkdir -p example/str.tutorial/source</code></pre>

<p>Now move the wordlist to the appropriate place:</p>

<pre><code>mv /type/the/current/path/to/wordlist.tsv example/str.tutorial/source/</code></pre>

<p>I now have the following folder structure:</p>

<pre><code>.
└── example
    └── str.tutorial
        └── source
            └── wordlist.tsv</code></pre>

<p>We need to create the remaining files:</p>
<dl>
  <dt><code>example.str.tutorial.model_info</code></dt> <dd>The “model info” file</dd>
  <dt><code>example.str.tutorial.model.kps</code></dt> <dd>The package file</dd>
  <dt><code>model.ts</code></dt> <dd>The model configuration file</dd>
</dl>

<h2 id="step-4.1-creating-the-model-info-file">Step 4.1: Creating the model info file</h2>

<p>The model info contains a little bit of metadata that is required when distributing packages online using Keyman Cloud. Thus, <strong>if you do not plan to distribute this model on Keyman Cloud, you may skip this step</strong>.</p>

<p>The model info is provided as a JSON file that lists the model license and a short description of the lexical model.</p>

<p>The <code>.model_info</code> file should follow this template:</p>

<div class="sourceCode" id="cb9"><pre class="sourceCode json"><code class="sourceCode json"><span id="cb9-1"><a href="#cb9-1"></a><span class="fu">{</span></span>
<span id="cb9-2"><a href="#cb9-2"></a>    <span class="dt">&quot;license&quot;</span><span class="fu">:</span> <span class="st">&quot;&lt;SPDX license identifier&gt;&quot;</span><span class="fu">,</span></span>
<span id="cb9-3"><a href="#cb9-3"></a>    <span class="dt">&quot;description&quot;</span><span class="fu">:</span> <span class="st">&quot;&lt;short description of the lexical model&gt;&quot;</span></span>
<span id="cb9-4"><a href="#cb9-4"></a><span class="fu">}</span></span></code></pre></div>

<p>Copy this template, and use it to create your own <code>.model_info</code> file.</p>

<p>Save this file to <code>{author}/{bcp47}.{uniq}/{author}.{bcp47}.{uniq}.model_info</code>.</p>

<aside>
  <p><strong>NOTE</strong>: the only current valid value for <code>license</code> is <code>"mit"</code>.</p>
</aside>

<p>In our <code>example.str.tutorial</code> example, I’ll use the following <code>.model_info</code>.</p>

<div class="sourceCode" id="cb10"><pre class="sourceCode json"><code class="sourceCode json"><span id="cb10-1"><a href="#cb10-1"></a><span class="fu">{</span></span>
<span id="cb10-2"><a href="#cb10-2"></a>    <span class="dt">&quot;license&quot;</span><span class="fu">:</span> <span class="st">&quot;mit&quot;</span><span class="fu">,</span></span>
<span id="cb10-3"><a href="#cb10-3"></a>    <span class="dt">&quot;description&quot;</span><span class="fu">:</span> <span class="st">&quot;Predicts words in the SENĆOŦEN language (Saanich Dialect)&quot;</span></span>
<span id="cb10-4"><a href="#cb10-4"></a><span class="fu">}</span></span></code></pre></div>

<p>I’ll save this file to <code>example/str.tutorial/example.str.tutorial.model_info</code>.</p>


<h2 id="step-4.2-creating-the-kps-file">Step 4.2: Creating the KPS file</h2>

<p><strong>TODO:</strong></p>

<div class="sourceCode" id="cb11"><pre class="sourceCode xml"><code class="sourceCode xml"><span id="cb11-1"><a href="#cb11-1"></a><span class="kw">&lt;?xml</span> version=&quot;1.0&quot; encoding=&quot;utf-8&quot;<span class="kw">?&gt;</span></span>
<span id="cb11-2"><a href="#cb11-2"></a><span class="kw">&lt;Package&gt;</span></span>
<span id="cb11-3"><a href="#cb11-3"></a>  <span class="kw">&lt;System&gt;</span></span>
<span id="cb11-4"><a href="#cb11-4"></a>    <span class="kw">&lt;KeymanDeveloperVersion&gt;</span>12.0.1500.0<span class="kw">&lt;/KeymanDeveloperVersion&gt;</span></span>
<span id="cb11-5"><a href="#cb11-5"></a>    <span class="kw">&lt;FileVersion&gt;</span>12.0<span class="kw">&lt;/FileVersion&gt;</span></span>
<span id="cb11-6"><a href="#cb11-6"></a>  <span class="kw">&lt;/System&gt;</span></span>
<span id="cb11-7"><a href="#cb11-7"></a>  <span class="kw">&lt;Options&gt;</span></span>
<span id="cb11-8"><a href="#cb11-8"></a>    <span class="kw">&lt;FollowKeyboardVersion/&gt;</span></span>
<span id="cb11-9"><a href="#cb11-9"></a>  <span class="kw">&lt;/Options&gt;</span></span>
<span id="cb11-10"><a href="#cb11-10"></a>  <span class="kw">&lt;Info&gt;</span></span>
<span id="cb11-11"><a href="#cb11-11"></a>    <span class="kw">&lt;Name</span><span class="ot"> URL=</span><span class="st">&quot;&quot;</span><span class="kw">&gt;</span>SENĆOŦEN (Saanich Dialect) Lexical Model<span class="kw">&lt;/Name&gt;</span></span>
<span id="cb11-12"><a href="#cb11-12"></a>    <span class="kw">&lt;Copyright</span><span class="ot"> URL=</span><span class="st">&quot;&quot;</span><span class="kw">&gt;</span>© 2019 National Research Council Canada<span class="kw">&lt;/Copyright&gt;</span></span>
<span id="cb11-13"><a href="#cb11-13"></a>    <span class="kw">&lt;Author</span><span class="ot"> URL=</span><span class="st">&quot;mailto:Eddie.Santos@nrc-cnrc.gc.ca&quot;</span><span class="kw">&gt;</span>Eddie Antonio Santos<span class="kw">&lt;/Author&gt;</span></span>
<span id="cb11-14"><a href="#cb11-14"></a>    <span class="kw">&lt;Version&gt;</span>1.0.3<span class="kw">&lt;/Version&gt;</span></span>
<span id="cb11-15"><a href="#cb11-15"></a>  <span class="kw">&lt;/Info&gt;</span></span>
<span id="cb11-16"><a href="#cb11-16"></a>  <span class="kw">&lt;Files&gt;</span></span>
<span id="cb11-17"><a href="#cb11-17"></a>    <span class="kw">&lt;File&gt;</span></span>
<span id="cb11-18"><a href="#cb11-18"></a>      <span class="kw">&lt;Name&gt;</span>..\build\nrc.str.sencoten.model.js<span class="kw">&lt;/Name&gt;</span></span>
<span id="cb11-19"><a href="#cb11-19"></a>      <span class="kw">&lt;Description&gt;</span>Lexical model nrc.str.sencoten.model.js<span class="kw">&lt;/Description&gt;</span></span>
<span id="cb11-20"><a href="#cb11-20"></a>      <span class="kw">&lt;CopyLocation&gt;</span>0<span class="kw">&lt;/CopyLocation&gt;</span></span>
<span id="cb11-21"><a href="#cb11-21"></a>      <span class="kw">&lt;FileType&gt;</span>.model.js<span class="kw">&lt;/FileType&gt;</span></span>
<span id="cb11-22"><a href="#cb11-22"></a>    <span class="kw">&lt;/File&gt;</span></span>
<span id="cb11-23"><a href="#cb11-23"></a>  <span class="kw">&lt;/Files&gt;</span></span>
<span id="cb11-24"><a href="#cb11-24"></a>  <span class="kw">&lt;LexicalModels&gt;</span></span>
<span id="cb11-25"><a href="#cb11-25"></a>    <span class="kw">&lt;LexicalModel&gt;</span></span>
<span id="cb11-26"><a href="#cb11-26"></a>      <span class="kw">&lt;Name&gt;</span>SENĆOŦEN dictionary<span class="kw">&lt;/Name&gt;</span></span>
<span id="cb11-27"><a href="#cb11-27"></a>      <span class="kw">&lt;ID&gt;</span>nrc.str.sencoten<span class="kw">&lt;/ID&gt;</span></span>
<span id="cb11-28"><a href="#cb11-28"></a>      <span class="kw">&lt;Version&gt;</span>1.0.3<span class="kw">&lt;/Version&gt;</span></span>
<span id="cb11-29"><a href="#cb11-29"></a>      <span class="kw">&lt;Languages&gt;</span></span>
<span id="cb11-30"><a href="#cb11-30"></a>        <span class="kw">&lt;Language</span><span class="ot"> ID=</span><span class="st">&quot;str&quot;</span><span class="kw">&gt;</span>North Straits Salish<span class="kw">&lt;/Language&gt;</span></span>
<span id="cb11-31"><a href="#cb11-31"></a>        <span class="kw">&lt;Language</span><span class="ot"> ID=</span><span class="st">&quot;str-Latn&quot;</span><span class="kw">&gt;</span>SENĆOŦEN<span class="kw">&lt;/Language&gt;</span></span>
<span id="cb11-32"><a href="#cb11-32"></a>      <span class="kw">&lt;/Languages&gt;</span></span>
<span id="cb11-33"><a href="#cb11-33"></a>    <span class="kw">&lt;/LexicalModel&gt;</span></span>
<span id="cb11-34"><a href="#cb11-34"></a>  <span class="kw">&lt;/LexicalModels&gt;</span></span>
<span id="cb11-35"><a href="#cb11-35"></a><span class="kw">&lt;/Package&gt;</span></span></code></pre></div>

<h2 id="step-4.3-creating-the-model-file">Step 4.3: Creating the model file</h2>

<p>Finally, the <code>model.ts</code> is a TypeScript source code file that is executed to build the model. For our purposes, we can simply copy-paste the following example:</p>

<div class="sourceCode" id="cb12"><pre class="sourceCode typescript"><code class="sourceCode typescript"><span id="cb12-1"><a href="#cb12-1"></a><span class="im">import</span> LexicalModelCompiler <span class="im">from</span> <span class="st">&quot;@keymanapp/developer-lexical-model-compiler&quot;</span><span class="op">;</span></span>
<span id="cb12-2"><a href="#cb12-2"></a></span>
<span id="cb12-3"><a href="#cb12-3"></a>(<span class="kw">new</span> LexicalModelCompiler).<span class="fu">compile</span>(<span class="op">{</span></span>
<span id="cb12-4"><a href="#cb12-4"></a>  format<span class="op">:</span> <span class="st">&#39;trie-1.0&#39;</span><span class="op">,</span></span>
<span id="cb12-5"><a href="#cb12-5"></a>  wordBreaking<span class="op">:</span> <span class="st">&#39;default&#39;</span><span class="op">,</span></span>
<span id="cb12-6"><a href="#cb12-6"></a>  sources<span class="op">:</span> <span class="op">[</span><span class="st">&#39;wordlist.tsv&#39;</span><span class="op">],</span></span>
<span id="cb12-7"><a href="#cb12-7"></a><span class="op">}</span>)<span class="op">;</span></span></code></pre></div>

<p>Most importantly, this file specifies that model will use the word list in <code>wordlist.tsv</code>.</p>

<p>For simple lexical models with exactly one wordlist called <code>wordlist.tsv</code>, <strong>this file does not need to be changed any further</strong>.</p>

<p>However, it specifies a few other things:</p>

<ul>
  <li><code>format: 'trie-1.0'</code>: Use the trie back-end, that allows for prediction based on prefixes of words.</li>
  <li><code>wordBreaking: 'default'</code>: use Unicode’s default word boundary rules to find where “words” are when predicting text. This works for most languages and writing systems, however, it does not work for languages/writing systems that do not mark breaks between words, e.g., Chinese, Thai, Laos, Khmer, and Japanese, to name a few. For these writing systems, you must provide a language-specific word breaking algorithm to find the words in running text.</li>
</ul>


<p><a href="step-404.php" title="TODO">TODO</a></p>
