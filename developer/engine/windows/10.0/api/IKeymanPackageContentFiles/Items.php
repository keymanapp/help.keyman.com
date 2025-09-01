<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackageContentFiles::Items[Index] Property"
  ]);
?>

<h1>IKeymanPackageContentFiles::Items[Index] Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackageContentFiles::Items[Index]</code> property returns a <a href='../IKeymanPackageContentFile'><code>IKeymanPackageContentFile</code></a> reference 
to the file identified by <code>Index</code> in the package. If the file is not in the package, or the index is out of range, exception 
<a href='../IKeymanError/ErrorCode'><code>KMN_E_Collection_InvalidIndex</code></a> is raised.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanPackageContentFile* Items[variant Index]</code></pre>

<h2>Parameters</h2>

<dl>
  <dt>Index</dt>
  <dd>A zero-based integer index or the string filename of the file. The filename must include the extension, but paths are stripped off and ignored.</dd>
</dl>
