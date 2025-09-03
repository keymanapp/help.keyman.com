<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanKeyboardInstalled Interface"
  ]);
?>

<h1>IKeymanKeyboardInstalled Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardInstalled</code> interface describes a keyboard file that has been
installed and allows modification of <a href='Options'>keyboard option values</a> for the keyboard file.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanKeyboardInstalled', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='IconFilename'><code>IconFilename</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the string filename of the icon file associated with the keyboard. When the keyboard is installed the icon file 
  is generated from the icon resource contained within the keyboard.</dd>
</dl>

<dl>
  <dt><a href='KeymanID'><code>KeymanID</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the integer identifier for the keyboard used internally by Keyman Engine.</dd>
</dl>

<dl>
  <dt><a href='Languages'><code>Languages</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanKeyboardLanguagesInstalled'><code>IKeymanKeyboardLanguagesInstalled</code></a> reference which lists the Windows 
  languages with which the keyboard is currently associated.</dd>
</dl>

<dl>
  <dt><a href='Loaded'><code>Loaded</code></a></dt>
  <dd>Determines whether the keyboard layout is selectable by the user. When unloaded, the keyboard is removed from the user's keyboard picker.</dd>
</dl>

<dl>
  <dt><a href='Options'><code>Options</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanKeyboardOptions'><code>IKeymanKeyboardOptions</code></a> reference which lists the user-configurable options 
  for the keyboard layout.</dd>
</dl>

<dl>
  <dt><a href='OwnerPackage'><code>OwnerPackage</code></a> <span class='readonly'>read only</span></dt>
  <dd>If the keyboard was installed as part of a package, returns the <a href='../IKeymanPackageInstalled'><code>IKeymanPackageInstalled</code></a> reference
  for the package; otherwise returns <code>null</code>.</dd>
</dl>

<dl>
  <dt><a href='VisualKeyboard'><code>VisualKeyboard</code></a> <span class='readonly'>read only</span></dt>
  <dd>If an associated visual keyboard is installed, returns the <a href='../IKeymanVisualKeyboard'><code>IKeymanVisualKeyboard</code></a> reference for the
  visual keyboard; otherwise returns <code>null</code>.</dd>
</dl>

<h2>Methods</h2>

<dl>
  <dt><a href='InstallVisualKeyboard'><code>InstallVisualKeyboard()</code></a></dt>
  <dd>Installs a visual keyboard file into Keyman Engine for Windows and associates it with the keyboard.</dd>
</dl>

<dl>
  <dt><a href='Uninstall'><code>Uninstall()</code></a></dt>
  <dd>Uninstalls the keyboard from Keyman Engine for Windows.</dd>
</dl>
