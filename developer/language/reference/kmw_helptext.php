<?php
  require_once('includes/template.php');

  head([
    'title' => "&amp;kmw_helptext store"
  ]);
?>

<h1 class="title" id="reference_kmw_helptext">&amp;kmw_helptext</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;kmw_helptext</strong></code> store specifies a HTML string that will be displayed in the footer of the On Screen Keyboard on desktop web browsers.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(&amp;kmw_helptext) "<var>htmlString</var>"
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>htmlString</code></dt>
  <dd>The HTML string to embed, relative to the keyboard file.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>&amp;kmw_helptext</code> store allows you to specify a HTML string that will be displayed in the footer of the On Screen Keyboard on
desktop web browsers. It is mutually exclusive with the <a href='kmw_helpfile'><code>&amp;kmw_helpfile</code> store</a>.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_kmw_helptext" name="Example:_Using_kmw_helptext">Example: Using <code>&amp;kmw_helptext</code></h3>

<pre><code>store(&amp;kmw_helptext) 'For more help, please visit &lt;a href="http://example.com/" target="_blank">example.com&lt;/a>'
</code></pre>

<h2>Platforms</h2>

<p>The <code>&amp;kmw_helptext</code> store will be used in keyboards on desktop web platforms. It is ignored on all other platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✘</td><td>✘</td><td>✘</td><td>✔</td><td>✘</td><td>✘</td><td>✘</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>&amp;kmw_helptext</code> store was added in Keyman 7.0.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="kmw_helpfile" title="&amp;kmw_helpfile store"><code>&amp;kmw_helpfile</code> store</a></li>
</ul>