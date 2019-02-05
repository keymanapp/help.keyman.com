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

syntax("$kmw.attachToControl(Pelem)");
params("Pelem", "Element", "Element to which KeymanWeb will be attached.");
returns("undefined");

?>

<h2 id="Description" name="Description">Description</h2>

<p>This function can be used to attach KeymanWeb handling to a control. When <a href="init">initialization property
  <code>attachType</code></a> is set to <code>'auto'</code>, control attachment is performed automatically, and you don't
  need to call <code>attachToControl</code> yourself. However, when <code>attachType</code> is set to <code>'manual'</code>,
  you should call <code>attachToControl</code> on the controls for which you wish to enable KeymanWeb handling.</p>