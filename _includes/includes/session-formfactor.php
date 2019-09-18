<?php
// This file draws significantly from keyman.com/keyboards/session-embed.php.
if(!isset($_SESSION)) session_start();

// Useful for Android, which displays different images for the two form factors.
if(isset($_REQUEST['formfactor'])) {
  $formFactor = $_REQUEST['formfactor'];
  if(!in_array($formFactor, ['none', 'phone', 'tablet'])) {
    $formFactor = 'none';
  }
} else if(isset($_SESSION['formfactor'])) {
  $formFactor = $_SESSION['formfactor'];
} else {
  $formFactor = 'none';
}

// Save our processed session data.
$_SESSION['formfactor'] = $formFactor;
?>