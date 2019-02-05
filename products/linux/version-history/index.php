<?php
require_once('includes/template.php');
head([
  'title' => 'Keyman for Linux History',
  'css' => ['template.css', 'index.css'],
  'showMenu' => true
]);

require_once("includes/history_utils.php");

display_history("linux");

// Included to trick the side nav into generating a nice name for history.md in the sidebar.
// <h1>Keyman for Linux Version History</h1>
?>
