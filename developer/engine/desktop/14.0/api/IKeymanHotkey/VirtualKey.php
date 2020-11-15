<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanHotkey::VirtualKey Property"
  ]);
?>

<h1>IKeymanHotkey::VirtualKey Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanHotkey::VirtualKey</code> property sets or returns the virtual key associated with the hotkey.</p>

<p>Changes to the hotkey will be applied after <a href='../IKeymanKeyboardsInstalled/Apply'><code>IKeymanKeyboardsInstalled::Apply</code></a> is called for
a keyboard hotkey, or after <a href='../IKeymanHotkeys/Apply'><code>IKeymanHotkeys::Apply</code></a> is called for other hotkeys.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>long VirtualKey</code></pre>
