<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackageContentFile::Stream Property"
  ]);
?>

<h1>IKeymanPackageContentFile::Stream Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackageContentFile::Stream</code> property returns
a readonly <code>IStream</code> reference to the content of the file.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IStream* Stream</code></pre>
