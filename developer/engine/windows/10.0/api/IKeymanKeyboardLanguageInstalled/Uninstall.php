<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardLanguageInstalled::Uninstall Method"
  ]);
?>

<h1>IKeymanKeyboardLanguageInstalled::Uninstall Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardLanguageInstalled::Uninstall</code> method removes this keyboard layout from the 
Windows language, and if it is the last input method for the language, removes the language as well.</p>

<p>This method is asynchronous.</p>

<p class='note'>This method requires elevated privileges.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void Uninstall(void)</code></pre>
