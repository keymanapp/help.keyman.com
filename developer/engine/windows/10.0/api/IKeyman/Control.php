<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeyman::Control Property"
  ]);
?>

<h1>IKeyman::Control Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeyman::Control</code> property returns the Keyman <code><a href='../IKeymanControl'>IKeymanControl</a></code> interface which
provides methods to control various aspects of the Keyman process and user interface interactions.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanControl* Control</code></pre>
