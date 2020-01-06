<?php
  require_once('includes/template.php');

  head([
    'title' => "&amp;Message store"
  ]);
?>

<h1 class="title" id="reference_message">&amp;message</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;message</strong></code> store provides a generic notice that will be displayed when a keyboard is installed.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(&amp;message) "<var>messageText</var>"
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>messageText</code></dt>
  <dd>A message to be displayed to the end user when the keyboard is installed.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>This is a generic message, such as a shareware notice that you can display when the keyboard is installed. This statement is
optional.</p>

<p>The <code>MESSAGE</code> statement is deprecated and the <code>&amp;message</code> store should be used instead.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_message" name="Example:_Using_message">Example: Using <code>&amp;message</code></h3>

<pre><code>store(&amp;message) "This keyboard is freely redistributable."
</code></pre>

<h2>Platforms</h2>

<p>The <code>&amp;message</code> statement can be used in keyboards on all platforms, but will be displayed only on the following platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✘</td><td>✘</td><td>✘</td><td>✘</td><td>✘</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>&amp;message</code> store was introduced in Keyman 5.0.</p>
<p>The <code>MESSAGE</code> statement was introduced in Keyman 5.0.</p>
