<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanKeyboardLanguagesInstalled Interface"
  ]);
?>

<h1>IKeymanKeyboardLanguagesInstalled Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardLanguagesInstalled</code> interface lists the languages associated with a keyboard in Keyman Engine for Windows API.
This list is the set of languages currently installed for use, or suggested for the keyboard by the keyboard developer.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanKeyboardLanguagesInstalled', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='Items'><code>Items[Index]</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanKeyboardLanguageInstalled'><code>IKeymanKeyboardLanguageInstalled</code></a> reference for the language identified by <code>Index</code>.</dd>
</dl>

<h2>Methods</h2>

<dl>
  <dt><a href='Install'><code>Install()</code></a></dt>
  <dd>Associates the keyboard layout with the referenced BCP 47 language code in Windows, and if necessary installs the language as well.</dd>
</dl>

<dl>
  <dt><a href='InstallByLangID'><code>InstallByLangID()</code></a></dt>
  <dd>Associates the keyboard layout with the referenced legacy LANGID language code in Windows, and if necessary installs the language as well.</dd>
</dl>
