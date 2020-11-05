<?php
  require_once('includes/template.php');

  head([
    'title' => "Property: version"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_version">version</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The version number of the loaded KeymanWeb instance.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<?php
echo codebox(<<<END
keyman.version
END
)
?>

<h3 id="Type" name="Type">Type</h3>

<p>string</p>

<h3 id="Access" name="Access">Access</h3>

<p>Read only</p>

<h3 id="ReturnValue" name="ReturnValue">Return Value</h3>

<p>14.0 (for KeymanWeb 14.0)</p>

<h2 id="Description" name="Description">Description</h2>

<p>...
</p>