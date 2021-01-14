<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanVisualKeyboard::Uninstall Method"
  ]);
?>

<h1>IKeymanVisualKeyboard::Uninstall Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanVisualKeyboard::Uninstall</code> method removes this visual keyboard from the 
keyboard and the Keyman keyboard store.</p>

<p class='note'>This method requires elevated privileges.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void Uninstall(void)</code></pre>
