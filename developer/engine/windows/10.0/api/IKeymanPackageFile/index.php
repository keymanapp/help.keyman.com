<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanPackageFile Interface"
  ]);
?>

<h1>IKeymanPackageFile Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackageFile</code> interface describes a keyboard package file. A keyboard package file is 
a bundle that contains keyboard layout(s), visual keyboards, documentation, fonts and any other related files 
to simplify distribution of keyboard layouts.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanPackageFile', '../'); ?>

<h2>Methods</h2>

<dl>
  <dt><a href='Install'><code>Install()</code></a></dt>
  <dd>Installs the package into Keyman Engine.</dd>
</dl>
