<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackagesInstalled::GetPackageFromFile Method"
  ]);
?>

<h1>IKeymanPackagesInstalled::GetPackageFromFile Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackagesInstalled::GetPackageFromFile</code> method loads the package file referred to by Filename and returns details about the file.
It does not install the package for use.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>IKeymanPackageFile* GetPackageFromFile(string Filename)</code></pre>

<h2>Parameters</h2>

<dl>
  <dt>Filename</dt>
  <dd>The fully-qualified path to the .kmp file to be loaded.</dd>
</dl>
