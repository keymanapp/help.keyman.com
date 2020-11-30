<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanErrors Interface"
  ]);
?>

<h1>IKeymanErrors Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanErrors</code> interface lists errors encountered by Keyman Engine in a previous command such as installing a package.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanErrors', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='Items'><code>Items[Index]</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanError'><code>IKeymanError</code></a> reference at <code>Index</code>.</dd>
</dl>

<h2>Methods</h2>

<dl>
  <dt><a href='Clear'><code>Clear()</code></a></dt>
  <dd>Clears the collection.</dd>
</dl>
