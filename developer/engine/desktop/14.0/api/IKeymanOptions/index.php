<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanOptions Interface"
  ]);
?>

<h1>IKeymanOptions Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanOptions</code> interface lists options available in Keyman Engine. These options are 
distinct from the <a href='../IKeymanKeyboardOptions'><code>IKeymanKeyboardOptions</code></a> which
control how specific keyboard layouts operate.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanOptions', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='Items'><code>Items[Index]</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanOption'><code>IKeymanOption</code></a> reference by <code>Index</code>.</dd>
</dl>

<h2>Methods</h2>

<dl>
  <dt><a href='Apply'><code>Apply()</code></a></dt>
  <dd>Applies changes to options to Keyman Engine.</dd>
</dl>

<dl>
  <dt><a href='IndexOf'><code>IndexOf()</code></a></dt>
  <dd>Gets the index of an option by ID in the collection.</dd>
</dl>
