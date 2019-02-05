<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanKeyboardLanguageInstalled Interface"
  ]);
?>

<h1>IKeymanKeyboardLanguageInstalled Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardLanguageInstalled</code> interface lists a Windows language associated with a keyboard in Keyman Engine for Windows API,
or a suggested language available for installation for the keyboard.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanKeyboardLanguageInstalled', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='OwnerKeyboard'><code>OwnerKeyboard</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the keyboard associated with the language.</dd>

  <dt><a href='ProfileGUID'><code>ProfileGUID</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the profile GUID associated with the Text Services Framework (TSF) Text Input Processor (TIP) installed
  for this keyboard, for this language, or <code>GUID_NULL</code> if the language is not currently installed.</dd>
  
  <dt><a href='IsInstalled'><code>IsInstalled</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns <code>TRUE</code> if the language is currently installed for this keyboard.</dd>
</dl>

<h2>Methods</h2>

<dl>
  <dt><a href='Install'><code>Install()</code></a></dt>
  <dd>If not already installed, adds this keyboard layout to the Windows language, and if necessary installs the Windows language as well.</dd>

  <dt><a href='Uninstall'><code>Uninstall()</code></a></dt>
  <dd>Removes this keyboard layout from the Windows language, and if it is the last input method for the language, removes the language as well.</dd>
</dl>
