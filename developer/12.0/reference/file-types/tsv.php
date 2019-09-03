<?php
  require_once('includes/template.php');

  head([
    'title' => "TSV files"
  ]);
?>

<h1>TSV files</h1>

<dl>
  <dt>Used by:</dt>
  <dd><span class="application">Lexical Model compiler</span>.</dd>

  <dt>Description:</dt>
  <dd>A .tsv file or a <dfn>tab-separated values file</dfn> contains a word list. This word list is used to predict and correct words using the predictive text functionality.</dd>

  <dt>Details:</dt>
  <dd>A .tsv file is a plain-text file containing of tabular data. Spreadsheet
      programs such as Microsoft Excel and Google Sheets can export into TSV format.
      TSVs can also be programmatically generated from other data sources. For advanced users, see <a href="#file-format">File Format</a> for more details.</dd>

  <dt>Distributed with lexical model:</dt>
  <dd>No. This is a development file and should not be distributed.</dd>
</dl>

<h2 id="file-format">File format</h2>

<aside>
<p><strong>For advanced users only</strong>: this documentation is intended
for users who wish to develop their own word list exporters. Most users can
use existing word list exporters. </p>
</aside>

<p>The <strong>lexical model compiler</strong> expects word lists to abide by the following <strong>tab-separated values</strong> (TSV) format:</p>
<ul>
<li>the file is a <strong>UTF-8</strong> encoded text file</li>
<li>newlines are either <strong>LF</strong> or <strong>CRLF</strong></li>
<li>the file <strong>MAY</strong> start with the UTF-8 <strong>byte-order mark</strong>
  (<abbr>BOM</abbr>); that is, if the first three bytes of the file are
  <code>EF BB BF</code>, these will be interpreted as the
  <abbr>BOM</abbr> and will be ignored.</li>
<li>the file either consists of a <strong>comment</strong> or an <strong>entry</strong></li>
<li><strong>comment</strong> lines MUST start with the <code>#</code> character on the very first column</li>
<li><strong>entries</strong> are one to three columns, separated by the (horizontal) <strong>tab character</strong> (U+0009)</li>
<li>column 1 (<strong>REQUIRED</strong>): the <strong>word form</strong>: can
  have any character except tab, CR, or LF. Surrounding whitespace characters
  are trimmed. Quote characters (<code>'</code> or <code>"</code>) are
  <strong>NOT</strong> required to surround the text and are
  <strong>NOT</strong> parsed in any special manner.</li>
<li>column 2 (<i>optional</i>): the <strong>count</strong>: a non-negative integer
  specifying how many times this entry has appeared in the corpus. Blank means
  ‘indeterminate’, and is treated as if the word exists in the corpus, but will
  be predicted at the lowest possible priority.</li>
<li>column 3 (<i>optional</i>): <strong>comment</strong>: an informative
  comment, ignored by this tool.</li>
</ul>

<aside>
<p>Source: <cite><a href="https://github.com/keymanapp/keyman/blob/029fb7c822c5a5619eaca845ecd2e5a2497d3056/developer/js/lexical-model-compiler/build-trie.ts#L21-L40">build-trie.js@029fb7c8</a></cite></p>
</aside>

<h2>Additional notes</h2>
<p>Exporting a spreadsheet from Google Sheets as a TSV will produce properly formatted output.</p>
