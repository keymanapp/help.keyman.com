<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeyman::Apply Method"
  ]);
?>

<h1>IKeyman::Apply Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeyman::Apply</code> method applies the changes which have been made through the current API instantiation to the Keyman Engine. 
If <code><a href='AutoApply'>IKeyman::AutoApply</a></code> is set to <code>False</code>, <code>Apply</code> must be called
after making changes through the Keyman API. The documentation for each method that makes changes documents whether or not <code>Apply</code> 
needs to be called.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void Apply(void)</code></pre>
