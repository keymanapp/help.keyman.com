<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanHotkey::Target Property"
  ]);
?>

<h1>IKeymanHotkey::Target Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanHotkey::Target</code> property returns the target of the hotkey. For a hotkey associated with a keyboard,
this will always be <code>khKeyboard</code>.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly KeymanHotkeyTarget Target</code></pre>

<h2>Target Values</h2>

<table class='display'>
  <thead>
    <tr>
      <th>Value</th><th>Target</th><th>Notes</th>
    </tr>
  </thead>
  <tbody>
    <tr><td>0</td><td>khKeymanOff</td><td>Switches to first Windows keyboard which is not a Keyman keyboard</td></tr>
    <tr><td>1</td><td>khKeyboardMenu</td><td>Opens the Keyman keyboard menu from the notification area</td></tr>
    <tr><td>2</td><td>khVisualKeyboard</td><td>Opens the On Screen Keyboard page in the on screen keyboard. If the On Screen Keyboard page is already visible, closes the on screen keyboard</td></tr>
    <tr><td>3</td><td>khKeymanConfiguration</td><td>Opens Keyman Configuration</td></tr>
    <tr><td>4</td><td>khKeyboardUsage</td><td>Opens the Keyboard Usage page in the on screen keyboard. If the Keyboard Usage page is already visible, closes the on screen keyboard</td></tr>
    <tr><td>5</td><td>khFontHelper</td><td>Opens the Font Helper page in the on screen keyboard. If the Font Helper page is already visible, closes the on screen keyboard</td></tr>
    <tr><td>6</td><td>khCharacterMap</td><td>Opens the Character Map page in the on screen keyboard. If the Character Map page is already visible, closes the on screen keyboard</td></tr>
    <tr><td>7</td><td>khTextEditor</td><td>Opens the Keyman Text Editor</td></tr>
    <tr><td>8</td><td>khLanguageSwitch</td><td>Opens the Language Switcher</td></tr>
    <tr><td>9</td><td>khKeyboard</td><td>Selects or Toggles the keyboard associated with the hotkey.</td></tr>
  </tbody>
</table>