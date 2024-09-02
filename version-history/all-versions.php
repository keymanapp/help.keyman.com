<?php
// <h2>All platforms</h2>
require_once('includes/template.php');
head([
  'title' => 'Keyman version history - all platforms',
  'css' => ['template.css'],
  'showMenu' => true
]);

require_once("includes/history_utils.php");

display_history('', "2.0");
