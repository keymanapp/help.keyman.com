<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanKeyboards Interface"
  ]);
?>

<h1>IKeymanKeyboards Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboards</code> interface is the base interface for the a list of keyboards in Keyman Engine for Windows API.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanKeyboards', '../'); ?>

<h2>Methods</h2>

<dl>
  <dt><a href='IndexOf'><code>IndexOf()</code></a></dt>
  <dd>Find the index of a keyboard by ID</dd>
</dl>
