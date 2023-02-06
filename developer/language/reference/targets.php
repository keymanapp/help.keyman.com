<?php
  require_once('includes/template.php');

  head([
    'title' => "&amp;targets store"
  ]);
?>

<h1 class="title" id="reference_targets">&amp;targets</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;targets</strong></code> store specifies the target platforms for which a keyboard should be built.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(&amp;targets) "<var>target [target ...]</var>"
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>target</code></dt>
  <dd>The name of a platform to compile for.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>&amp;targets</code> store specifies the targets which the compiler will build.</p>

<p>The following targets are available:</p>

<dl>
  <dt><code>any</code></dt>
  <dd>Compile for all platforms</dd>
  <dt><code>windows</code></dt>
  <dd>Build a .kmx file, with Windows support</dd>
  <dt><code>macosx</code></dt>
  <dd>Build a .kmx file, with macOS support</dd>
  <dt><code>linux</code></dt>
  <dd>Build a .kmx file, with Linux support (supported in 11.0 onward)</dd>
  <dt><code>desktop</code></dt>
  <dd>Build a .kmx file, with support for Windows, macOS, and Linux (default if <code>&amp;targets</code> store is not present)</dd>
  <dt><code>web</code></dt>
  <dd>Build a .js file, with KeymanWeb support</dd>
  <dt><code>iphone</code></dt>
  <dd>Build a .js file, with Keyman for iPhone and iPad support</dd>
  <dt><code>ipad</code></dt>
  <dd>Build a .js file, with Keyman for iPhone and iPad support</dd>
  <dt><code>androidphone</code></dt>
  <dd>Build a .js file, with Keyman for Android phone support</dd>
  <dt><code>androidtablet</code></dt>
  <dd>Build a .js file, with Keyman for Android tablet support</dd>
  <dt><code>mobile</code></dt>
  <dd>Build a .js file, with support for any Keyman product on any phone</dd>
  <dt><code>tablet</code></dt>
  <dd>Build a .js file, with support for any Keyman product on any tablet</dd>
</dl>
<br/>

<p>Currently, the compile targets can be broken down into two categories:</p>

<dl>
  <dt>.kmx file</dt>
  <dd>A binary keyboard file installable into desktop platforms (Keyman Desktop, Keyman for macOS, and Keyman for Linux)</dd>
  
  <dt>.js file</dt>
  <dd>A JavaScript keyboard file installable into Keyman Engine for Web, Keyman Engine for Android and Keyman Engine for iOS</dd>
</dl>

<p>The compiler currently makes only these two distinctions, however the <code>&amp;targets</code> store may be used on clients or
as metadata in the future to help narrow down supported platforms for keyboards.</p>

<p>The Keyman Developer 9.0 compiler requires the <code>&amp;targets</code> store to build for touch and web platforms.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_targets" name="Example:_Using_targets">Example: Using <code>&amp;targets</code></h3>

<pre><code>store(&amp;targets) 'any'
</code></pre>

<h2>Platforms</h2>

<p>The <code>&amp;targets</code> store is used on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>linux</code> target was enabled in Keyman 11.0</p>
<p>The documentation for <code>desktop</code> target was corrected from .js to .kmx file in Keyman 10.0</p>
<p>The <code>&amp;targets</code> store was added in Keyman 9.0.</p>
