<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 2: Get some language data",
    'css' => ['template.css', 'index.css', 'prism.css', 'dev-lexical-models.css']
  ]);
?>

<h1>Step 2: Get some language data</h1>

<p>To predict words in your language, a lexical model needs to know the words in your language!</p>

<p>Ultimately, the <strong>lexical model compiler</strong> requires a
tab-separated values (TSV) file, described in the <a
href="../../../reference/file-types/tsv.php">file types reference</a> to
generate a word list lexical model.
However, most users will use a <strong>spreadsheet</strong> app like <a
href="https://sheets.google.com/">Google Sheets</a> or <a
href="https://products.office.com/en/excel">Microsoft Excel</a> to create this
TSV file.</p>

<h2>Example</h2>

<p>I have words in my language of choice, SENĆOŦEN.
Here is my list of words, with the count of how many times I’ve seen the word:</p>

<table class="wordlist">
  <caption> List of ten SENĆOŦEN words, with counts </caption>
  <thead>
    <tr> <th scope="col">Word</th> <th scope="col">Count</th> </tr>
  </thead>
  <tbody>
    <tr> <td>TŦE</td> <td class="number">13644</td> </tr>
    <tr> <td>E</td>   <td class="number">9134</td> </tr>
    <tr> <td>SEN</td> <td class="number">4816</td> </tr>
    <tr> <td>Ȼ</td>   <td class="number">3479</td> </tr>
    <tr> <td>SW̱</td>  <td class="number">2621</td> </tr>
    <tr> <td>NIȽ</td> <td class="number">2314</td> </tr>
    <tr> <td>U¸</td>  <td class="number">2298</td> </tr>
    <tr> <td>I¸</td>  <td class="number">1988</td> </tr>
    <tr> <td>ȻSE</td> <td class="number">1925</td> </tr>
    <tr> <td>I</td>   <td class="number">1884</td> </tr>
  </tbody>
</table>

<p>I’ve entered this information into my spreadsheet of choice, <a
href="https://sheets.google.com/">Google Sheets</a>. I’ve shared this
spreadsheet publicly
<a href="https://docs.google.com/spreadsheets/d/10zhIc439BCSSooL_-HeJ6TUHd-ovkiXYcIGe-pHDTSg/edit?usp=sharing">here</a>.
The order of the columns matters:</p>

<p>The first column <strong>MUST</strong> be the words, and the second column
<strong>MUST</strong> be the counts. Additional columns are ignored. The
spreadsheet can also be a single column of all of the words in the
language.</p>

<p>This is what my word list looks like in Google Sheets:</p>

<figure>
  <img src="<?= cdn('img/developer/120/lm/sencoten-sheets-full.png') ?>"
       class="macos-screenshot"
       alt="screenshot of the word list in Google Sheets" />
  <figcaption> The word list, as it appears in Google Sheets </figcaption>
</figure>

<p>Now, we download the spreadsheet in the
<a href="../../../reference/file-types/tsv.php">required format</a>.
To do this, in Google Sheets, select “File” » “Download as” » “Tab-separated
values (.tsv, current sheet)”.</p>

<figure>
  <img src="<?= cdn('img/developer/120/lm/sencoten-sheets-save-as.png') ?>" alt="screenshot of “Save as…” menu in Google Sheets, selecting ”TSV”" />
  <figcaption>Exporting the TSV file from Google Sheets</figcaption>
</figure>

<p>I’ll save mine as <strong>wordlist.tsv</strong>.</p>

<p>Now that we have our word list, exported in the correct format, let's
create the model definition file.</p>

<p><a href="step-3.php" title="Step 3: Creating a model definition file">Next: Creating a model definition file</a></p>
