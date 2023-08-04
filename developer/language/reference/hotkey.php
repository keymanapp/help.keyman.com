<?php
  require_once('includes/template.php');

  
?>

<h1 class="title" id="reference_hotkey">&amp;hotkey</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;hotkey</strong></code> store defines a default hotkey that can be used to switch on the keyboard.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(&amp;hotkey) <var>virtualKey</var>
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>virtualKey</code></dt>
  <dd>A virtual key format key code, including square brackets. See format note below for versions 12.0 and earlier.</dd>
</dl>

<p>The <code>&amp;hotkey</code> store specifies the hotkey that Keyman will use to turn the keyboard on. When this hotkey is pressed, any active
keyboard will be turned off and the new keyboard will be turned on. The hotkey must be enclosed in square brackets.</p>

<p>The hotkey can be any standard, non-modifier key, with any combination of the Shift, Control and Alt keys also pressed. Only <code>SHIFT</code>,
<code>CTRL</code> and <code>ALT</code> modifiers are permitted.</p>

<p>The <code>&amp;hotkey</code> store is optional. Earlier versions of Keyman also used the now-deprecated <code>HOTKEY</code> statement.</p>

<p>Note that the default hotkey can be changed by a user after a keyboard is installed. Don't rely on it never changing in any documentation
that you include with the keyboard.</p>

<h2 id="Note">Format Note</h2>

<p>In Keyman Developer 12.0 and earlier, the <code><var>virtualKey</var></code> parameter had to be enclosed in both quotes and square brackets.
As of Keyman Developer 13.0, the quotes are no longer required.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_hotkey" name="Example:_Using_hotkey">Example: Using <code>&amp;hotkey</code></h3>

<pre><code>store(&amp;hotkey) [ALT SHIFT K_PAUSE]   c Alt+Shift+Pause
</code></pre>

<h2>Platforms</h2>

<p>The <code>&amp;hotkey</code> store is used in keyboards on the following platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✘</td><td>✘</td><td>✘</td><td>✘</td><td>✘</td><td>✘</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>Hotkeys were introduced in Keyman 1.0.</p>
<p>The virtual key hotkey format  was introduced in Keyman 3.1.</p>
<p>Keyman Developer 13 no longer requires the virtual key to be in quotes as well as square brackets.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="../guide/virtual-keys" title="Virtual Keys">Virtual keys</a></li>
</ul>
