<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanError::Description Property"
  ]);
?>

<h1>IKeymanError::Description Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanError::Description</code> property returns a human-readable description
of the error intended for display; see <a href='ErrorCode'><code>ErrorCode</code></a> for 
the text of each error.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly string Description</code></pre>

