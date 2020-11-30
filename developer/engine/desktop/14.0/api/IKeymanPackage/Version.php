<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackage::Version Property"
  ]);
?>

<h1>IKeymanPackage::Version Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackage::Version</code> property returns
the version string from the package file. This represents the current version of the package file, and is in the form 
of a dotted numeric string.</p>

<p>The <code>Version</code> property is not directly related to the <a href='../IKeymanKeyboard/Version'><code>IKeymanKeyboard::Version</code></a> property of 
the keyboards within the package.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly string Version</code></pre>
