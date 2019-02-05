<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: createShim"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="createShim">createShim</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Create a 'shim' IFrame element to control display of overlapped elements.</p>

<?php
syntax("$kmw.util.createShim();");
params();
returns("Element", "An iframe element to be used as a barrier between KMW and dropdown lists.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>The shim management functions are only used to support IE6 (which requires an 
      intermediate IFrame element to display overlapping window correctly).  
      They are ignored by other browsers, and will not be supported in future releases.
</p>