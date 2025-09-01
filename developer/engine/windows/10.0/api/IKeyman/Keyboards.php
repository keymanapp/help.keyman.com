<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeyman::Keyboards Property"
  ]);
?>

<h1>IKeyman::Keyboards Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeyman::Keyboards</code> property returns the Keyman <code><a href='../IKeymanKeyboardsInstalled'>IKeymanKeyboardsInstalled</a></code> interface which
provides a list of installed Keyman keyboards.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanKeyboardsInstalled* Keyboards</code></pre>
