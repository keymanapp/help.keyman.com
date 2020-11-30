<?php
  require_once('includes/template.php');
  require_once('includes/__docheader.php');

  head([
    'title' => "Function: addHotKey"
  ]);
?>

<h1 class="title" id="core_addHotKey">addHotKey</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Add hot key handler to array of document-level hotkeys triggered by key-up event.</p>

<?php
syntax("keyman.addHotKey(keyCode, shiftState, handler);");
params("keyCode", "number", "The base key of the hotkey",
  "shiftState", "number", '<code>shiftState</code> is a bitwise combination of SHIFT (0x10), CTRL (0x20) and ALT (0x40).',
  "handler", "function", "The function to be called when the hotkey is triggered.  It should not expect any parameters.");
returns("undefined");
?>

<h2 id="Description" name="Description">Description</h2>

<p> Used to support custom hotkeys within a web document.  Only one handler function may exist per hotkey combination.</p>