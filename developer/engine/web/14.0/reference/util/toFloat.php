<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: toFloat"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="toFloat">toFloat</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Floating conversion with default.</p>

<?php
syntax("keyman.util.toFloat(s, dflt);");
params("s", "string", "Numeric string.",
  "dflt", "number", "Default value if parse is unsuccessful.");
returns("number", "The string's conversion to a numeric value, or the default value if unsuccessful.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>...
</p>