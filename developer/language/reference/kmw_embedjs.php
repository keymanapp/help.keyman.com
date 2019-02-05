<?php
  require_once('includes/template.php');

  head([
    'title' => "&amp;kmw_embedjs store"
  ]);
?>

<h1 class="title" id="reference_kmw_embedjs">&amp;kmw_embedjs</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;kmw_embedjs</strong></code> store specifies an external JavaScript file that should be embedded into a compiled web or touch keyboard.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(&amp;kmw_embedjs) "<var>filename</var>"
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>filename</code></dt>
  <dd>The filename of the JavaScript file to embed, relative to the keyboard file.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>&amp;kmw_embedjs</code> store allows you to specify a JavaScript file to embed into a Keyman touch or web keyboard.
This is typically used with the <a href='call.php'><code>call()</code> statement</a>.</p>

<p>The code is wrapped in a closure, and global variables should be avoided.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_kmw_embedjs" name="Example:_Using_kmw_embedjs">Example: Using <code>&amp;kmw_embedjs</code></h3>

<pre><code>store(&amp;kmw_embedjs) 'custom-imx.js'
</code></pre>

<h2>Platforms</h2>

<p>The <code>&amp;version</code> store will be used in keyboards on web and touch platforms. It is ignored on all other platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✘</td><td>✘</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>&amp;kmw_embedjs</code> store was added in Keyman 7.0.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="kmw_embedcss.php" title="&amp;kmw_embedcss store"><code>&amp;kmw_embedcss</code> store</a></li>
</ul>