<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboard::Message Property"
  ]);
?>

<h1>IKeymanKeyboard::Message Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboard::Message</code> property returns
the <a href='/developer/language/reference/message'><code>&amp;message</code></a> string from the keyboard file.
This value is typically displayed when a keyboard is installed and in the configuration user interface.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly string Message</code></pre>
