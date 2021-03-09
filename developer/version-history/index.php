<?php
require_once('includes/template.php');
head([
  'title' => 'Keyman Developer History',
  'css' => ['template.css'],
  'showMenu' => true
]);

require_once("includes/history_utils.php");

display_history("developer", "2.0");

// Included to trick the side nav into generating a nice name for history.md in the sidebar.
// <h1>Keyman Developer Version History</h1>
?>
