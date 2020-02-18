<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: toNumber"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="toNumber">toNumber</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>String -> number conversion, with default.</p>

<?php
syntax("keyman.util.toNumber(s, dflt);");
params("s", "string", "Numeric string.",
  "dflt", "number", "Default value if parse is unsuccessful.");
returns("number", "The string's conversion to a whole-number numeric value, or the default value if unsuccessful.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>...
</p>