<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanPackageContentKeyboards Interface"
  ]);
?>

<h1>IKeymanPackageContentKeyboards Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackageContentKeyboards</code> interface lists the keyboards included in the package.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanPackageContentKeyboards', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='Items'><code>Items[Index]</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanKeyboard'><code>IKeymanKeyboard</code></a> reference for the keyboard identified by <code>Index</code>.</dd>
</dl>
