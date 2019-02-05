<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: setKeyboardForControl"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_setKeyboardForControl">setDefaultKeyboardForControl</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Associate control with specific keyboard, with optional user override.</p>

<?php
syntax("$kmw.setDefaultKeyboardForControl(Pelem, keyboard);");
params("Pelem", "Element", "The control element to be managed manually.",
  "keyboard", "string", "The ID (internal name) of a keyboard.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>To be implemented.
</p>
<p>Will set the control's default keyboard.  In doing so, language control for that element will permanently be separate
from that for the rest of the page.</p>