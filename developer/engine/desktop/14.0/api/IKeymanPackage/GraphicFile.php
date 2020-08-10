<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackage::GraphicFile Property"
  ]);
?>

<h1>IKeymanPackage::GraphicFile Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackage::GraphicFile</code> property returns an <a href='../IKeymanPackageContentFile'><code>IKeymanPackageContentFile</code></a> reference for the install
  screen graphic included within the package, or <code>null</code> if no install screen graphic was included.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanPackageContentFile* GraphicFile</code></pre>
