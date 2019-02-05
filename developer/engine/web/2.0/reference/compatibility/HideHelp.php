<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: HideHelp"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="HideHelp">HideHelp</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Hides the OSK (visual help).</p>

<?php
syntax("$kmw.HideHelp();");
params();
returns();
?>

<h3 id="ReplacedBy" name="ReplacedBy">Replaced By</h3>

<p><a href="../osk/hide"><code><?="$kmw.osk.hide()"?></code></a></p>