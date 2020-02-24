<?php
require_once('includes/template.php');
head([
  'title' => 'Keyman for Android Version History',
  'css' => ['template.css'],
  'showMenu' => true
]);

require_once("includes/history_utils.php");

display_history("android");

// Included to trick the side nav into generating a nice name for history.md in the sidebar.
// <h1>Keyman for Android Version History</h1>
?>
