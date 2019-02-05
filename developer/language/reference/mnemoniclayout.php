<?php
  require_once('includes/template.php');

  head([
    'title' => "&amp;mnemoniclayout store"
  ]);
?>

<h1 class="title" id="reference_mnemoniclayout">&amp;mnemoniclayout</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;mnemoniclayout</strong></code> store controls whether a keyboard is positional or mnemonic.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(&amp;mnemoniclayout) <var>isMnemonic</var>
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>isMnemonic</code></dt>
  <dd>A string value, set to <code>"1"</code> for a mnemonic layout, or <code>"0"</code> for positional.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>Keyman supports two different types of keyboards: positional and mnemonic keyboards.</p>

<p>With a mnemonic keyboard, Keyman will instead examine the character output by the current Windows keyboard layout. For example, with
English, French, and German Windows keyboard layouts, pressing "z" will produce the same output, even though the
"z" key is in different positions on all three layouts.</p>

<p>Virtual keys do change their behaviour somewhat in a mnemonic layout. For the "white" character keys (i.e. numbers,
alphabet, and punctuation keys on the primary section of the keyboard), 'virtual character keys' are used instead of regular
virtual keys. See the section on <a href="../guide/virtual-keys" title=
"Virtual Keys and Virtual Character Keys">virtual keys and virtual character keys</a> for details.</p>

<p>Mnemonic layouts work with Latin-script base layouts. While conceptually they could work with any base layout, the majority of non-Latin
script keyboards also include Latin script on the key caps, and most of these follow the US QWERTY layout. European layouts, however, do not
follow the US QWERTY layout.</p>

<p>The layout of a positional keyboard is based on the scan codes sent by the keyboard, which are related to the actual key location on
the keyboard. This means that if you press any particular key, the output will be the same regardless of the underlying physical
keyboard or the keyboard layout selected in Control Panel. In general the layout of the keyboard does not change, but there are a small
handful of keys that may move depending on the physical construction of the keyboard.</p>

<p>Positional keyboards are based on a US English layout: any positional keyboard that tries to match keystrokes with
characters or virtual keys not present on a US English layout (except <code>[K_oE2]</code>, an extra key on European keyboards to 
the right of the Shift key), will not function correctly. If you are creating a
positional keyboard, and you do not use a US English layout normally, we suggest you install another language in Control Panel and
assign the US English layout to it, so that you can easily switch to it to write your keyboard. You can also view <a href=
"../guide/us-english" title="US English keyboard layout">a reference diagram of the US English keyboard layout</a>.</p>

<p>All Keyman keyboards are positional by default. To make a keyboard mnemonic, include the <code>&amp;mnemonicLayout</code> store and set 
its value to <code>1</code>.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_mnemoniclayout" name="Example:_Using_mnemoniclayout">Example: Using <code>&amp;mnemoniclayout</code></h3>

<pre><code>store(&amp;mnemoniclayout) "1"
</code></pre>

<h2>Platforms</h2>

<p>The <code>&amp;mnemoniclayout</code> statement is supported only on desktop keyboards. On touch keyboards, the keys match to US
key codes in the touch definition. Web keyboards have limitations due to the inconsistent ability to determine the active physical
layout.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>1/2</td><td>✘</td><td>✘</td><td>✘</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>&amp;mnemoniclayout</code> store was introduced in Keyman 6.0.</p>
