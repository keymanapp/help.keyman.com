<?php
  require_once('includes/template.php');

  head([
    'title' => "&amp;kmw_helpfile store"
  ]);
?>

<h1 class="title" id="reference_kmw_helpfile">&amp;kmw_helpfile</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;kmw_helpfile</strong></code> store specifies an external HTML snippet file that should be embedded into a compiled web or touch keyboard, and displayed
in place of the on screen keyboard.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(&amp;kmw_helpfile) "<var>filename</var>"
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>filename</code></dt>
  <dd>The filename of the HTML file to embed, relative to the keyboard file.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>&amp;kmw_helpfile</code> store allows you to specify a HTML file to embed into a Keyman web keyboard for desktop keyboards.
This HTML file should not include <code class='language-markup'>&lt;head></code> or <code class='language-markup'>&lt;body></code> tags, as
will be a snippet only. On a desktop browser, the contents of this file will replace the On Screen Keyboard. It is mutually exclusive with the
<a href='kmw_helptext.php'><code>&amp;kmw_helptext</code> store</a>.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_kmw_helpfile" name="Example:_Using_kmw_helpfile">Example: Using <code>&amp;kmw_helpfile</code></h3>

<pre><code>store(&amp;kmw_helpfile) 'custom-osk.html'
</code></pre>

<h2>Platforms</h2>

<p>The <code>&amp;kmw_helpfile</code> store will be used in keyboards on desktop web platforms. It is ignored on all other platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✘</td><td>✘</td><td>✘</td><td>✔</td><td>✘</td><td>✘</td><td>✘</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>&amp;kmw_helpfile</code> store was added in Keyman 7.0.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="kmw_helptext" title="&amp;kmw_helptext store"><code>&amp;kmw_helptext</code> store</a></li>
</ul>