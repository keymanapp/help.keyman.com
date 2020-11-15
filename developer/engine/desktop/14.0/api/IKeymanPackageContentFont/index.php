<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanPackageContentFont Interface"
  ]);
?>

<h1>IKeymanPackageContentFont Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackageContentFont</code> interface describes a font within a package.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanPackageContentFont', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='Filename'><code>Filename</code></a></dt>
  <dd>The filename of the font, without path.</dd>
</dl>

<dl>
  <dt><a href='Name'><code>Name</code></a></dt>
  <dd>The TrueType full name of the font, read from the font NAME table.</dd>
</dl>
