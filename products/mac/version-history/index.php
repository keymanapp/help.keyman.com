<?php
require_once('includes/template.php');
head([
  'title' => 'Keyman for macOS History',
  'css' => ['template.css'],
  'showMenu' => true
]);

require_once("includes/history_utils.php");

display_history("mac");

// Included to trick the side nav into generating a nice name for history.md in the sidebar.
// <h1>Keyman for macOS Version History</h1>
?>
