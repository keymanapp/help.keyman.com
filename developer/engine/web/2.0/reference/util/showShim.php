<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: showShim"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="showShim">showShim</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Inserts a 'shim' IFrame element to manage display of overlapped elements.</p>

<?php
syntax("$kmw.util.showShim(Pvkbd, shim, Phelp);");
params("Pvkbd", "Element", "The visual keyboard's DIV element.",
  "shim", "Element", "The IFrame shim element.",
  "Phelp", "optional Element", "An OSK help DIV element.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>The shim management functions are only used to support IE6 (which requires an 
      intermediate IFrame element to display overlapping window correctly).  
      They are ignored by other browsers, and may not be supported in future releases.
</p>