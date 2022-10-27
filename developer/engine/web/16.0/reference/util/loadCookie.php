<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: loadCookie"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="loadCookie">loadCookie</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Get a document cookie, or an array of all document cookies.</p>

<?php
syntax("keyman.util.loadCookie(cn);");
params("cn", "optional string", "Name of the cookie to be loaded if not loading the default cookie.");
returns("Object", "An array of names and strings or an array of variables and values.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>...
</p>