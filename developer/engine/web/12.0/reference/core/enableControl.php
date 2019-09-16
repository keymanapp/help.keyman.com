<?php
require_once('includes/template.php');
head([
  'title' => "Function: enableControl"
]);
require_once("includes/__docheader.php");
?>

<h1 class="title" id="core_enableControl">enableControl</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Enables KeymanWeb input handling for the specified control.</p>

<?php
syntax("keyman.enableControl(Pelem)");
params("Pelem", "Element", "Element to become KeymanWeb-enabled.");
returns();
?>

<h2 id="Description" name="Description">Description</h2>
<p>There are two steps involved in enabling input handling with KeymanWeb for any given control:  <em>attachment</em> and
  <em>enablement</em>.  The attachment process validates a control's compatibility with KeymanWeb and establishes special metadata
  within the system.  This data is released if the control is ever detached.  The control will not receive special input handling
  unless the control is enabled within KeymanWeb.</p>

<p>This function is used to explicitly enable KeymanWeb input handling for a previously-attached control, removing the class
  <code>'kmw-disabled'</code> property from the element as necessary.  It will not, however, attach KeymanWeb to the control.<p>

<p>If <code>'kmw-disabled'</code> is removed from the control via other means, <code>enableControl()</code> will be called
  upon it automatically and non-recursively.
</p>
<p>If called on an element in an unattached state, the <code>'kmw-disabled'</code> tag will be removed from the element.

<p>See also <a href="attachToControl"><code><?="keyman.attachToControl()"?></code></a>,
  <a href="disableControl"><code><?="keyman.disableControl()"?></code></a></p>