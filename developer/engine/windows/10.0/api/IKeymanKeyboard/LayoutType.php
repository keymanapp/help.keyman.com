<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboard::LayoutType Property"
  ]);
?>

<h1>IKeymanKeyboard::LayoutType Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboard::LayoutType</code> property returns
the value of the <a href='/developer/language/reference/mnemoniclayout'><code>&amp;mnemoniclayout</code></a> store.
A keyboard layout that is mnemonic (<code>kltMnemonic</code>) is remapped by Keyman Engine according to the current 
Latin script-based base layout, whereas a keyboard layout that is positional (<code>kltPositional</code>) is not 
affected by the current base layout.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly KeymanKeyboardLayoutType LayoutType</code></pre>

<h2>Layout Types</h2>

<table class='display'>
  <thead>
    <tr><th>Code</th><th>Value</th><th>Description</th></tr>
  </thead>
  <tbody>
    <tr><td>kltPositional</td><td>0</td><td>The keyboard layout is not affected by the current base layout.</td></tr>
    <tr><td>kltMnemonic</td><td>1</td><td>The keyboard layout has been remapped to match the current Latin script-based base layout.</td></tr>
  </tbody>
</table>
