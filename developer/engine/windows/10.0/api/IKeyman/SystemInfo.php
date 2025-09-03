<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeyman::SystemInfo Property"
  ]);
?>

<h1>IKeyman::SystemInfo Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeyman::SystemInfo</code> property returns the Keyman <code><a href='../IKeymanSystemInfo'>IKeymanSystemInfo</a></code> interface which
describes the current system configuration.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanSystemInfo* SystemInfo</code></pre>
