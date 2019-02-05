<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: setPos"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="setPos">setPos</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Set absolute position and size of desktop OSK window, limited to screen.</p>

<?php
syntax("$kmw.osk.setPos(pt)");
params("pt", "Object", "An object with the two properties <code>left</code> and <code>top</code>, used to set the position of the OSK.");
returns();
?>
