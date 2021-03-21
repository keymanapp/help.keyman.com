<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanKeyboardLanguage Interface"
  ]);
?>

<h1>IKeymanKeyboardLanguage Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardLanguage</code> interface lists a language associated with a keyboard in Keyman Engine for Windows API.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanKeyboardLanguage', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='BCP47Code'><code>BCP47Code</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns a BCP 47 code for the Windows language.</dd>
</dl>

<dl>
  <dt><a href='LangID'><code>LangID</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns a Windows LANGID for the Windows language.</dd>
</dl>

<dl>
  <dt><a href='OwnerKeyboard'><code>OwnerKeyboard</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the keyboard associated with the language.</dd>
</dl>

<dl>
  <dt><a href='Name'><code>Name</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the language name for the language.</dd>
</dl>
