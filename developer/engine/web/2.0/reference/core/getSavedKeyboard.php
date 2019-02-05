<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: getSavedKeyboard"
  ]);

  require_once("includes/__docheader.php");
?>

<h1 class="title" id="core_getSavedKeyboard">getSavedKeyboard</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Get the (internal) keyboard name and language code of the most recently active keyboard, as stored in KeymanWeb's
  cookie management system.</p>

<?php
syntax("$kmw.getSavedKeyboard();");
params();
returns("string", "Format:  <code>Internal-Name:Language-Code</code>")
?>

<h2 id="Description" name="Description">Description</h2>

<p>This function is used to automatically restore the last keyboard selected by a user in order to restore it upon a new visit
  to the page KeymanWeb is embedded within.
</p>