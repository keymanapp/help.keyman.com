<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanHotkey Interface"
  ]);
?>

<h1>IKeymanHotkey Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanHotkey</code> interface describes a hotkey associated with an action or a keyboard.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanHotkey', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='Modifiers'><code>Modifiers</code></a></dt>
  <dd>Returns a set of modifier keys used by the hotkey.</dd>
</dl>

<dl>
  <dt><a href='RawValue'><code>RawValue</code></a></dt>
  <dd>Returns the raw hotkey value, a combination of <code>Modifiers</code> and <code>VirtualKey</code>.</dd>
</dl>

<dl>
  <dt><a href='Target'><code>Target</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the action that will be taken when the hotkey is pressed by the user.</dd>
</dl>

<dl>
  <dt><a href='VirtualKey'><code>VirtualKey</code></a></dt>
  <dd>Returns the Windows virtual key code of the hotkey.</dd>
</dl>

<h2>Methods</h2>

<dl>
  <dt><a href='Clear'><code>Clear()</code></a></dt>
  <dd>Clears the hotkey value. It does not remove the hotkey from the collection.</dd>
</dl>

<dl>
  <dt><a href='IsEmpty'><code>IsEmpty()</code></a></dt>
  <dd>Returns <code>True</code> if the hotkey is empty.</dd>
</dl>
