<?php
// This file draws significantly from keyman.com/keyboards/session.php.
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

// Useful for Android, which displays different images for the two form factors.
if(isset($_REQUEST['device'])) {
  $device = $_REQUEST['device'];
  if(!in_array($device, ['none', 'phone', 'tablet'])) {
    $device = 'none';
  }
} else if(isset($_SESSION['device'])) {
  $device = $_SESSION['device'];
} else {
  $device = 'none';
}

// Save our processed session data.
$_SESSION['embed'] = $embed;
$_SESSION['device'] = $device;

// Create version-specific embed variables.
$embed_win     = $embed == 'windows';
$embed_mac     = $embed == 'macos';
$embed_linux   = $embed == 'linux';
$embed_android = $embed == 'android';
$embed_ios     = $embed == 'ios';

// Generate session-redefining query strings for use in embedded links.
if($embed != 'none') {
  // Poor man's session control because IE embedded in downlevel Windows destroys cookie support by
  // default, including in existing versions of Keyman.
  $session_query = http_build_query([
    'embed' => $embed
  ]);
  $session_query_q = "?$session_query";
  if($device != 'none') {
    $session_query_q = "$session_query_q&device=$device";
  }
} else {
  $session_query = '';
  $session_query_q = '';
}

?>