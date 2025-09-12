<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardsInstalled::Items[Index] Property"
  ]);
?>

<h1>IKeymanKeyboardsInstalled::Items[Index] Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardsInstalled::Items[Index]</code> property returns a reference to the installed keyboard identified by <code>Index</code>. If the
keyboard is not found, exception <a href='../IKeymanError/ErrorCode'><code>KMN_E_Collection_InvalidIndex</code></a> is raised.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanKeyboardInstalled* Items[variant Index]</code></pre>

<h2>Parameters</h2>

<dl>
  <dt>Index</dt>
  <dd>A zero-based integer index or the string <a href='../IKeymanKeyboard/ID'><code>IKeymanKeyboard::ID</code></a> of the keyboard.</dd>
</dl>
