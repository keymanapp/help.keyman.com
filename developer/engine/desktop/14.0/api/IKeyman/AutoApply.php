<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeyman::AutoApply Property"
  ]);
?>

<h1>IKeyman::AutoApply Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeyman::AutoApply</code> property determines if the API will apply changes automatically to the Keyman Engine after each 
change is made. Some changes are applied immediately, such as installing a keyboard layout. However other changes will not be applied
unless the <code><a href='Apply'>Apply</a></code> method is called, or unless <code>AutoApply</code> is set to <code>True</code>. The 
documentation for each method that makes changes documents whether or not <code>Apply</code> needs to be called.</p>

<p><code>AutoApply</code> defaults to <code>True</code>.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>bool AutoApply</code></pre>
