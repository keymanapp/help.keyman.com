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

<pre class="language-js"><code>{
    "license": "&lt;SPDX license identifier&gt;",
    "description": "&lt;short description of the lexical model&gt;"
}</code></pre>

<p>Copy this template, and use it to create your own <code>.model_info</code> file.</p>

<p>Save this file to <code>{author}/{bcp47}.{uniq}/{author}.{bcp47}.{uniq}.model_info</code>.</p>

<aside>
  <p><strong>NOTE</strong>: the only current valid value for <code>license</code> is <code>"mit"</code>.</p>
</aside>

<p>In our <code>example.str.tutorial</code> example, I’ll use the following <code>.model_info</code>.</p>

<pre class="language-js"><code>{
    "license": "mit",
    "description": "Predicts words in the SENĆOŦEN language (Saanich Dialect)"
}</code></pre>

<p>I’ll save this file to <code>example/str.tutorial/example.str.tutorial.model_info</code>.</p>


<h2 id="step-4.2-creating-the-kps-file">Step 4.2: Creating the KPS file</h2>

<p><strong>TODO:</strong></p>

<pre class="language-xml"><code>&lt;?xml version=&quot;1.0&quot; encoding=&quot;utf-8&quot;?&gt;
&lt;Package&gt;
  &lt;System&gt;
    &lt;KeymanDeveloperVersion&gt;12.0.1500.0&lt;/KeymanDeveloperVersion&gt;
    &lt;FileVersion&gt;12.0&lt;/FileVersion&gt;
  &lt;/System&gt;
  &lt;Options&gt;
    &lt;FollowKeyboardVersion/&gt;
  &lt;/Options&gt;
  &lt;Info&gt;
    &lt;Name URL=&quot;&quot;&gt;SENĆOŦEN (Saanich Dialect) Lexical Model&lt;/Name&gt;
    &lt;Copyright URL=&quot;&quot;&gt;© 2019 National Research Council Canada&lt;/Copyright&gt;
    &lt;Author URL=&quot;mailto:Eddie.Santos@nrc-cnrc.gc.ca&quot;&gt;Eddie Antonio Santos&lt;/Author&gt;
    &lt;Version&gt;1.0.3&lt;/Version&gt;
  &lt;/Info&gt;
  &lt;Files&gt;
    &lt;File&gt;
      &lt;Name&gt;..\build\nrc.str.sencoten.model.js&lt;/Name&gt;
      &lt;Description&gt;Lexical model nrc.str.sencoten.model.js&lt;/Description&gt;
      &lt;CopyLocation&gt;0&lt;/CopyLocation&gt;
      &lt;FileType&gt;.model.js&lt;/FileType&gt;
    &lt;/File&gt;
  &lt;/Files&gt;
  &lt;LexicalModels&gt;
    &lt;LexicalModel&gt;
      &lt;Name&gt;SENĆOŦEN dictionary&lt;/Name&gt;
      &lt;ID&gt;nrc.str.sencoten&lt;/ID&gt;
      &lt;Version&gt;1.0.3&lt;/Version&gt;
      &lt;Languages&gt;
        &lt;Language ID=&quot;str&quot;&gt;North Straits Salish&lt;/Language&gt;
        &lt;Language ID=&quot;str-Latn&quot;&gt;SENĆOŦEN&lt;/Language&gt;
      &lt;/Languages&gt;
    &lt;/LexicalModel&gt;
  &lt;/LexicalModels&gt;
&lt;/Package&gt;</code></pre>

<h2 id="step-4.3-creating-the-model-file">Step 4.3: Creating the model file</h2>

<p>Finally, the <code>model.ts</code> is a TypeScript source code file that is executed to build the model. For our purposes, we can simply copy-paste the following example:</p>

<pre class="language-typescript"><code>import LexicalModelCompiler from &quot;@keymanapp/developer-lexical-model-compiler&quot;;

(new LexicalModelCompiler).compile({
  format: &apos;trie-1.0&apos;,
  wordBreaking: &apos;default&apos;,
  sources: [&apos;wordlist.tsv&apos;],
});</code></pre>

<p>Most importantly, this file specifies that model will use the word list in <code>wordlist.tsv</code>.</p>

<p>For simple lexical models with exactly one wordlist called <code>wordlist.tsv</code>, <strong>this file does not need to be changed any further</strong>.</p>

<p>However, it specifies a few other things:</p>

<ul>
  <li><code>format: 'trie-1.0'</code>: Use the trie back-end, that allows for prediction based on prefixes of words.</li>
  <li><code>wordBreaking: 'default'</code>: use Unicode’s default word boundary rules to find where “words” are when predicting text. This works for most languages and writing systems, however, it does not work for languages/writing systems that do not mark breaks between words, e.g., Chinese, Thai, Laos, Khmer, and Japanese, to name a few. For these writing systems, you must provide a language-specific word breaking algorithm to find the words in running text.</li>
</ul>


<p><a href="step-404.php" title="TODO">TODO</a></p>
