<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanPackageInstalled Interface"
  ]);
?>

<h1>IKeymanPackageInstalled Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackageInstalled</code> interface describes an installed keyboard package in Keyman Engine for Windows API.
The installed keyboard package is essentially a folder in the Keyman package store, and contains keyboard layouts,
visual keyboards, documentation, fonts and any other related files to simplify distribution of keyboard layouts.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanPackageInstalled', '../'); ?>

<h2>Methods</h2>

<dl>
  <dt><a href='Uninstall'><code>Uninstall()</code></a></dt>
  <dd>Uninstalls the package from Keyman Engine.</dd>
</dl>
