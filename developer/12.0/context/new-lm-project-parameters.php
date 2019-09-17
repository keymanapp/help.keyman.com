<?php
  require_once('includes/template.php');

  head([
    'title' => "New Project Parameters Dialog"
  ]);
?>

<h1>New Lexical Model Project Parameters Dialog</h1>

<p class='context-main-image'><img src="<?= cdn('img/developer/120/ui/frmNewLMProjectParameters.png') ?>" alt="New Lexical Model Project Parameters dialog" /></p>

<p>Allows you to quickly fill in common parameters for a new lexical model project, adding author name, nodel name, version,
following the file layout used in the <a href='https://github.com/keymanapp/lexical-models'>Keyman lexical-models repository</a>.</p>

<h3>Parameters</h3>

<dl>
  <dt>Author Name</dt>
  <dd>The name of the developer of the lexical model.</dd>

  <dt>Model Name</dt>
  <dd>The descriptive name of the lexical model.</dd>
  
  <dt>Copyright</dt>
  <dd>A copyright string for the model. This will be set in the the package metadata, and where appropriate in documentation and metadata.</dd>

  <dt>Version</dt>
  <dd>The initial version number of the keyboard. This will be set also in the package metadata, and where appropriate in documentation and metadata.</dd>

  <dt>Languages</dt>
  <dd>Specifies the default BCP 47 language tags which will be added to the package metadata and project metadata.</dd>
</dl>
