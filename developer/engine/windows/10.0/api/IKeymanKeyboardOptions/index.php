<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanKeyboardOptions Interface"
  ]);
?>

<h1>IKeymanKeyboardOptions Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardOptions</code> interface lists options associated with a specific keyboard. The options are defined by 
the keyboard developer through the <a href='/developer/language/guide/variable-stores'>variable stores</a> feature.</p>

<p>These options are distinct from the <a href='../IKeymanOptions'><code>IKeymanOptions</code></a> which control the operation
of Keyman Engine.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanKeyboardOptions', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='Items'><code>Items[Index]</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanKeyboardOption'><code>IKeymanKeyboardOption</code></a> reference for the option identified by <code>Index</code>.</dd>
</dl>

<dl>
  <dt><a href='IndexOf'><code>IndexOf()</code></a></dt>
  <dd>Gets the index of an option by ID in the collection.</dd>
</dl>
