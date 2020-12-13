<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanPackagesInstalled Interface"
  ]);
?>

<h1>IKeymanPackagesInstalled Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackagesInstalled</code> interface lists the packages installed in Keyman Engine.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanPackagesInstalled', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='Items'><code>Items[Index]</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanPackageInstalled'><code>IKeymanPackageInstalled</code></a> reference for the package identified by <code>Index</code>.</dd>
</dl>

<h2>Methods</h2>

<dl>
  <dt><a href='GetPackageFromFile'><code>GetPackageFromFile()</code></a></dt>
  <dd>Returns an <a href='../IKeymanPackageFile'><code>IKeymanPackageFile</code></a> reference for a package file.</dd>
</dl>

<dl>
  <dt><a href='IndexOf'><code>IndexOf()</code></a></dt>
  <dd>Gets the index of a package by ID in the collection.</dd>
</dl>

<dl>
  <dt><a href='Install'><code>Install()</code></a></dt>
  <dd>Installs a package file into Keyman Engine.</dd>
</dl>
