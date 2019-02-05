<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: keyInformation"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="KKI">keyInformation (KKI)</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Returns an object with extended information about a specified keystroke event.</p>

<?php
syntax("keyman.interface.keyInformation(e);", "KeymanWeb.KKI(e); // Shorthand");
params("e", "Object", "The event object to be evaluated.");
returns("Object", "An object with extended key event information.");
?>

<h2 id="Description" name="Description">Description</h2>

<p><strong>Note</strong>: this function will not succeed if it is called from outside of a keyboard's standard text-processing operations.</p>
<hr>

<?php
obj_spec("key_event",
  "vk", "boolean", "A flag indicating whether or not the event corresponds to a virtual key.",
  "code", "number", "The underlying keycode for the event.",
  "modifiers", "number", "A set of bit-flags corresponding to the SHIFT, CTRL, and ALT state of the keyboard.");
?>

<p>The bit masks for each modifier are as follows:</p>
<ul>
  <li><dl><dt>SHIFT</dt><dd><code>0x10</code></dd></dl></li>
  <li><dl><dt>CTRL</dt><dd><code>0x20</code></dd></dl></li>
  <li><dl><dt>ALT</dt><dd><code>0x40</code></dd></dl></li>
</ul>
