<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: attachToControl"
  ]);

  require_once("includes/__docheader.php");
?>

<h1 class="title" id="core_attachToControl">attachToControl</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Attach KeymanWeb to HTML element (or IFrame).</p>

<?php

syntax("keyman.attachToControl(Pelem)");
params("Pelem", "Element", "Element to which KeymanWeb will be attached.");
returns("undefined");

?>

<h2 id="Description" name="Description">Description</h2>

<p>There are two steps involved in enabling input handling with KeymanWeb for any given control:  <em>attachment</em> and
  <em>enablement</em>.  The attachment process validates a control's compatibility with KeymanWeb and establishes special metadata
  within the system.  This data is released if the control is ever detached.  The control will not receive special input handling
  until the control is enabled within KeymanWeb.</p>

<p>If <code>attachToControl()</code> is called on an element with the <code>'kmw-disabled'</code> class property, it will only
  establish KeymanWeb's metadata for the control and initialize the control in a disabled state.  A later call to
  <code>enableControl()</code> may be used to initialize input handling for it.  Otherwise, the control will be both attached
  and enabled.</p>

<p>When the <a href="init">initialization property <code>attachType</code></a> is set to <code>'auto'</code>, this function
  is called automatically for every control on the page, even those dynamically added. However, when <code>attachType</code>
  is set to <code>'manual'</code>, <code>attachToControl</code> must be explicitly called for each control in need of KeymanWeb's
  input handling.</p>

<p>See also <a href="detachFromControl"><code><?="keyman.detachFromControl()"?></code></a>,
  <a href="enableControl"><code><?="keyman.enableControl()"?></code></a></p>