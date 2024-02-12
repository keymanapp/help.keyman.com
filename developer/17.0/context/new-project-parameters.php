<?php
  require_once('includes/template.php');

  head([
    'title' => "New Project Parameters Dialog"
  ]);
?>

<h1>New Project Parameters Dialog</h1>

<p class='context-main-image'><img src="<?= cdn('img/developer/120/ui/frmNewProjectParameters.png') ?>" alt="New Project Parameters dialog" /></p>

<p>Allows you to quickly fill in common parameters for a new keyboard project, adding keyboard, package, documentation and metadata files,
following the <a href='/developer/keyboards/'>file layout</a> used in the <a href='https://github.com/keymanapp/keyboards'>Keyman keyboards repository</a>.</p>

<p>Projects can also be created from the command line with <a href='kmconvert'>KMConvert</a>.

<h3>Parameters</h3>

<dl>
  <dt>Keyboard Name</dt>
  <dd>The descriptive name of the keyboard. This will be set in the <a href='/developer/language/reference/name'><code>&amp;Name</code></a> store in the keyboard,
      in the package name, and where appropriate in documentation and metadata.</dd>
  
  <dt>Copyright</dt>
  <dd>A copyright string for the keyboard. This will be set in the <a href='/developer/language/reference/copyright'><code>&amp;Copyright</code></a> store in the keyboard,
      in the package metadata, and where appropriate in documentation and metadata.</dd>

  <dt>Version</dt>
  <dd>The initial version number of the keyboard. This should follow the format specified in the  <a href='/developer/language/reference/keyboardversion'><code>&amp;Keyboardversion</code></a> store for
      the keyboard. This will be set also in the package metadata, and where appropriate in documentation and metadata.</dd>

  <dt>Author</dt>
  <dd>The name of the developer of the keyboard. This will be set in the package metadata, and where appropriate in documentation and metadata.</dd>

  <dt>Targets</dt>
  <dd>Specifies the default deployment targets for the keyboard, set in the <a href='/developer/language/reference/targets'><code>&amp;Targets</code></a> store in the keyboard,
      and controls the files added to the package initially. This also is reflected in documentation and metadata.</dd>

  <dt>Languages</dt>
  <dd>Specifies the default BCP 47 language tags which will be added to the package metadata and project metadata.</dd>
  
  <dt>Path</dt>
  <dd>Specifies the base path where the project folder will be created. The project folder name will be the keyboard ID. If the folder already exists, then you will be prompted
      before Keyman Developer overwrites files inside it.</dd>
  
  <dt>Keyboard ID</dt>
  <dd>The base filename of the keyboard, project and package. This must conform to the Keyman keyboard identifier rules, using the characters a-z, 0-9 and _ (underscore) only.</dd>
</dl>
