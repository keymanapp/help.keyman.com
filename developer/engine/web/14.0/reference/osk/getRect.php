<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: getRect"
  ]);

  require_once('includes/__docheader.php')
?>

<h1 class="title" id="getRect">getRect</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Get absolute position and size of OSK window.</p>

<?php
syntax("keyman.osk.getRect()");
params();
returns("Object", "The position and size of the OSK's container element.")
?>

<h2 id="Description" name="Description">Description</h2>

<p>The returned <code>getRect</code> object contains the following members:</p>

<?php
obj_spec(false,
  "left", "number", "The x-coordinate corresponding to the left side of the OSK.",
  "top", "number", "The y-coordinate corresponding to the top of the OSK.",
  "width", "number", "The width (in pixels) of the OSK.",
  "height", "number", "The height (in pixels) of the OSK."
);
?>