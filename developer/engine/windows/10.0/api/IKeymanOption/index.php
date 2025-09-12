<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanOption Interface"
  ]);
?>

<h1>IKeymanOption Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanOption</code> interface describes a user-configurable option in Keyman Engine.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanOption', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='DefaultValue'><code>DefaultValue</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the default value for the option.</dd>
</dl>

<dl>
  <dt><a href='Enabled'><code>Enabled</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns <code>True</code> if the option is currently enabled for the user.</dd>
</dl>

<dl>
  <dt><a href='Group'><code>Group</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns a grouping identifier for the option.</dd>
</dl>

<dl>
  <dt><a href='ID'><code>ID</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an identifier for the option. Identifiers are mapped to user-readable
  strings in the user interface translation files.</dd>
</dl>

<dl>
  <dt><a href='OptionType'><code>OptionType</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the value data type supported by the option, one of <code>kotBool</code>, <code>kotString</code> or <code>kotLong</code>.</dd>
</dl>

<dl>
  <dt><a href='Value'><code>Value</code></a></dt>
  <dd>Reads or sets the current value for the option.</dd>
</dl>
