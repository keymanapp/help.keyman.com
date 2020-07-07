<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanKeyboardsInstalled2 Interface"
  ]);
?>

<h1>IKeymanKeyboardsInstalled2 Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardsInstalled2</code> interface adds an extension function for installing additional keyboards.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanKeyboardsInstalled2', '../'); ?>

<h2>Methods</h2>

<dl>
  <dt><a href='Install2'><code>Install2()</code></a></dt>
  <dd>Installs the referenced keyboard file into Keyman Engine for Windows, with option to install default language at same time.</dd>
</dl>
