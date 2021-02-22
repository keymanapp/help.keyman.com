<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackage::Name Property"
  ]);
?>

<h1>IKeymanPackage::Name Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackage::Name</code> property returns
the descriptive name of the package from the package file.
This name is shown to the user in the Keyman Engine user interface.</p>

<p>The <code>Name</code> property is not related to the <a href='ID'><code>ID</code></a> property or the
<a href='Filename'><code>Filename</code></a> property.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly string Name</code></pre>
