<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanKeyboardsInstalled Interface"
  ]);
?>

<h1>IKeymanKeyboardsInstalled Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardsInstalled</code> interface lists the installed keyboards in Keyman Engine for Windows API.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanKeyboardsInstalled', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='Items'><code>Items[Index]</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanKeyboardInstalled'><code>IKeymanKeyboardInstalled</code></a> reference for the keyboard identified by <code>Index</code>.</dd>
</dl>

<h2>Methods</h2>

<dl>
  <dt><a href='GetKeyboardFromFile'><code>GetKeyboardFromFile()</code></a></dt>
  <dd>Returns an <a href='../IKeymanKeyboardFile'><code>IKeymanKeyboardFile</code></a> reference for a keyboard file on disk.</dd>

  <dt><a href='Install'><code>Install()</code></a></dt>
  <dd>Installs the referenced keyboard file into Keyman Engine for Windows.</dd>

  <dt><a href='Apply'><code>Apply()</code></a></dt>
  <dd>Applies changes made to the keyboards in the collection to Keyman Engine for Windows.</dd>
</dl>
