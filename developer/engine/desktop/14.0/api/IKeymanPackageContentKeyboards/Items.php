<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackageContentKeyboards::Items[Index] Property"
  ]);
?>

<h1>IKeymanPackageContentKeyboards::Items[Index] Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackageContentKeyboards::Items[Index]</code> property returns a reference to the keyboard identified by <code>Index</code> in the package. If the
keyboard does not exist, exception <a href='../IKeymanError/ErrorCode'><code>KMN_E_Collection_InvalidIndex</code></a> is raised.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanKeyboard* Items[variant Index]</code></pre>

<h2>Parameters</h2>

<dl>
  <dt>Index</dt>
  <dd>A zero-based integer index or the string <a href='../IKeymanKeyboard/ID'><code>IKeymanKeyboard::ID</code></a> of the keyboard.</dd>
</dl>
