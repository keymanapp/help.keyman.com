<?php
  require_once('includes/template.php');

  head([
    'title' => "New Project Parameters Dialog"
  ]);
?>

<h1>New Lexical Model Project Parameters Dialog</h1>

<p class='context-main-image'><img src="<?= cdn('img/developer/120/ui/frmNewLMProjectParameters.png') ?>"
  alt="New Lexical Model Project Parameters dialog" /></p>

<p>Allows you to quickly fill in common parameters for a new lexical model project, adding author name,
  model name, version, and language information following the file layout used in the
  <a href='https://github.com/keymanapp/lexical-models'>Keyman lexical-models repository</a>.</p>

<h3>Parameters</h3>

<dl>
  <dt>Author Name</dt>
  <dd>The name of the developer of the lexical model.</dd>

  <dt>Model Name</dt>
  <dd>The descriptive name of the lexical model. This should be a unique name to distinguish this lexical model
    from others in the same language.</dd>

  <dt>Copyright</dt>
  <dd>A copyright string for the model. This will be set in the the package metadata, and where appropriate in documentation and metadata.</dd>

  <dt>Version</dt>
  <dd>The initial version number of the model should usually be left at 1.0. This will be set also in the package metadata,
    and where appropriate in documentation and metadata. The version string is made of
    <code>major revision</code>.<code>minor revision</code>. When releasing significant updates to the model,
    increment the major revision (e.g. 2.0). Increment the minor revision (e.g. 1.1) for small changes to the model.</dd>

  <dt>Languages</dt>
  <dd>Specifies the default BCP 47 language tags which will be added to the <a href="../reference/file-types/metadata">
    package metadata</a> and project metadata. In order to install and use a lexical model with a Keyman keyboard,
    the BCP 47 language tags for both must be identical.
  </dd>
</dl>
