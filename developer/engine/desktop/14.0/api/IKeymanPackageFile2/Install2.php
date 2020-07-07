<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackageFile2::Install2 Method"
  ]);
?>

<h1>IKeymanPackageFile2::Install2 Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackageFile2::Install2</code> method installs the package file (.kmp) into Keyman Engine for Windows. This
includes decompressing the archive, copying the files contained into the Keyman Engine package store, adding registry settings,
installing fonts, and keyboard layouts, optionally with input methods for default languages.</p>

<p>Fonts are copied and installed into the Windows Fonts folder, if an existing font with the same name is not already present.</p>

<p class='note'>This method requires elevated privileges.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void Install(bool Force, bool InstallDefaultLanguage)</code></pre>

<h2>Parameters</h2>

<dl>
  <dt><code>Force</code></dt>
  <dd>If <code>True</code>, overwrites an existing package entry.</dd>

  <dt><code>InstallDefaultLanguage</code></dt>
  <dd>If <code>True</code>, installs the Windows input method for the default language.</dd>
</dl>

<h2>See also</h2>

<dl>
  <dt><a href='../IKeymanPackagesInstalled/Install'><code>IKeymanPackagesInstalled::Install</code></a></dt>
  <dd>Installs a package file and input method for default language</dd>

  <dt><a href='../IKeymanPackagesInstalled2/Install2'><code>IKeymanPackagesInstalled::Install2</code></a></dt>
  <dd>Installs a package file, optionally with input method for default language</dd>

  <dt><a href='../IKeymanPackageFile/Install'><code>IKeymanPackageFile::Install</code></a></dt>
  <dd>Installs a package file and input method for default language</dd>
</dl>