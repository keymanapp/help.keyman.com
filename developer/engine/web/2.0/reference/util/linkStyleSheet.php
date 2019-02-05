<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: linkStyleSheet"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="linkStyleSheet">linkStyleSheet</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Add a reference to an external stylesheet file.</p>

<?php
syntax("$kmw.util.linkStyleSheet(s);");
params("s", "string", "Path to a pre-existing stylesheet file.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>See also <a href="addStyleSheet"><code><?="$kmw.util.addStyleSheet()"?></code></a> and
  <a href="removeStyleSheet"><code><?="$kmw.util.removeStyleSheet()"?></code></a>.
</p>