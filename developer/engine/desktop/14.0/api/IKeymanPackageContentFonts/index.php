<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanPackageContentFonts Interface"
  ]);
?>

<h1>IKeymanPackageContentFonts Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackageContentFonts</code> interface lists the fonts included in the package.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanPackageContentFonts', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='Items'><code>Items[Index]</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanPackageContentFont'><code>IKeymanPackageContentFont</code></a> reference for the font identified by <code>Index</code>.</dd>
</dl>

<dl>
  <dt><a href='IndexOf'><code>IndexOf()</code></a></dt>
  <dd>Gets the index of a font by filename in the collection.</dd>
</dl>
