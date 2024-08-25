<?php
require_once('includes/template.php');
head([
  'title' => 'Keyman All Versions',
  'css' => ['template.css'],
  'showMenu' => true
]);

require_once("includes/history_utils.php");

display_version("2.0");

?>
