<?php
  require_once('includes/template.php');

  head([
    'title' => "Property: build"
  ]);

  require_once('includes/__docheader.php')
?>

<h1 class="title" id="core_build">build</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Denotes the release-version .patch component for the loaded KeymanWeb instance.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<?php
echo codebox(<<<END
keyman.build
END
);
?>

<h2 id="Type" name="Type">Type</h2>

<p>string</p>

<h3 id="Access" name="Access">Access</h3>

<p>Read only</p>

<h3 id="ReturnValue" name="ReturnValue">Return Value</h3>

<p>(for example) <code>14.0.1</code></p>

<h2 id="Description" name="Description">Description</h2>

<p>...
</p>