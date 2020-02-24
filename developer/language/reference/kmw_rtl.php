<?php
  require_once('includes/template.php');

  head([
    'title' => "&amp;kmw_rtl store"
  ]);
?>

<h1 class="title" id="reference_kmw_rtl">&amp;kmw_rtl</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;kmw_rtl</strong></code> store specifies whether a keyboard works with a left-to-right or a right-to-left script
on web platforms.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(&amp;kmw_rtl) "<var>value</var>"
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>value</code></dt>
  <dd>If <code>1</code>, then specifies right-to-left, otherwise, or if omitted, specifies left-to-right.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>&amp;kmw_rtl</code> store allows you to specify the directionality of the target script of the keyboard. Keyman Engine
for Web will use this flag to set the directionality of edit controls.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_kmw_rtl" name="Example:_Using_kmw_rtl">Example: Using <code>&amp;kmw_rtl</code></h3>

<pre><code>store(&amp;kmw_rtl) '1'
</code></pre>

<h2>Platforms</h2>

<p>The <code>&amp;kmw_rtl</code> store will be used in web platforms. It is ignored on all other platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✘</td><td>✘</td><td>✘</td><td>✔</td><td>✔</td><td>✘</td><td>✘</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>&amp;kmw_rtl</code> store was added in Keyman 7.0.</p>
