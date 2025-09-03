<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardInstalled::OwnerPackage Property"
  ]);
?>

<h1>IKeymanKeyboardInstalled::OwnerPackage Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardInstalled::OwnerPackage</code> property returns an <a href='../IKeymanPackageInstalled'><code>IKeymanPackageInstalled</code></a> 
reference for the package which contained this keyboard when it was installed. If the keyboard was installed standalone, then <code>OwnerPackage</code>
returns <code>null</code>.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanPackageInstalled* OwnerPackage</code></pre>
