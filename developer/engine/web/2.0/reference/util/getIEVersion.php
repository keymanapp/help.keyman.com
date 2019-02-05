<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: getIEVersion"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="getIEVersion">getIEVersion</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Get browser version (where browser-dependent code needed).</p>

<?php
syntax("$kmw.util.getIEVersion();");
params();
returns("number", "The primary IE version number for the browser, or 999 if not IE.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>This function is designed for tests to enable workarounds for older versions of IE.
</p>