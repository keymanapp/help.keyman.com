<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackageInstalled::Uninstall Method"
  ]);
?>

<h1>IKeymanPackageInstalled::Uninstall Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackageInstalled::Uninstall</code> method uninstalls the package and its contained keyboards and related artefacts from Keyman Engine for Windows. 
This includes deleting the files from the Keyman Engine package store, removing registry settings, and removing Windows input methods.</p>

<p>Changes associated with calling this method are applied immediately; <a href='../IKeyman/Apply'><code>IKeyman::Apply</code></a> does not
need to be called. However, changes to the Windows input methods are applied asynchronously.</p>

<p class='note'>This method requires elevated privileges.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void Uninstall(bool RemoveFonts)</code></pre>

<h2>Parameters</h2>

<dl>
  <dt><code>RemoveFonts</code></dt>
  <dd>If set to <code>True</code>, fonts that were installed with the package are removed from the system; otherwise, the fonts remain on the system.</dd>
</dl>
