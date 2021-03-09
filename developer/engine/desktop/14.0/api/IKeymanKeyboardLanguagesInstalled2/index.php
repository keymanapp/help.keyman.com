<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanKeyboardLanguagesInstalled2 Interface"
  ]);
?>

<h1>IKeymanKeyboardLanguagesInstalled2 Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardLanguagesInstalled2</code> adds an extension method to allow for adding a new language in preparation
to register and install it.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanKeyboardLanguagesInstalled2', '../'); ?>

<h2>Methods</h2>

<dl>
  <dt><a href='Add'><code>Add()</code></a></dt>
  <dd>Adds a new language to the in-memory list in preparation for registration and installation.</dd>
</dl>

<h2>History</h2>

<p>Added in Keyman Engine for Windows 14.0.</p>
