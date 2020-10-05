<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackage::Files Property"
  ]);
?>

<h1>IKeymanPackage::Files Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackage::Files</code> property returns an <a href='../IKeymanPackageContentFiles'><code>IKeymanPackageContentFiles</code></a> 
reference which lists the files included within the package.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanPackageContentFiles* Files</code></pre>
