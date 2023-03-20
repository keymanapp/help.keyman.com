<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: toNzString"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="toNzString">toNzString</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Returns string value for the item, or the default string value if the argument is null, false, an empty string, or undefined.</p>

<?php
syntax("keyman.util.toNzString(item, dflt);");
params("item", "*", "Variable to convert.",
  "dflt", "optional *", "Value to use of the converted variable is null, false, the empty string, or undefined.");
returns("string", "The string equivalent value for the item being converted.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>...
</p>