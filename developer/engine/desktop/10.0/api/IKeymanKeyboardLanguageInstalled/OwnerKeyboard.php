<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardLanguageInstalled::OwnerKeyboard Property"
  ]);
?>

<h1>IKeymanKeyboardLanguageInstalled::OwnerKeyboard Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboardLanguageInstalled::OwnerKeyboard</code> property returns <a href='../IKeymanKeyboardInstalled'><code>IKeymanKeyboardInstalled</code></a>
reference for the keyboard that this language profile belongs to.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanKeyboardInstalled* OwnerKeyboard</code></pre>
