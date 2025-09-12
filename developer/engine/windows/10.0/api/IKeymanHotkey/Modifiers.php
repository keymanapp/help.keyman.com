<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanHotkey::Modifiers Property"
  ]);
?>

<h1>IKeymanHotkey::Modifiers Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanHotkey::Modifiers</code> property controls the set of modifiers associated with the hotkey.</p>

<p>Changes to the hotkey will be applied after <a href='../IKeymanKeyboardsInstalled/Apply'><code>IKeymanKeyboardsInstalled::Apply</code></a> is called for
a keyboard hotkey, or after <a href='../IKeymanHotkeys/Apply'><code>IKeymanHotkeys::Apply</code></a> is called for other hotkeys.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>KeymanHotkeyModifiers Modifiers</code></pre>

<h2>Modifier Values</h2>

<table class='display'>
  <thead>
    <tr>
      <th>Value</th><th>Modifier</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>0x10000</td><td>HK_ALT</td></tr>
    <tr><td>0x20000</td><td>HK_CTRL</td></tr>
    <tr><td>0x40000</td><td>HK_SHIFT</td></tr>
  </tbody>
</table>