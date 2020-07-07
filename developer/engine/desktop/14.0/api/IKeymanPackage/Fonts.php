<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackage::Fonts Property"
  ]);
?>

<h1>IKeymanPackage::Fonts Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackage::Fonts</code> property returns an <a href='../IKeymanPackageContentFonts'><code>IKeymanPackageContentFonts</code></a> 
reference which lists the fonts included within the package.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanPackageContentFonts* Fonts</code></pre>
