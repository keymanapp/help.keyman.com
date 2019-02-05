<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: ShowPinnedHelp"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="ShowPinnedHelp">ShowPinnedHelp</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Shows the on-screen keyboard and locks it at the resulting location.</p>

<?php
syntax("$kmw.ShowPinnedHelp(x, y);");
params();
returns();
?>

<h3 id="ReplacedBy" name="ReplacedBy">Replaced by</h3>

<p><a href="../osk/setRect"><code><?="$kmw.osk.setRect()"?></code></a>, <a href="../osk/show"><code><?="$kmw.osk.show()"?></code></a></p>