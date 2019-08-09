<?php
  require_once('includes/template.php');

  head([
    'title' => "Developing lexical models"
  ]);
?>
<h1 class="title">Developing lexical models</h1>

<p> A <strong> lexical model </strong> is what powers autocorrect and predictive text for a language. If you want your keyboard to predict and correct words in your language, you must create a lexical model that generates suggestions for your language. </p>

<dl>
  <dt><a href="intro">What is a lexical model?</a></dt>
  <dt><a href="develop">Developing a lexical model</a></dt>
  <dt><a href="distribute">Distributing a lexical model</a></dt>
</dl>


<h1 id="how-to-build-a-lexical-model">How to build a lexical model</h1>
<p>A <strong>lexical model</strong> or a <strong>dictionary</strong> is a way to enable <strong>predictive text</strong> for your keyboard.</p>
<h2 id="requirements">Requirements</h2>
<p>You will need to have:</p>
<ul>
<li><a href="https://nodejs.org/en/">Node.js</a> &gt;= 10.0</li>
<li>(Windows only) <a href="https://gitforwindows.org/">Git Bash</a></li>
</ul>
<h2 id="step-1-get-some-data">Step 1: Get some data</h2>
<p>To predict words in your language, a lexical model needs to know the words in your language!</p>
<p>Ultimately, the <strong>lexical model compiler</strong> requires a tab-separated values (TSV) file, described in the <a href="./#appendix:tsv">appendix</a>. However, most users will use a <strong>spreadsheet</strong> app like <a href="https://sheets.google.com/">Google Sheets</a> or <a href="https://products.office.com/en/excel">Microsoft Excel</a> to create this TSV file.</p>
<h3 id="example">Example</h3>
<p>I have words in my language of choice, SENĆOŦEN.</p>
<p>Here is my list of words, with the count of how many times I’ve seen the word:</p>
<table>
<thead>
<tr class="header">
<th>Word</th>
<th>Count</th>
</tr>
</thead>
<tbody>
<tr class="odd">
<td>TŦE</td>
<td>13644</td>
</tr>
<tr class="even">
<td>E</td>
<td>9134</td>
</tr>
<tr class="odd">
<td>SEN</td>
<td>4816</td>
</tr>
<tr class="even">
<td>Ȼ</td>
<td>3479</td>
</tr>
<tr class="odd">
<td>SW̱</td>
<td>2621</td>
</tr>
<tr class="even">
<td>NIȽ</td>
<td>2314</td>
</tr>
<tr class="odd">
<td>U¸</td>
<td>2298</td>
</tr>
<tr class="even">
<td>I¸</td>
<td>1988</td>
</tr>
<tr class="odd">
<td>ȻSE</td>
<td>1925</td>
</tr>
<tr class="even">
<td>I</td>
<td>1884</td>
</tr>
</tbody>
</table>
<p>I’ve entered this information into my spreadsheet of choice, <a href="https://sheets.google.com/">Google Sheets</a>. I’ve shared this spreadsheet publicly <a href="https://docs.google.com/spreadsheets/d/10zhIc439BCSSooL_-HeJ6TUHd-ovkiXYcIGe-pHDTSg/edit?usp=sharing">here</a>. The order of the columns matters:</p>
<p>The first column <strong>MUST</strong> be the words, and the second column <strong>MUST</strong> be the counts. Additional columns are ignored. The spreadsheet can also be a single column of all of the words in the language.</p>
<p>This is what my word list looks like in Google Sheets:</p>
<p><img src="<?= cdn('img/developer/120/lm/sencoten-sheets-full.png') ?>" alt="The word list, as it appears in Google Sheets" />.</p>
<p>Now, we download the spreadsheet in the <a href="#appendix:tsv">required format</a>. To do this, in Google Sheets, select “File” » “Download as” » “Tab-separated values (.tsv, current sheet)”.</p>
<figure>
<img src="<?= cdn('img/developer/120/lm/sencoten-sheets-save-as.png') ?>" alt="" /><figcaption>Exporting the TSV file from Google Sheets</figcaption>
</figure>
<p>I’ll save mine as <strong>wordlist.tsv</strong>.</p>
<h2 id="step-2-create-a-unique-model-id">Step 2: Create a unique model ID</h2>
<p>Now that we have our TSV file, called <strong>wordlist.tsv</strong>, let’s create the associated packaging folder and data.</p>
<p>Our model needs a <strong>unique ID</strong>. For publicly sharing models online in the <a href="https://github.com/keymanapp/lexical-model">lexical-models repository</a>, the unique ID must be a string in the format:</p>
<blockquote>
<p><em>author</em>._bcp47_._uniq_</p>
</blockquote>
<h3 id="author">Author</h3>
<p><em>author</em> is an identifier for the maintainer of the model. This identifier is a string of one or more ASCII lowercase letters, digits, and the underscore (<code>_</code>), and it must begin with a lowercase ASCII letter. Some organizations have an author identifier already, like <code>sil</code> for SIL International, <code>nrc</code> for the National Research Council Canada, and <code>fv</code> for FirstVoices.</p>
<h3 id="bcp-47">BCP 47</h3>
<p><em>bcp47</em> is the <a href="https://tools.ietf.org/html/bcp47">BCP 47</a> tag of the language, script, and region you are modelling. If you need to uses dashes in your language’s BCP 47 tag, replace them with underscores; likewise, replace uppercase letters with lowercase letters.</p>
<p>Typically, this will just be the <a href="https://iso639-3.sil.org/code_tables/639/data">ISO 639-3</a> code of your language, and nothing else. In the case of SENĆOŦEN, <a href="https://iso639-3.sil.org/code/str">its ISO 639-3 code is <code>str</code></a>.</p>
<p>In some cases, you will have to specify the script (writing system), and the region. For example, if I’m creating a model for Plains Cree (ISO 639-3: <code>crk</code>) it can be written both in the Latin script (<a href="https://en.wikipedia.org/wiki/ISO_15924">ISO 15924</a>: <code>Latn</code>) and in Unified Canadian Aboriginal Syllabics (<a href="https://en.wikipedia.org/wiki/ISO_15924">ISO 15924</a>: <code>Cans</code>). Say my model is only designed for syllabics. The correct BCP 47 tag is:</p>
<pre><code>crk-Cans</code></pre>
<p>However, to create a valid lexical model ID, we need to replace the dash with an underscores, and convert all uppercase letters to lowercase. Thus, our <code>bcp47</code> is:</p>
<pre><code>crk_cans</code></pre>
<h3 id="uniq">Uniq</h3>
<p><em>uniq</em> is an arbitrary tag that uniquely identifies your specific model. This identifier can be anything, as long as it hasn’t already been used before for this specific author or organization. As with <code>author</code> identifier is one or more ASCII lowercase letters, digits, and the underscore (<code>_</code>), and it must start with a lowercase ASCII letter.</p>
<h3 id="example-1">Example</h3>
<p>My author is called <code>example</code>, and the BCP 47 for my language is <code>str</code>. I’ll give my model the unique tag of <code>tutorial</code>. Thus my unique model is:</p>
<pre><code>example.str.tutorial</code></pre>
<h2 id="step-4-creating-the-package-files">Step 4: Creating the package files</h2>
<p>Now that we have a unique ID for our model, and wordlist data, we can the appropriate packaging files.</p>
<p>Say we’re currently in a folder called <code>release</code>: our model will follow this template for its directory structure.</p>
<pre><code>release/
└── {author}/
    └── {bcp47}.{uniq}/
        ├── {author}.{bcp47}.{uniq}.model_info
        └── source/
            ├── {author}.{bcp47}.{uniq}.model.kps
            ├── wordlist.tsv
            └── model.ts</code></pre>
<p>Notice how under <code>release</code>, there is a folder that is named after the author. Within that folder is a folder for each model created by that particular author. Within each model folder, there is a folder called <code>source</code> that contains <strong>wordlist.tsv</strong>. We will discuss what the other files are called a bit later in this document.</p>
<p>For our example of <code>example.str.tutorial</code>, I’ll want the following folder structure:</p>
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
<p>We need to create the remaining files: - The “model info” file: <code>example.str.tutorial.model_info</code> - The package file: <code>example.str.tutorial.model.kps</code> - The model configuration file: <code>model.ts</code></p>
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
<blockquote>
<p>NOTE: the only current valid value for <code>license</code> is <code>"mit"</code>.</p>
</blockquote>
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
<h2 id="step-5-build-the-model">Step 5: Build the model</h2>
<h2 id="appendix-tab-separated-wordlist-file-format-specification">Appendix: Tab-separated wordlist file format specification</h2>
<p><a id="appendix:tsv"></a></p>
<p>The <strong>lexical model compiler</strong> expects wordlists to abide by the following <strong>tab-separated values</strong> (TSV) format:</p>
<ul>
<li>the file must be <strong>UTF-8</strong> encoded text file</li>
<li>newlines are either <strong>LF</strong> or <strong>CRLF</strong></li>
<li>the file either consists of a <strong>comment</strong> or an <strong>entry</strong></li>
<li><strong>comment</strong> lines MUST start with the ‘#’ character on the very first column</li>
<li><strong>entries</strong> are one or two columns, separated by the (horizontal) <strong>tab character</strong> (U+0009)</li>
<li>column 1 (REQUIRED): the <strong>word form</strong>: can have any character except tab, CR, or LF. Surrounding whitespace characters are trimmed. Quote characters (<code>'</code> or <code>"</code>) are <strong>NOT</strong> required to surround the text and are <strong>NOT</strong> parsed in any special manner.</li>
<li>column 2 (optional): the <strong>count</strong>: a non-negative integer specifying how many times this entry has appeared in the corpus. Blank means ‘indeterminate’, and is treated as if the word exists in the corpus, but will be predicted at the lowest possible priority.</li>
<li>any other columns are ignored.</li>
</ul>
<blockquote>
<p>Source: <a href="https://github.com/keymanapp/keyman/blob/307436e7c24caa5c720b272640184362c4dc3223/developer/js/lexical-model-compiler/build-trie.ts#L21-L66">build-trie.js@e58173f</a></p>
</blockquote>
<p>Exporting a spreadsheet from Google Sheets as a TSV will produce properly formatted output. I have not found a reliable output option in Microsoft Excel for Mac that will produce output in the expected format.</p>
