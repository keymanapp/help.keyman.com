<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: hideShim"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="hideShim">hideShim</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Hides the 'shim' IFrame element.</p>

<?php
syntax("$kmw.util.hideShim(shim);");
params("shim", "Element", "IFrame shim element to be hidden.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>The shim management functions are only used to support IE6 (which requires an 
      intermediate IFrame element to display overlapping window correctly).  
      They are ignored by other browsers, and may not be supported in future releases.
</p>