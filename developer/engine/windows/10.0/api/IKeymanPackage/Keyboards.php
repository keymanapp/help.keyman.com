<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackage::Keyboards Property"
  ]);
?>

<h1>IKeymanPackage::Keyboards Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackage::Keyboards</code> property returns an <a href='../IKeymanPackageContentKeyboards'><code>IKeymanPackageContentKeyboards</code></a> 
reference which lists the keyboards included within the package.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanPackageContentKeyboards* Keyboards</code></pre>
