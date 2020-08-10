<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackage::ReadmeFile Property"
  ]);
?>

<h1>IKeymanPackage::ReadmeFile Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackage::ReadmeFile</code> property returns an <a href='../IKeymanPackageContentFile'><code>IKeymanPackageContentFile</code></a> reference 
for the install Readme HTML file included within the package, or <code>null</code> if no Readme file was included.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanPackageContentFile* ReadmeFile</code></pre>
