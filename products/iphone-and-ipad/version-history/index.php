<?php
  require_once('includes/template.php');
  head([
    'title' => 'Keyman for iPhone and iPad Version History',
    'css' => ['template.css'],
    'showMenu' => true
  ]);

require_once("includes/history_utils.php");

display_history("ios");

// Included to trick the side nav into generating a nice name for history.md in the sidebar.
// <h1>Keyman for iPhone and iPad Version History</h1>
?>
