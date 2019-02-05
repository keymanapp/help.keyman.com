<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackageFile::Install Method"
  ]);
?>

<h1>IKeymanPackageFile::Install Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackageFile::Install</code> method installs the package file (.kmp) into Keyman Engine for Windows. This includes decompressing the archive, copying the files
contained into the Keyman Engine package store, adding registry settings, installing fonts, and keyboard layouts with default languages.</p>

<p>Fonts are copied and installed into the Windows Fonts folder, if an existing font with the same name is not already present.</p>

<p class='note'>This method requires elevated privileges.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void Install(bool Force)</code></pre>

<h2>Parameters</h2>

<dl>
  <dt><code>Force</code></dt>
  <dd>If <code>True</code>, overwrites an existing package entry.</dd>
</dl>
