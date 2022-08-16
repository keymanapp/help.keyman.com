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
syntax("keyman.osk.setRect(p);");
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
  "nosize", "optional boolean", "If set to <code>true</code>, prevents the user from altering the OSK's size. If set to <code>false</code>, allows the user to resize the OSK. If omitted, does not change the existing state.",
  "nomove", "optional boolean", "If set to <code>true</code>, prevents the user from relocating the OSK manually. If set to <code>false</code>, allows the user to move the OSK. If omitted, does not change the existing state."
);
?>

<p>The values and states of omitted object members will not be changed.
</p>

<p>This differs from <code>setPos()</code> in that it allows resizing the keyboard and controlling the user's ability to move/size the keyboard. Furthermore, when
<code>left</code> and <code>top</code> members are included, they override the default position of the keyboard rather than setting the position temporarily.</p>
