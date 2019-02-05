<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: ShowHelp"
  ]);

  require_once("includes/__docheader.php");
?>

<h1 class="title" id="ShowHelp">ShowHelp</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Shows the on-screen keyboard at the requested (x, y) coordinates.</p>

<?php
syntax("$kmw.ShowHelp(x, y);");
params("x", "number", "x-coordinate for display of the OSK.",
  "y", "number", "y-coordinate for display of the OSK.");
returns();
?>

<h3 id="ReplacedBy" name="ReplacedBy">Replaced by</h3>

<p><a href="../osk/setPos"><code><?="$kmw.osk.setPos()"?></code></a>, <a href="../osk/show"><code><?="$kmw.osk.show()"?></code></a></p>