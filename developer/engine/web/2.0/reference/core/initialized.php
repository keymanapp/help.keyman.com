<?php
  require_once('includes/template.php');

  head([
    'title' => "Property: initialized"
  ]);
?>

<h1 class="title" id="core_initialized">initialized</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>Keymanweb core module initialization state flag.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<?php
echo codebox(<<<END
tavultesoft.keymanweb.initialized
END
);
?>

<h3 id="Type" name="Type">Type</h3>

<p>Integer</p>

<h3 id="Access" name="Access">Access</h3>

<p>Read only</p>

<h3 id="ReturnValue" name="ReturnValue">Return Value</h3>

<p><code>0</code> (if KeymanWeb is not initialized) or <code>1</code> (if initialized)</p>

<h2 id="Description" name="Description">Description</h2>

<p>Please note that this is included for legacy reasons from Keyman 1.0.  Rather than blocking on this flag, it is
safe to call <code>tavultesoft.keymanweb.init()</code> instead to ensure initialization, so long as the page has
already loaded.</p>