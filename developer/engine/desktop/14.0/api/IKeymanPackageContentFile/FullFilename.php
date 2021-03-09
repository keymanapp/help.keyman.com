<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackageContentFile::FullFilename Property"
  ]);
?>

<h1>IKeymanPackageContentFile::FullFilename Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackageContentFile::FullFilename</code> property returns
the filename of the file including the path. This may be in a temporary folder 
or in the Keyman package store. The file should not be modified or deleted;
when reading the file, use sharing semantics.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly string FullFilename</code></pre>
