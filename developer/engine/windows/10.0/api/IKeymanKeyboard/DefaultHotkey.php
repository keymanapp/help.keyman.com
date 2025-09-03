<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboard::DefaultHotkey Property"
  ]);
?>

<h1>IKeymanKeyboard::DefaultHotkey Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanKeyboard::DefaultHotkey</code> property returns
the <a href='/developer/language/reference/hotkey'><code>&amp;hotkey</code></a> value from the keyboard file.</p>

<p>This is informational data and may not be the same as the currently configured hotkey for the keyboard.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly IKeymanHotkey* DefaultHotkey</code></pre>
