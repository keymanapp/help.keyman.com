<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboard::Encodings Property"
  ]);
?>

<h1>IKeymanKeyboard::Encodings Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboard::Encodings</code> property returns
the supported encodings for the keyboard. Most keyboards should
be <code>keUnicode</code>, but some legacy keyboards may return
<code>keANSI</code>. It is possible for a keyboard to support
both <code>keUnicode</code> and <code>keANSI</code> but these 
keyboards are rare and not recommended for general use.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly KeymanKeyboardEncodings Encodings</code></pre>

<h2>Encodings</h2>

<table class='display'>
  <thead>
    <tr><th>Value</th><th>Name</th></tr>
  </thead>
  <tbody>
    <tr><td>1</td><td>keANSI</td></tr>
    <tr><td>2</td><td>keUnicode</td></tr>
  </tbody>
</table>
