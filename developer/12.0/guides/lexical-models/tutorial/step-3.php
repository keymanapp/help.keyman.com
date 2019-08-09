<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 3: Get some language data"
  ]);
?>

<style type="text/css">
  figure > img {
    max-width: 100%;
  }

  figure {
    text-align: center;
    margin: 0 10px 10px 10px;
  }

  figure > table {
    margin: 0 auto 10px ;
  }

  figure > table thead tr {
    background-color: #333;
    color: #fff;
  }
  figure > table tbody tr:nth-child(odd) { background-color: #fff }
  figure > table tbody tr:nth-child(even) { background-color: #eee }
  figure > table td {
    padding: .25em .5em;
  }
  figure > table th {
    padding: .25em 1em;
  }

</style>

<h1>Step 3: Get some language data</h1>


<p>To predict words in your language, a lexical model needs to know the words in your language!</p>

<p>Ultimately, the <strong>lexical model compiler</strong> requires a tab-separated values (TSV) file, described in the <a href="./#appendix:tsv">appendix</a>. However, most users will use a <strong>spreadsheet</strong> app like <a href="https://sheets.google.com/">Google Sheets</a> or <a href="https://products.office.com/en/excel">Microsoft Excel</a> to create this TSV file.</p>

<h2>Example</h2>

<p>I have words in my language of choice, SENĆOŦEN.</p>
<p>Here is my list of words, with the count of how many times I’ve seen the word:</p>

<figure>
  <table>
    <thead>
      <tr> <th>Word</th> <th>Count</th> </tr>
    </thead>
    <tbody>
      <tr> <td>TŦE</td> <td>13644</td> </tr>
      <tr> <td>E</td> <td>9134</td> </tr>
      <tr> <td>SEN</td> <td>4816</td> </tr>
      <tr> <td>Ȼ</td> <td>3479</td> </tr>
      <tr> <td>SW̱</td> <td>2621</td> </tr>
      <tr> <td>NIȽ</td> <td>2314</td> </tr>
      <tr> <td>U¸</td> <td>2298</td> </tr>
      <tr> <td>I¸</td> <td>1988</td> </tr>
      <tr> <td>ȻSE</td> <td>1925</td> </tr>
      <tr> <td>I</td> <td>1884</td> </tr>
    </tbody>
  </table>
  <figcaption> My word list of ten SENĆOŦEN words, with counts </figcaption>
</figure>


<p>I’ve entered this information into my spreadsheet of choice, <a href="https://sheets.google.com/">Google Sheets</a>. I’ve shared this spreadsheet publicly <a href="https://docs.google.com/spreadsheets/d/10zhIc439BCSSooL_-HeJ6TUHd-ovkiXYcIGe-pHDTSg/edit?usp=sharing">here</a>. The order of the columns matters:</p>
<p>The first column <strong>MUST</strong> be the words, and the second column <strong>MUST</strong> be the counts. Additional columns are ignored. The spreadsheet can also be a single column of all of the words in the language.</p>
<p>This is what my word list looks like in Google Sheets:</p>

<figure>
  <img src="<?= cdn('img/developer/120/lm/sencoten-sheets-full.png') ?>" alt="screenshot of the word list in Google Sheets" />
  <figcaption> The word list, as it appears in Google Sheets </figcaption>
</figure>

<p>Now, we download the spreadsheet in the <a href="#appendix:tsv">required format</a>. To do this, in Google Sheets, select “File” » “Download as” » “Tab-separated values (.tsv, current sheet)”.</p>

<figure>
  <img src="<?= cdn('img/developer/120/lm/sencoten-sheets-save-as.png') ?>" alt="screenshot of “Save as…” menu in Google Sheets, selecting ”TSV”" />
  <figcaption>Exporting the TSV file from Google Sheets</figcaption>
</figure>
<p>I’ll save mine as <strong>wordlist.tsv</strong>.</p>

<p>Now that we have… TODO</p>

<p><a href="step-4.php" title="TODO">TODO</a></p>
