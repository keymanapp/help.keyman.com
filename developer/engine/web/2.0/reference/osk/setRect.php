<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: setRect"
  ]);
  require_once('includes/__docheader.php');
?>

<h1 class="title" id="setRect">setRect</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Set absolute position and size of desktop OSK window.</p>

<?php
syntax("$kmw.osk.setRect(p);");
params("p", "Object", "An object specifying location and/or user permissions for altering the OSK's display.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<?php
obj_spec("setRect",
  "left", "optional number", "Sets the x-coordinate of the OSK's left side.",
  "top", "optional number", "Sets the y-coordinate of the OSK's top side.",
  "width", "optional number", "Sets the width of the OSK.",
  "height", "optional number", "Sets the height of the OSK.",
  "nosize", "optional string", "If set to <code>'none'</code>, prevents the user from altering the OSK's size.  ".
    "Setting the value to <code>'block'</code> will undo this.",
  "nomove", "optional string", "If set to <code>'none'</code>, prevents the user from relocating the OSK manually.  ".
    "Setting the value to <code>'block'</code> will undo this."
);
?>

<p>The values and states of omitted object members will not be changed.
</p>