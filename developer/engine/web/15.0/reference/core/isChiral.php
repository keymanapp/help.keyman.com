<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: isChiral"
  ]);
  require_once('includes/__docheader.php');
?>

<h1 class="title" id="core_isChiral">isChiral</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Test if a given keyboard recognizes chiral modifier data, such as left-control vs right-control.</p>

<?php
  syntax("keyman.isChiral(keyboard);");
  params("keyboard", "optional string", "The id (identifying name) of a keyboard.  Defaults to the currently-active keyboard if not specified.");
  returns("boolean", "<code>true</code> if the keyboard accepts chiral (left-vs-right) variants of CTRL and ALT, <code>false</code> if not.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>The specified keyboard must have been fully loaded at some point for this information to be accessible; otherwise it
  will return <code>false</code> (non-chiral).  It is always accurate for the currently-active keyboard.
</p>
<p>With the present system architecture, this is a bit complicated in that a keyboard is only set to 'active' after the
<a href="../events/kmw.keyboardloaded.php"><code language="none">keyboardloaded</code></a> event completes and after the
<a href="../events/kmw.keyboardchange.php"><code language="none">keyboardchange</code></a> event has completed for the
first activation of a keyboard.  However, both events return the name of the keyboard involved in the event, and this can
be passed as an argument to <code>isChiral</code> from the <a href="../events/kmw.keyboardloaded.php"><code language="none">keyboardloaded</code></a>
event's handler to obtain the correct keyboard chirality information.</p>