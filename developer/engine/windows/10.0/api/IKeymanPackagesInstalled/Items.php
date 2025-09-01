<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackagesInstalled::Items[Index] Property"
  ]);
?>

<h1>IKeymanPackagesInstalled::Items[Index] Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackagesInstalled::Items[Index]</code> property returns a reference to the installed package identified by <code>Index</code>. If the
package is not found, exception <a href='../IKeymanError/ErrorCode'><code>KMN_E_Collection_InvalidIndex</code></a> is raised.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanPackageInstalled* Items[variant Index]</code></pre>

<h2>Parameters</h2>

<dl>
  <dt>Index</dt>
  <dd>A zero-based integer index or the string <a href='../IKeymanPackage/ID'><code>IKeymanPackage::ID</code></a> of the package.</dd>
</dl>
