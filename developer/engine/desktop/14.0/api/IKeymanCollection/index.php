<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');

  head([
    'title' => "IKeymanCollection Interface"
  ]);
?>

<h1>IKeymanCollection Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanCollection</code> interface is the base interface for all collections in Keyman Engine for Windows API.
The <code>Items[]</code> property is implemented in sub-interfaces.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanCollection', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='Count'><code>Count</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the number of items in the collection.</dd>
</dl>

<h2>Methods</h2>

<dl>
  <dt><a href='_NewEnum'><code>_NewEnum()</code></a></dt>
  <dd>Instantiates an enumerator for the collection. This is required for COM enumeration of the collection.</dd>
</dl>

<dl>
  <dt><a href='Refresh'><code>Refresh()</code></a></dt>
  <dd>Refreshes the collection from the current Keyman Engine configuration.</dd>
</dl>
