<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: detachFromControl"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_detachFromControl">detachFromControl</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Detach KeymanWeb from HTML element (or IFrame).</p>

<?php
syntax("$kmw.detachFromControl(Pelem);");
params("Pelem", "Element", "Element for KeymanWeb to detach from, no longer handling input.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>Note: To be impletemented.  This will be the counterpart to the <a href="attachToControl.php">
    <code><?="$kmw.attachToControl()"?></code></a> function.
</p>