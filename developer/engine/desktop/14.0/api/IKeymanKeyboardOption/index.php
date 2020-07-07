<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanKeyboardOption Interface"
  ]);
?>

<h1>IKeymanKeyboardOption Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardOption</code> interface lists an option associated with a specific keyboard. The options are defined by 
the keyboard developer through the <a href='/developer/language/guide/variable-stores'>variable stores</a> feature.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanKeyboardOption', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='Name'><code>Name</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the name of the option as defined by the keyboard developer.</dd>
</dl>

<dl>
  <dt><a href='Value'><code>Value</code></a></dt>
  <dd>Controls the current value of the option. Valid values depend on the keyboard layout.</dd>
</dl>
