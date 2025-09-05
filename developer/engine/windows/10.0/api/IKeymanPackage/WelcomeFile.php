<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackage::WelcomeFile Property"
  ]);
?>

<h1>IKeymanPackage::WelcomeFile Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackage::WelcomeFile</code> property returns an <a href='../IKeymanPackageContentFile'><code>IKeymanPackageContentFile</code></a> reference 
 for the welcome.htm documentation HTML file included within the package, or <code>null</code> if no documentation was included.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanPackageContentFile* WelcomeFile</code></pre>
