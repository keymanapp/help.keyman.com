<?php
  require_once('includes/template.php');

  head([
    'title' => "&amp;name"
  ]);
?>

<h1 class="title" id="reference_name">&amp;name</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;name</strong></code> store specifies the name of the keyboard presented in the user interface.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(&amp;name) "<var>nameText</var>"
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>nameText</code></dt>
  <dd>The name of the keyboard to be presented to the user.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>&amp;name</code> store lets you give a more descriptive name to your keyboard than just the file name. If 
<code>&amp;name</code> isn't specified in the keyboard file, Keyman will use the filename of the keyboard, excluding the 
extension, so the <code>&amp;name</code> statement is optional.</p>

<p>If a name is specified in the keyboard file, care should be taken to ensure that you give it an easily recognisable and unique
name. For example, rather than call your keyboard <code>"Dutch"</code>, which may confuse users who may have a system Dutch keyboard
already installed, you could call your keyboard <code>"Dan's Dutch"</code> or <code>"Double Dutch"</code>.</p>

<p>The <code>NAME</code> statement is deprecated, and the <code>&amp;name</code> store should be used instead.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_name" name="Example:_Using_name">Example: Using <code>&amp;name</code></h3>

<pre><code>store(&amp;name) "Double Dutch"
</code></pre>

<h2>Platforms</h2>

<p>The <code>&amp;name</code> store can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>&amp;name</code> store was introduced in Keyman 5.0.</p>
<p>The <code>NAME</code> statement was introduced in Keyman 3.0.</p>

