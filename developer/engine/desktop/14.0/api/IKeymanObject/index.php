<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');

  head([
    'title' => "IKeymanObject Interface"
  ]);
?>

<h1>IKeymanObject Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanObject</code> interface is the base interface for all interfaces in Keyman Engine for Windows API.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanObject', '../'); ?>

<h2>Methods</h2>

<dl>
  <dt><a href='SerializeXML'><code>SerializeXML()</code></a></dt>
  <dd>Serializes the properties of the object, and owned objects as XML</dd>
</dl>
