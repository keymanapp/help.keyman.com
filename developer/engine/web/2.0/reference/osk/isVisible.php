<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: isVisible"
  ]);
  require_once('includes/__docheader.php');
?>

<h1 class="title" id="isVisible">isVisible</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Return the actual visibility of the On-Screen Keyboard.</p>

<?php
syntax("$kmw.osk.isVisible();");
params();
returns("boolean", "<code>true</code> if the OSK is actually visible, else <code>false</code>.  Note that this will ".
  "usually return <code>false</code> after any UI event that results in (temporary) loss of focus.");
?>
