<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: show"
  ]);
  require_once('includes/__docheader.php')
?>

<h1 class="title" id="show">show</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Display, hide or toggle OSK visibility.</p>

<?php
syntax("$kmw.osk.show(mode);");
params("mode", "optional boolean", "<code>true</code> to display, <code>false</code> to hide, omitted to toggle.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>Visibility will be toggled on or off if the argument is omitted.
</p>