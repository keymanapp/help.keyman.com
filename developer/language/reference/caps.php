<?php
  require_once('includes/template.php');

  head([
    'title' => "Caps Lock stores"
  ]);
?>

<h1 class="title" id="reference_caps">Caps Lock stores</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The Caps Lock stores control the behaviour of Caps Lock on desktop operating systems.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre class="language-keyman"><code>store(&amp;capsalwaysoff) "1"
store(&amp;capsononly) "1"
store(&amp;shiftfreescaps) "1"
</code></pre>

<h2 id="Description" name="Description">Description</h2>

<p>These three stores, all optional, control how Keyman works with the Caps Lock key. The first store, <code>&amp;capsalwaysoff</code>,
makes sure that Caps Lock cannot be turned on while the keyboard is active, and it turns Caps Lock off when the keyboard is switched on.</p>

<p>The other two statements, <code>&amp;capsononly</code>, and <code>&amp;shiftfreescaps</code> are usually used together. <code>&amp;capsononly</code>
makes the Caps Lock key work like a typewriter Caps Lock, where pressing it turns it on only. <code>&amp;shiftfreescaps</code> tells
Keyman to recognize the use of the Shift key to turn Caps Lock off. Using these two together makes Keyman work like many European
keyboards.</p>

<p>While technically a value of <code>0</code> could be used in the store value, this is equivalent to omitting the store altogether, and the store should
usually be omitted in this case.</p>

<p>The legacy <code>CAPS ALWAYS OFF</code>, <code>CAPS ON ONLY</code> and <code>SHIFT FREES CAPS</code> headers are deprecated and should no longer be used.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_caps_stores" name="Example:_Using_caps_stores">Example: Using Caps Lock stores</h3>

<pre><code>store(&amp;capsalwaysoff) "1"
store(&amp;capsononly) "1"
store(&amp;shiftfreescaps) "1"
</code></pre>

<h2>Platforms</h2>

<p>The Caps Lock statements can be used in keyboards on the following platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✘</td><td>✘</td><td>✘</td><td>✘</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The Caps Lock stores were introduced in Keyman 5.0.</p>

<p>The Caps Lock headers were introduced in Keyman 4.0.</p>
