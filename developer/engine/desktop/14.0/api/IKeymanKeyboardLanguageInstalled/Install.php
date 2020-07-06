<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardLanguageInstalled::Install Method"
  ]);
?>

<h1>IKeymanKeyboardLanguageInstalled::Install Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardLanguageInstalled::Install</code> method adds this keyboard layout to the 
Windows language, and if it is the first input method for the language, adds the language as well. This
is the best way to install a language that is a suggested language for the keyboard.</p>

<p>This method is asynchronous.</p>

<p class='note'>This method requires elevated privileges.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void Install(void)</code></pre>
