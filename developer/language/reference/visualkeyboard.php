<?php
  require_once('includes/template.php');

  head([
    'title' => "&amp;visualkeyboard store"
  ]);
?>

<h1 class="title" id="reference_visualkeyboard">&amp;visualkeyboard</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;visualkeyboard</strong></code> store specifies an On Screen Keyboard source file to
generate the On Screen Keyboard.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(&amp;visualkeyboard) "<var>visualkeyboardname</var>"
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>visualkeyboardname</code></dt>
  <dd>The name of the On Screen Keyboard <a href="../../10.0/reference/file-types/kvks.php">.kvks</a>
    source file to reference in the compiled keyboard.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>
    The <code>&amp;visualkeyboard</code> store specifies a .kvks file to reference in the compiled Keyman keyboard.
    The .kvks (XML format) is compiled into a .kvk binary On Screen Keyboard which needs to be distributed with the .kmx.
</p>

<p>
    However, for web and touch keyboards, the .kvks file is embedded into the compiled keyboard .js file. The .kvk file
    does not need to be distributed for these platforms.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_visualkeyboard" name="Example:_Using_visualkeyboard">Example: Using <code>&amp;visualkeyboard</code></h3>

<pre><code>store(&amp;visualkeyboard) 'greek.kvks'
</code></pre>

<p>
    In Keyman Developer 9.0 and earlier versions, the <code>&amp;visualkeyboard</code> store referenced a binary .kvk file.
    Keyman Developer 10.0 will still compile keyboards that reference the binary .kvk files, but it is recommended that you
    update to using a .kvks file. You can do this by renaming the .kvk file to .kvks, updating the reference to the file
    in the .kmn file, and then loading and saving the .kmn file in Keyman Developer.
</p>

<h2>Platforms</h2>

<p>The <code>&amp;visualkeyboard</code> store is used in all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>&amp;visualkeyboard</code> store changed from .kvk to .kvks in Keyman 10.0.</p>
<p>The <code>&amp;visualkeyboard</code> store was added in Keyman 8.0.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="layoutfile.php" title="&amp;layoutfile store"><code>&amp;layoutfile</code> store</a></li>
</ul>