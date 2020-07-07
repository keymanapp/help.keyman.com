<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanPackagesInstalled2 Interface"
  ]);
?>

<h1>IKeymanPackagesInstalled2 Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackagesInstalled2</code> interface lists the packages installed in Keyman Engine.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanPackagesInstalled2', '../'); ?>

<h2>Methods</h2>

<dl>
  <dt><a href='Install2'><code>Install2()</code></a></dt>
  <dd>Installs a package file into Keyman Engine, optionally adding default input method.</dd>
</dl>
