<?php
  require_once('includes/template.php');
  require_once('./__interface-hierarchy.php');

  head([
    'title' => "Keyman Engine for Windows 10.0 API"
  ]);
?>

<h1>Keyman Engine for Windows 10.0 API</h1>

<h2>Introduction</h2>

<p>The Keyman Engine for Windows 10.0 API is implemented in COM. It can be instantiated with <code>CreateObject("keymanapi.Keyman")</code>.</p>
<aside><b>Note: </b>This documentation applies to Keyman Engine for Desktop versions 10.0 and up.</aside>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanObject', ''); ?>

<?php
/*<h2>Interfaces</h2>
<dl>

  $files = scandir('.');
  foreach($files as $f) {
    if(is_dir($f) && $f != '.' && $f != '..') {
      echo "<dd><a href='$f'><code>$f</code></a></dd>";
    }
  }
</dl>*/
?>
