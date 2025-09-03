<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanVisualKeyboard Interface"
  ]);
?>

<h1>IKeymanVisualKeyboard Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanVisualKeyboard</code> interface references the visual keyboard associated with an installed <a href='../IKeymanKeyboardInstalled'><code>IKeymanKeyboardInstalled</code></a> keyboard layout.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanVisualKeyboard', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='Filename'><code>Filename</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the fully qualified filename of the visual keyboard .kvk file.</dd>
</dl>

<h2>Methods</h2>

<dl>
  <dt><a href='Uninstall'><code>Uninstall()</code></a></dt>
  <dd>Removes this visual keyboard from the keyboard and the Keyman keyboard store.</dd>
</dl>
