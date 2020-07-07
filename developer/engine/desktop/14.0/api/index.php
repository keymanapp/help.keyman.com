<?php
  require_once('includes/template.php');
  require_once('./__interface-hierarchy.php');

  head([
    'title' => "Keyman Engine for Windows 14.0 API"
  ]);
?>

<h1>Keyman Engine for Windows 14.0 API</h1>

<h2>Introduction</h2>

<p>The Keyman Engine for Windows 14.0 API is implemented in COM. It can be instantiated with <code>CreateObject("keymanapi.Keyman")</code>.</p>
<aside><b>Note: </b>This documentation applies to Keyman Engine for Windows versions 14.0 and up.</aside>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanObject', ''); ?>
