<?php
require_once('includes/template.php');
head([
  'title' => 'Keyman for Linux History',
  'css' => ['template.css'],
  'showMenu' => true
]);

require_once("includes/history_utils.php");

display_history("linux", "2.0");

echo "<hr>";

// Older history from 13.0 and earlier
display_history("linux", "1.0");

// Included to trick the side nav into generating a nice name for history.md in the sidebar.
// <h1>Keyman for Linux Version History</h1>
?>
