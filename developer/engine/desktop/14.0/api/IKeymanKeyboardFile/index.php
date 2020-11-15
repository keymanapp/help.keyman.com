<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanKeyboardFile Interface"
  ]);
?>

<h1>IKeymanKeyboardFile Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardFile</code> interface describes a keyboard file. The file will not have been installed
but can be any keyboard file on disk.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanKeyboardFile', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='Languages'><code>Languages</code></a></dt>
  <dd>Lists the languages associated with the keyboard, as retrieved from package metadata.</dd>
</dl>

<h2>Methods</h2>

<dl>
  <dt><a href='Install'><code>Install()</code></a></dt>
  <dd>Installs the keyboard file into Keyman Engine for Windows.</dd>
</dl>
