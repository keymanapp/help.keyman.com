<?php
  require_once('includes/template.php');

  head([
    'title' => "keyman_hotkeys.xsl: Keyman Desktop Configuration window - Hotkeys tab"
  ]);
?>

<h1>keyman_hotkeys.xsl: Keyman Desktop Configuration window - Hotkeys tab</h1>

<p>This tab shows the hotkeys for the active product and installed keyboards on the active product.</p>

<h2><a name="id496169" id="id496169"></a>XML Parameters</h2>

<p>The hotkeys are available in two different locations: KeymanKeyboardInstalled/Hotkey and Hotkeys/Hotkey:</p>

<pre class="language-markup"><code>&lt;Hotkey>
  &lt;index>##&lt;/index>
  [&lt;Target>(integer target of hotkey)&lt;/Target>]
  &lt;Value>(hotkey string, e.g. Ctrl+Alt+X)&lt;/Value>
&lt;/Hotkey>
</code></pre>

<h2><a name="id496194" id="id496194"></a>Targets</h2>

<table class="display">
  <tr>
    <th>Target</th>
    <th>Parameters</th>
    <th>Description</th>
  </tr>
  <tr>
    <td><code>keyman:hotkey_set</code></td>
    <td><code>index</code>: Index of the hotkey</td>
    <td>Opens the set hotkey dialog identified by index</td>
  </tr>
  <tr>
    <td><code>keyman:hotkey_clear</code></td>
    <td><code>index</code>: Index of the hotkey</td>
    <td>Clears the hotkey identified by index</td>
  </tr>
  <tr>
    <td><code>keyman:keyboard_hotkey</code></td>
    <td><code>index</code>: The index of the keyboard from the parameters</td>
    <td>Opens the hotkey dialog for the keyboard identified by index</td>
  </tr>
</table>
