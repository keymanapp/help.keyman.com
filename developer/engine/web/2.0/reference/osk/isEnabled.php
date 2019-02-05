<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: isEnabled"
  ]);

  require_once('includes/__docheader.php');
?>

<h1 class="title" id="isEnabled">isEnabled</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Return the user-defined OSK visibility as set by prior calls to <a href="show"><code>show</code></a> or
  <a href="hide"><code>hide</code></a>.</p>

<?php
syntax("$kmw.osk.isEnabled();");
params();
returns("boolean", "<code>true</code> if the OSK is enabled, else <code>false</code>.");
?>

<h2 id="Description" name="Description">Description</h2>

<p>Actual OSK visibility will also depend on whether or not the target is focused (see isVisible)
</p>