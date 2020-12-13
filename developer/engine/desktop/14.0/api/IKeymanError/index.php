<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanError Interface"
  ]);
?>

<h1>IKeymanError Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanError</code> interface provides information about an error that Keyman Engine encountered.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanError', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='ErrorCode'><code>ErrorCode</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an integer code for the error.</dd>
</dl>

<dl>
  <dt><a href='Description'><code>Description</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns a human-readable description of the error.</dd>
</dl>

<dl>
  <dt><a href='Severity'><code>Severity</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns a <code>KeymanErrorSeverity</code> value for the error.</dd>
</dl>

