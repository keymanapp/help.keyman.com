<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackage::Graphic Property"
  ]);
?>

<h1>IKeymanPackage::Graphic Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackage::Graphic</code> property returns  an <code>IPicture</code> reference for the install screen graphic included within the package, 
or <code>null</code> if no install screen graphic was included.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IPicture* Graphic</code></pre>
