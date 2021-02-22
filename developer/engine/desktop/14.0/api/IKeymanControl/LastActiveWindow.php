<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanControl::LastActiveWindow Property"
  ]);
?>

<h1>IKeymanControl::LastActiveWindow Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanControl::LastActiveWindow</code> property returns the last 
active window handle, excluding Keyman windows such as the On Screen Keyboard.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly long LastActiveWindow</code></pre>

