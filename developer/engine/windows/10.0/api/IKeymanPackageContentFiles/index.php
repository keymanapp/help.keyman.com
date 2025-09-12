<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanPackageContentFiles Interface"
  ]);
?>

<h1>IKeymanPackageContentFiles Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackageContentFiles</code> interface lists the files included in the package.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanPackageContentFiles', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='Items'><code>Items[Index]</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanPackageContentFile'><code>IKeymanPackageContentFile</code></a> reference for the file identified by <code>Index</code>.</dd>
</dl>

<dl>
  <dt><a href='IndexOf'><code>IndexOf()</code></a></dt>
  <dd>Gets the index of a file by filename in the collection.</dd>
</dl>
