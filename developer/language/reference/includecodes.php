<?php
  require_once('includes/template.php');

  head([
    'title' => "&amp;includecodes system store"
  ]);
?>

<h1 class="title" id="reference_includecodes">&amp;includecodes</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;includecodes</strong></code> store imports an external file of 
character constants.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(&amp;includecodes) "<var>filename</var>"
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>filename</code></dt>
  <dd>The file to import, relative to keyboard source path.</dd>
</dl>

<h2>Description</h2>

<p>The <code>&amp;includecodes</code> store allows you to reference an external file 
for <a class="link" href="../guide/constants" title="Named Constants">named character constants</a>. Keyman Developer includes 
unicodedata.txt, which lists all the named Unicode characters - in version 9.0, it includes all
the Unicode 8.0 characters.</p>

<p>The file format is based on unicodedata.txt. Fields are delimited by semicolon (;) and only the first two fields are used by Keyman
Developer.</p>

<p>Constants referenced in the file can be used with the <code>$</code> prefix in your keyboard source.</p>

<pre class="language-none"><code>####;CONSTANT_NAME;additional data
</code></pre>

<dl>
  <dt><code>####</code></dt>
  <dd>A 4-6 digit Unicode character value, e.g. 0061, for 'a'</dd>
  
  <dt><code>CONSTANT_NAME</code></dt>
  <dd>A case insensitive name. Characters allowed are <code>A-Z</code>, <code>0-9</code>, space and
    underscore (<code>_</code>). Note that space will be converted to underscore (<code>_</code>) by 
    Keyman Developer when the file is imported.</p>

  <dt><code>additional data</code></dt>
  <dd>Ignored by Keyman Developer.</dd>
</dl>

<h2>Example</h2>

<p>The following example shows an inline constant.</p>

<pre><code>store(CCedilla) U+00E7
+ [RALT K_C] > $CCedilla
</code></pre>

<p>The same inline constant can be placed in a separate text file:</p>

<pre class="language-none"><code>00E7;CCEDILLA
</code></pre>

<p>This file is then referenced in the keyboard source:</p>
<pre><code>store(&amp;includecodes) "codes.txt"
+ [RALT K_C] > $CCedilla
</code></pre>

<h2>Platforms</h2>

<p>The <code>&amp;includecodes</code> store can be used in keyboards for all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>
    
<p>The &amp;includecodes statement was introduced in Keyman 5.0.</p>
