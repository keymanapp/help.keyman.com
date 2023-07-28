<?php
  require_once('includes/template.php');

  head([
    'title' => "&amp;layoutfile store"
  ]);
?>

<h1 class="title" id="reference_layoutfile">&amp;layoutfile</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;layoutfile</strong></code> store specifies a touch layout description file to
embed into the keyboard.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(&amp;layoutfile) "<var>layoutFilename</var>"
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>layoutFilename</code></dt>
  <dd>The name of the touch layout .JSON file to incorporate into the compiled keyboard.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>&amp;layoutfile</code> store specifies a touch layout .JSON file to incorporate in the Keyman keyboard. If a touch layout
is not specified, then Keyman will build one from the visual keyboard description file referenced in the
<a href='visualkeyboard'><code>&amp;visualkeyboard</code> store</a>. If neither is specified, then Keyman builds a touch layout based
on the US English desktop keyboard layout.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_layoutfile" name="Example:_Using_layoutfile">Example: Using <code>&amp;layoutfile</code></h3>

<pre><code>store(&amp;layoutfile) 'greek.keyman-touch-layout'
</code></pre>

<p>
  In Keyman Developer 9.0 and earlier versions, the <code>&amp;layoutfile</code> store referenced a .JSON file
  with the keyboard id suffixed with -layout.js.
  Keyman Developer 10.0 will still compile keyboards that reference the .JSON .js files, but it is recommended that you
  rename the layoutfile to avoid confusing it with the .js compiled Keyman touch layout keyboard.
</p>
<p>
  You can do this by renaming the .js file to the keyboard id suffixed with .keyman-touch-layout, updating the reference to the file
  in the .kmn file, and then loading and saving the .kmn file in Keyman Developer.
</p>

<h2>Platforms</h2>

<p>The <code>&amp;layoutfile</code> store will be used in touch platforms. It is ignored on all other platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✘</td><td>✘</td><td>✘</td><td>✘</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>&amp;layoutfile</code> store example updated to .keyman-touch-layout extension in Keyman 10.0</p>
<p>The <code>&amp;layoutfile</code> store was added in Keyman 9.0.</p>


<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="/developer/current-version/guides/develop/">Designing touch layouts with Keyman Developer</a></li>
  <li><a href="visualkeyboard" title="&amp;visualkeyboard store"><code>&amp;visualkeyboard</code> store</a></li>
  <li><a href="layer" title="&amp;layer store"><code>&amp;layer</code> store</a></li>
</ul>
