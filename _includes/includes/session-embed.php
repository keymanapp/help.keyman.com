<?php
// This file draws significantly from keyman.com/keyboards/session-embed.php.
if(!isset($_SESSION)) session_start();

// Which platform are we embedding within?
if(isset($_REQUEST['embed'])) {
  $embed = $_REQUEST['embed'];
  if(!in_array($embed, ['none','ios','android','windows','macos','linux'])) {
    $embed = 'none';
  }
} else if(isset($_SESSION['embed'])) {
  $embed = $_SESSION['embed'];
} else {
  $embed = 'none';
}

// Save our processed session data.
$_SESSION['embed'] = $embed;

// Create version-specific embed variables.
$embed_win     = $embed == 'windows';
$embed_mac     = $embed == 'macos';
$embed_linux   = $embed == 'linux';
$embed_android = $embed == 'android';
$embed_ios     = $embed == 'ios';

// Generates a stylesheet to control visibility based on embedding state
?>
<style type="text/css">
  .embed-ios        {display: <?= $embed_ios ? 'block' : 'none' ?>}
  .not-embed-ios     {display: <?= $embed_ios ? 'none' : 'block' ?>}
  .embed-android    {display: <?= $embed_android ? 'block' : 'none' ?>}
  .not-embed-android {display: <?= $embed_android ? 'none' : 'block' ?>}
</style>
