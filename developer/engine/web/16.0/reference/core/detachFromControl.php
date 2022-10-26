<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: detachFromControl"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_detachFromControl">detachFromControl</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Detach KeymanWeb from HTML element (or IFrame).</p>

<?php
syntax("keyman.detachFromControl(Pelem);");
params("Pelem", "Element", "Element for KeymanWeb to detach from, no longer handling input.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>This function entirely detaches KeymanWeb from the specified control, removing all specialized input handling and data
  tracking for the element.  As such, detaching effectively 'resets' the control's state entirely, save for any previously-input text.
</p>

<p>For more information about attachment, see <a href="attachToControl"><code><?="keyman.attachToControl()"?></code></a>.</p>
<p>Contrast with <a href="disableControl"><code><?="keyman.disableControl()"?></code></a>.</p>