<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: saveCookie"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="saveCookie">saveCookie</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Save document variables as a cookie.</p>

<?php
syntax("$kmw.util.saveCookie(cn, cv);");
params("cn", "string", "Name of the cookie to save.",
  "cv", "Object", "An array of named arguments and values.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>...
</p>