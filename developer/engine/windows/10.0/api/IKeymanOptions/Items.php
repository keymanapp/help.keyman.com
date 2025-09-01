<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanOptions::Items[Index] Property"
  ]);
?>

<h1>IKeymanOptions::Items[Index] Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanOptions::Items[Index]</code> property returns a <a href='../IKeymanOption'><code>IKeymanOption</code></a> reference 
identified by <code>Index</code>. If the index is out of range, exception <a href='../IKeymanError/ErrorCode'><code>KMN_E_Collection_InvalidIndex</code></a> is raised.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanOption* Items[variant Index]</code></pre>

<h2>Parameters</h2>

<dl>
  <dt>Index</dt>
  <dd>A zero-based integer index, or the string name of the option.</dd>
</dl>
