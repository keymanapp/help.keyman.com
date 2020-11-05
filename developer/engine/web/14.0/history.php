<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 9/27/2017
 * Time: 11:52 AM
 */

require_once('includes/template.php');

// Required
head([
  'title' =>'Keyman Engine for Web Version History',
  'css' => ['template.css'],
  'showMenu' => true
]);

require_once("includes/history_utils.php");

display_history("web");

// Included to trick the side nav into generating a nice name for history.md in the sidebar.
// <h1>KeymanWeb Version History</h1>

?>