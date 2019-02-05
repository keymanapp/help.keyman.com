<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: rgba"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="rgba">rgba</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Browser-independent alpha-channel management.</p>

<?php
syntax("$kmw.util.rgba(s, r, g, b, a);");
params("s", "Element", "Element style object",
  "r", "number", "Value for red (0-255)",
  "g", "number", "Value for green (0-255)",
  "b", "number", "Value for blue (0-255)",
  "a", "number", "Value for alpha/opacity (0-1.0)"
  );
returns("string", "Background color CSS value.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>This function returns the required string value for setting background 
      transparency, and applies an appropriate a filter to the element for IE versions before IE9.
</p>