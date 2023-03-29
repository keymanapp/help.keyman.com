<?php
require_once('includes/template.php');
head([
  'title' => "Function: disableControl"
]);
require_once("includes/__docheader.php");
?>

<h1 class="title" id="core_disableControl">disableControl</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Disables KeymanWeb input handling for the specified control.</p>

<?php
syntax("keyman.disableControl(Pelem)");
params("Pelem", "Element", "Element to become KeymanWeb-disabled.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>

<p>This function is used to explicitly disable KeymanWeb input handling for a previously-attached control, adding the class
  <code>'kmw-disabled'</code> property to the element as necessary.  It will not, however, detach KeymanWeb from the control,
  and any KeymanWeb-specific metadata will persist until KeymanWeb is explicitly detached from the element.<p>

<p>If <code>'kmw-disabled'</code> is added to the control via other means, <code>disableControl()</code> will be called
  upon it automatically and non-recursively.
</p>
<p>If called on an element in an unattached state, the <code>'kmw-disabled'</code> tag will be added to the element.

<p>See also <a href="detachFromControl"><code><?="keyman.detachFromControl()"?></code></a>,
  <a href="enableControl"><code><?="keyman.enableControl()"?></code></a></p>