<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: registerKeyboard"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KR">registerKeyboard (KR)</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Registers and loads the keyboard.</p>

<?php
syntax("keyman.interface.registerKeyboard(Pk);", "KeymanWeb.KR(Pk); // Shorthand");
params("Pk", "Object", "The keyboard object to be loaded and registered.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>Note that any calls made to this function before KeymanWeb has initialized will be deferred until initialization occurs.
  Furthermore, an existing keyboard stub must exist for KeymanWeb to fully link with the keyboard.
</p>
<p>This keyboard object is typically provided directly by the keyboard-loading process employed within KeymanWeb and its keyboard
source files.</p>