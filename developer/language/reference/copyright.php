<?php
  require_once('includes/template.php');

  head([
    'title' => "&amp;copyright store"
  ]);
?>

<h1 class="title" id="reference_copyright">&amp;copyright</h1>
    
<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;copyright</strong></code> store allows a keyboard author to embed a copyright statement in a keyboard when it is compiled.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(&amp;copyright) "<var>message</var>"
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>message</code></dt>
  <dd>A copyright message that will be displayed verbatim in the copyright area of the keyboard metadata display in the Keyman user interface.</dd>
</dl>

<p>The <code>COPYRIGHT</code> header is deprecated, and the <code>&amp;copyright</code> store should be used in preference in new keyboards.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_copyright" name="Example:_Using_copyright">Example: Using <code>&amp;copyright</code></h3>

<pre><code>store(&amp;copyright) "Copyright © 2001 Joe Bloggs"
</code></pre>

<h2>Platforms</h2>

<p>The <code>&amp;copyright</code> store can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>COPYRIGHT</code> statement was introduced in Keyman 4.0.</p>

<p>The <code>&amp;copyright</code> store was introduced in Keyman 5.0, deprecating the <code>COPYRIGHT</code> header statement</p>
