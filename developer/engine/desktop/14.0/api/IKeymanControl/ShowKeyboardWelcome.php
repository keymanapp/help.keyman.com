<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanControl::ShowKeyboardWelcome() Method"
  ]);
?>

<h1>IKeymanControl::ShowKeyboardWelcome() Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanControl::ShowKeyboardWelcome()</code> method opens the keyboard welcome.htm for the keyboard
in a HTML window hosted by kmshell.exe.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void ShowKeyboardWelcome(IKeymanKeyboardInstalled* Keyboard)</code></pre>

<h2>Parameters</h2>

<dl>
  <dt><code>Keyboard</code></dt>
  <dd>The installed keyboard for which the documentation should be displayed.</dd>
</dl>
