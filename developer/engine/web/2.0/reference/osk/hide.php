<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: hide"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="hide">hide</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Hides the OSK.</p>

<?php
syntax("$kmw.osk.hide()");
params();
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>Hides the On-Screen Keyboard.
</p>