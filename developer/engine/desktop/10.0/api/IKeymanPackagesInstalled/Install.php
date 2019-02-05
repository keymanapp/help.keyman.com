<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackagesInstalled::Install Method"
  ]);
?>

<h1>IKeymanPackagesInstalled::Install Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackagesInstalled::Install</code> installs the package file (.kmp) into Keyman Engine for Windows. This includes decompressing the archive, copying the files
contained into the Keyman Engine package store, adding registry settings, installing fonts, and keyboard layouts with default languages.</p>

<p>Fonts are copied and installed into the Windows Fonts folder, if an existing font with the same name is not already present.</p>

<p class='note'>This method requires elevated privileges.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void Install(string Filename, bool Force)</code></pre>

<h2>Parameters</h2>

<dl>
  <dt><code>Filename</code></dt>
  <dd>The fully-qualified path to the .kmp file to be installed. This file will be copied to the Keyman package store.</dd>
  
  <dt><code>Force</code></dt>
  <dd>If <code>True</code>, overwrites an existing package entry.</dd>
</dl>

