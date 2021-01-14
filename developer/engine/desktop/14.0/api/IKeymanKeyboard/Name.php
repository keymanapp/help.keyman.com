<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboard::Name Property"
  ]);
?>

<h1>IKeymanKeyboard::Name Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboard::Name</code> property returns
the <a href='/developer/language/reference/name'><code>&amp;name</code></a> string from the keyboard file.
This name is shown to the user in the Keyman Engine user interface and in the Windows keyboard picker.</p>

<p>The <code>Name</code> property is not related to the <a href='ID'><code>ID</code></a> property or the
<a href='Filename'><code>Filename<code></a> property.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly string Name</code></pre>
