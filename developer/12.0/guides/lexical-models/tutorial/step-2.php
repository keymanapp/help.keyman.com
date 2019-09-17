<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 2: Creating a lexical model project"
  ]);
?>

<h1>Step 2: Creating a lexical model project</h1>

<h2>Create the new project</h2>
<p>Start Keyman Developer. From the Project menu, select "New Project" and then "Wordlist Lexical Model"</p>

<p class='context-main-image'><img src="<?= cdn('img/developer/120/ui/frmNewLMProject.png') ?>" alt="New LM Project dialog" /></p>

<h2>New Project Parameters</h2>
<p> To create a lexical model project, we will need the following identifiers: </p>

<ul>
  <li>Author Name - a short unique identifier, such as <code>nrc</code> or <code>sil</code></li>
  <li>Model Name - an additional component to distinguish multiple models for a given language. For example <code>sencoten</code></li>
  <li>Languages - the canonical BCP 47 tag for the language. For example <code>str</code> for the Straits Salish (SENĆOŦEN) language</li>
</ul>

<p class="hint">
  <b>Note:</b>These fields are limited to the following characters: lower-case letters a-z, numerals 0-9,
  and punctuation underscore (_) and hyphen (-).</p>

<p>These identifiers will be combined to make the <code>Model ID</code> = <code>Author ID</code>.<code>Primary Language</code>.<code>Unique Name</code></p>

<p class='context-main-image'><img src="<?= cdn('img/developer/120/ui/frmNewLMProjectParameters.png') ?>" alt="New LM Project Parameters" /></p>

<p> Once we have created the project, we can begin to prepare the data! </p>

<p><a href="step-3.php" title="Step 3: Get some language data">Step 3: Get some language data</a></p>
