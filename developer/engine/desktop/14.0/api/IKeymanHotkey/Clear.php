<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanHotkey::Clear() Method"
  ]);
?>

<h1>IKeymanHotkey::Clear() Method</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanHotkey::Clear()</code> method clears the hotkey value.</p>

<p>Changes to the hotkey will be applied after <a href='../IKeymanKeyboardsInstalled/Apply'><code>IKeymanKeyboardsInstalled::Apply</code></a> is called for
a keyboard hotkey, or after <a href='../IKeymanHotkeys/Apply'><code>IKeymanHotkeys::Apply</code></a> is called for other hotkeys.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>void Clear(void)</code></pre>
