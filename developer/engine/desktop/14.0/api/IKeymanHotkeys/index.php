<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanHotkeys Interface"
  ]);
?>

<h1>IKeymanHotkeys Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanHotkeys</code> interface lists hotkeys configured for Keyman Engine.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanHotkeys', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='Items'><code>Items[Index]</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanHotkey'><code>IKeymanHotkey</code></a> reference for the hotkey identified by <code>Index</code>.</dd>
</dl>

<h2>Methods</h2>

<dl>
  <dt><a href='Apply'><code>Apply()</code></a></dt>
  <dd>Applies changes to the hotkeys in the collection to Keyman Engine.</dd>
</dl>

<dl>
  <dt><a href='Reset'><code>Reset()</code></a></dt>
  <dd>Resets all hotkeys in the collection to empty.</dd>
</dl>
