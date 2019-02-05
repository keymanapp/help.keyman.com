<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: getUIState"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_getUIState">getUIState</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Get the KeymanWeb user interface activation state.</p>

<?php
syntax("$kmw.getUIState()");
params();
returns("Object", "A '<code>ui_state</code>' object specifying the UI's current activation state.  Please see below for more details.");
?>

<h2 id="Description" name="Description">Description</h2>

<?php
obj_spec("ui_state",
  "activationPending", "boolean", "Indicates that the KeymanWeb UI is being activated.",
  "activated", "boolean", "Indicates that the KeymanUI is presently active."
);
?>