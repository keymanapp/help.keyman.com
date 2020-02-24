<?php
  require_once('includes/template.php');

  head([
    'title' => "&amp;kmw_embedcss store"
  ]);
?>

<h1 class="title" id="reference_kmw_embedcss">&amp;kmw_embedcss</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;kmw_embedcss</strong></code> store specifies an external CSS file that should be embedded into a compiled web or touch keyboard and applied on load.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(&amp;kmw_embedcss) "<var>filename</var>"
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>filename</code></dt>
  <dd>The filename of the CSS file to embed, relative to the keyboard file.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>&amp;kmw_embedcss</code> store allows you to specify a CSS file to embed into a Keyman touch or web keyboard.
The CSS file will be dynamically injected into the page when the keyboard is loaded or activated, and removed when it is
deactivated.</p>

<p>CSS in this stylesheet should be applied carefully. Keyman already dynamically styles keyboards to target devices, so 
you should take into account different devices and styles. Avoid adjusting box models, sizing or positioning, as these 
will not translate between different devices.</p>

<p>A good use for a custom stylesheet is to style a specific key or set of keys differently, to differentiate them from 
the rest of the keyboard.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_kmw_embedcss" name="Example:_Using_kmw_embedcss">Example: Using <code>&amp;kmw_embedcss</code></h3>

<pre><code>store(&amp;kmw_embedcss) 'custom-keys.css'
</code></pre>

<h2>Platforms</h2>

<p>The <code>&amp;kmw_embedcss</code> store will be used in keyboards on web and touch platforms. It is ignored on all other platforms.</p>

<table class='platform'>
  <thead>
  <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✘</td><td>✘</td><td>✘</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>&amp;kmw_embedcss</code> store was added in Keyman 9.0.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="kmw_embedjs.php" title="&amp;kmw_embedjs store"><code>&amp;kmw_embedjs</code> store</a></li>
</ul>