<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: getActiveKeyboard"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_getActiveKeyboard">getActiveKeyboard</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Get the internal name of the currently active keyboard.</p>

<?php
syntax("keyman.getActiveKeyboard()");
params();
returns("string", "The ID (internal name) of the currently-active keyboard.");
?>