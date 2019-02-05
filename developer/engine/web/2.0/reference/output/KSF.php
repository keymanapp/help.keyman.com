<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: KSF"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KSF">KSF</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Save focus:  Temporarily saves keyboard processing data for the currently-focused control.</p>

<?php
syntax("KeymanWeb.KSF()");
params();
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>Use this function to temporarily preserve all keyboard processing information during a single change-of-focus event.
</p>

<p>This function is designed to allow custom UI elements, custom OSK displays (as for the
  <a href="https://keymanweb.com/#eng,Keyboard_european2">EuroLatin2 keyboard</a>), or keyboards with picker-style functionality
  (such as the <a href="https://keymanweb.com/#jpn,Keyboard_japanese">Japanese keyboard</a>) to operate without losing
  the current input state due to loss of focus for the active control.
</p>
<p>A good example of when to call this function would be for <code>onmousedown</code> events for visual elements not intended
to change the element of focus within KeymanWeb.  It is safe for use outside of keyboard code.</p>