<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackageContentFonts::Items[Index] Property"
  ]);
?>

<h1>IKeymanPackageContentFonts::Items[Index] Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackageContentFonts::Items[Index]</code> property returns a <a href='../IKeymanPackageContentFont'><code>IKeymanPackageContentFont</code></a> reference 
to the font identified by <code>Index</code> in the package. If the font is not in the package, or the index is out of range, exception
<a href='../IKeymanError/ErrorCode'><code>KMN_E_Collection_InvalidIndex</code></a> is raised.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanPackageContentFont* Items[variant Index]</code></pre>

<h2>Parameters</h2>

<dl>
  <dt>Index</dt>
  <dd>A zero-based integer index or the string filename of the font.</dd>
</dl>
