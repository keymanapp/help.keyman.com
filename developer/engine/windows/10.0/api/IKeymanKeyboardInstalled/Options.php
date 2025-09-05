<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardInstalled::Options Property"
  ]);
?>

<h1>IKeymanKeyboardInstalled::Options Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardInstalled::Options</code> property returns an <a href='../IKeymanKeyboardOptions'><code>IKeymanKeyboardOptions</code></a> 
reference which lists the user-configurable options for the keyboard layout. Changes to this collection will be applied after 
<a href='../IKeymanKeyboardsInstalled/Apply'><code>IKeymanKeyboardsInstalled::Apply</code></a> is called.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanKeyboardOptions* Options</code></pre>
