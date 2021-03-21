<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanKeyboardFile2 Interface"
  ]);
?>

<h1>IKeymanKeyboardFile2 Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardFile2</code> interface describes a keyboard file. The file will not have been installed
but can be any keyboard file on disk.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanKeyboardFile2', '../'); ?>

<h2>Methods</h2>

<dl>
  <dt><a href='Install2'><code>Install2()</code></a></dt>
  <dd>Installs the keyboard file into Keyman Engine for Windows, with option to install default language at same time.</dd>
</dl>

<h2>History</h2>

<p>Added in Keyman Engine for Windows 14.0.</p>
