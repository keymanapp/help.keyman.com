<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackage::Filename Property"
  ]);
?>

<h1>IKeymanPackage::Filename Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackage::Filename</code> property returns
the fully qualified filename of the package .kmp file, if the
parent interface is <a href='../IKeymanPackageFile'><code>IKeymanPackageFile</code></a>,
otherwise (interface is <a href='../IKeymanPackageInstalled'><code>IKeymanPackageInstalled</code></a>), 
it returns the fully qualified filename of the package kmp.inf file within the Keyman package
store.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly string Filename</code></pre>
