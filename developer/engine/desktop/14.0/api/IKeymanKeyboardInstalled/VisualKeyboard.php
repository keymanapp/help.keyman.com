<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardInstalled::VisualKeyboard Property"
  ]);
?>

<h1>IKeymanKeyboardInstalled::VisualKeyboard Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardInstalled::VisualKeyboard</code> property returns an <a href='../IKeymanVisualKeyboard'><code>IKeymanVisualKeyboard</code></a> 
reference for the visual keyboard associated with this keyboard. If no visual keyboard is installed for this keyboard, then <code>VisualKeyboard</code>
returns <code>null</code>.</p>

<p>A visual keyboard can be installed with <a href='InstallVisualKeyboard'><code>InstallVisualKeyboard()</code></a>.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanVisualKeyboard* VisualKeyboard</code></pre>
