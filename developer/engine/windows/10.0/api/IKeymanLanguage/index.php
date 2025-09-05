<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanLanguage Interface"
  ]);
?>

<h1>IKeymanLanguage Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanLanguage</code> interface lists a Windows input method entry.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanLanguage', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='BCP47Code'><code>BCP47Code</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns a BCP 47 code for the Windows language, on operating systems that support it.</dd>
</dl>

<dl>
  <dt><a href='HKL'><code>HKL</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns a Windows HKL for the input method.</dd>
</dl>

<dl>
  <dt><a href='Hotkey'><code>Hotkey</code></a></dt>
  <dd>Controls the current hotkey that will activate the keyboard layout with the selected language.</dd>
</dl>

<dl>
  <dt><a href='KeymanKeyboardLanguage'><code>KeymanKeyboardLanguage</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns a <a href='../IKeymanKeyboardLanguageInstalled'><code>IKeymanKeyboardLanguageInstalled</code></a> reference for the Keyman
  keyboard language entry that this entry is associated with.</dd>
</dl>

<dl>
  <dt><a href='LangID'><code>LangID</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns a Windows LANGID for the Windows language.</dd>
</dl>

<dl>
  <dt><a href='LayoutName'><code>LayoutName</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the display name of the input method.</dd>
</dl>

<dl>
  <dt><a href='LocaleName'><code>LocaleName</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the display name of the language.</dd>
</dl>

<dl>
  <dt><a href='ProfileGUID'><code>ProfileGUID</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the profile GUID associated with the Text Services Framework (TSF) Text Input Processor (TIP) installed
  for this keyboard, for this language.</dd>
</dl>
