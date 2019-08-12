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
