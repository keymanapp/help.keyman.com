<?php

require_once('includes/template.php');

head([
  'title' => "Developer Guide - Additional KeymanWeb Use-Case Examples"
]);

?>

<h1>Additional KeymanWeb 2.0 Usage Examples</h1>
<p style='margin-top: 16px'>
<div class='body_text'>
  <p>This set of examples displays basic use of the API to demonstrate customization possibilities for use of KeymanWeb.</p>


<ul>
  <li><p><a href='automatic-control.php'>Automatic Control Example</a></p><p>Demonstrates the simplest way to get up and running with KeymanWeb.</p></li>
  <li><p><a href='manual-control.php'>Manual On-Screen Keyboard Control</a></p><p>Demonstrates some basic API allowing for custom control of the on-screen keyboard's display.</p></li>
  <li><p><a href='full-manual-control.php'>Manual Language Control Example</a></p><p>Demonstrates API allowing for custom controls to manage the active keyboard.</p></li>
  <li><p><a href='control-by-control.php'>Control by Control Example</a></p><p>Demonstrates how to set different languages for different controls and how to disable controls via API call.</p></li>
</ul>

<p>Note that in the actual source for these examples, we link to the most current version of KeymanWeb instead of a local
  copy, though the first three are written to demonstrate working with a local copy of KeymanWeb and will work accordingly.</p>
</div>
