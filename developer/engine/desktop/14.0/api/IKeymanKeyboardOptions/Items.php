<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardOptions::Items[Index] Property"
  ]);
?>

<h1>IKeymanKeyboardOptions::Items[Index] Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardOptions::Items[Index]</code> property returns a reference to the keyboard option by <code>Index</code>. If the
option is not found, exception <a href='../IKeymanError/ErrorCode'><code>KMN_E_Collection_InvalidIndex</code></a> is raised.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanKeyboardOption* Items[variant Index]</code></pre>

<h2>Parameters</h2>

<dl>
  <dt>Index</dt>
  <dd>A zero-based index, or a string referencing the option by <a href='../IKeymanKeyboardOption/Name'><code>IKeymanKeyboardOption::Name</code></a>.</dd>
</dl>
