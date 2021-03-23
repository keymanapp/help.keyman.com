<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardsInstalled::Apply Method"
  ]);
?>

<h1>IKeymanKeyboardsInstalled::Apply Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardsInstalled::Apply</code> method applies any changes which have been made to the collection to the Keyman Engine. <code>Apply</code> must be called
if <code><a href='../IKeyman/AutoApply'>IKeyman::AutoApply</a></code> is set to <code>False</code>, after making any changes through the Keyman API. The 
documentation for each method that makes changes documents whether or not <code>Apply</code> needs to be called.</p>

<p>Generally, it is better to call the top-level <code><a href='../IKeyman/Apply'>IKeyman::Apply</a></code> as that will ensure that changes to be applied will be 
consistently applied from all parts of the API at once. It is also faster than calling each collection's <code>Apply</code> method separately in order.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void Apply(void)</code></pre>
