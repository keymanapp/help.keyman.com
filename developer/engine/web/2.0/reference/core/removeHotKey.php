<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: removeHotKey"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_removeHotKey">removeHotKey</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Remove the hotkey handler from document's list of hotkey handlers.</p>

<?php
syntax("$kmw.removeHotkey(keyCode, shiftState);");
params("keyCode", "number", "The base key code for the hotkey.",
  "shiftState", "number", "The modifier values corresponding to ALT, CTRL, and SHIFT for the hotkey.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>See also <a href="addHotKey.php"><code><?="$kmw.addHotKey()"?></code></a>
</p>