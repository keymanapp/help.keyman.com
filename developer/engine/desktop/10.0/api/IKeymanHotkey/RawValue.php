<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanHotkey::RawValue Property"
  ]);
?>

<h1>IKeymanHotkey::RawValue Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanHotkey::RawValue</code> property sets or returns the raw hotkey value, which is the <a href='Modifiers'><code>Modifiers</code></a> property 
bitwise or-ed with the <a href='VirtualKey'><code>VirtualKey</code></a> property.</p>

<p>Changes to the hotkey will be applied after <a href='../IKeymanKeyboardsInstalled/Apply'><code>IKeymanKeyboardsInstalled::Apply</code></a> is called for
a keyboard hotkey, or after <a href='../IKeymanHotkeys/Apply'><code>IKeymanHotkeys::Apply</code></a> is called for other hotkeys.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>long RawValue</code></pre>
