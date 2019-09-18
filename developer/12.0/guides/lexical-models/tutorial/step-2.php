<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 2: Creating a lexical model project",
    'css' => ['template.css', 'index.css', 'prism.css', 'kmguides.css']
  ]);
?>

<h1>Step 2: Creating a lexical model project</h1>

<h2>Create the new project</h2>
<p>Start Keyman Developer. From the Project menu, select "New Project" and then "Wordlist Lexical Model."</p>

<p class='context-main-image'><img src="<?= cdn('img/developer/120/ui/frmNewLMProject.png') ?>" alt="New LM Project dialog" /></p>

<h2>New Lexical Model Project Parameters</h2>
<p> To create a lexical model project, we will need the following information: </p>

<p class='context-main-image'><img src="<?= cdn('img/developer/120/ui/frmNewLMProjectParameters.png') ?>" alt="New LM Project Parameters" /></p>

<dl>
  <dt>Author Name:</dt>
  <dd>Your name or organization, such as <code>nrc</code> or <code>sil</code>. Required.</dd>

  <dt>Model Name:</dt>
  <dd>We recommend the name of the language, dialect, or community that this model is intended for. The name needs
    to be unique from other lexical models in the language. Do not include a version string in the model name.
    Here, we use a model name <code>sencoten</code>. Required.</dd>

  <dt>Copyright:</dt>
  <dd>A copyright string for the model. Optional.</dd>

  <dt>Version:</dt>
  <dd>A version string made of <code>major revision</code>.<code>minor revision</code>.
    We recommend 1.0 for the initial version number. Required.</dd>

  <dt>Languages:</dt>
  <dd>Use the <span class="guibutton">Add</span> button to bring up the "Select BCP 47 Tag" dialog.
    When Keyman installs this lexical model, it will associate the matching keyboard with the language(s) you select here.
    In this example, we add <code>str</code> for the Straits Salish (SENĆOŦEN) language. Required</dd>
</dl>

<p class="context-main-image"><img src="<?= cdn('img/developer/120/ui/frmNewLMProjectSelectLanguage.png') ?>" alt="Select BCP 47 Tag dialog" /></p>

<p>These identifiers will be combined to make the <code class="language-none">Model ID</code> = <code>Author ID</code>.
  <code class="language-none">Primary Language</code>.<code class="language-none">Unique Name</code></p>

<p> Once we have created the project, we can begin to prepare the data! </p>

<p><a href="step-3.php" title="Step 3: Get some language data">Step 3: Get some language data</a></p>
