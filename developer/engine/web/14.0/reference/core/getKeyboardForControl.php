<?php
require_once('includes/template.php');
head([
  'title' => "Function: getKeyboardForControl"
]);
require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_getKeyboardForControl">getKeyboardForControl</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Obtain the keyboard set for a specific control, if it exists.</p>

<?php
syntax("keyman.getKeyboardForControl(Pelem);");
params("Pelem", "Element", "An HTML input control.");
returns("string|null", "If the control has independent keyboard settings, returns the ID (internal name) of a keyboard. ".
  "Otherwise, returns <code>null</code>.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>This function is useful for determining when a control has independently-managed keyboard settings within KeymanWeb.
  Note that it will return <code>null</code> otherwise, even if there is an active keyboard within KeymanWeb.</p>

<p>See also <a href="setKeyboardForControl"><code><?="keyman.setKeyboardForControl()"?></code></a>.</p>
<p>Contrast with <a href="getActiveKeyboard"><code><?="keyman.getActiveKeyboard()"?></code></a>.</p>