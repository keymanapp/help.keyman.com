<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: moveToElement"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_moveToElement">moveToElement</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Move input focus to user specified element.</p>

<?php
syntax("$kmw.moveToElement(Pelem);");
params("Pelem", "string|Element", "Moves focus to the user-specified element, finding it by element id if necessary.");
returns();
?>


<h2 id="Description" name="Description">Description</h2>

<p>Touch-based input works through simulated input fields in KeymanWeb rather than the original controls of the page.
  As a result, this function should be used in place of the default <code>Pelem.focus()</code> method.  It is used internally to allow OSK-based iteration through controls.
</p>