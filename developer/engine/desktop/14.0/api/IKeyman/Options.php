<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeyman::Options Property"
  ]);
?>

<h1>IKeyman::Options Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeyman::Options</code> property returns the Keyman <code><a href='../IKeymanOptions'>IKeymanOptions</a></code> interface which
provides a list of configuration settings and values in Keyman Engine for Windows.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanOptions* Options</code></pre>
