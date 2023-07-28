<?php
  require_once('includes/template.php');

  head([
    'title' => "&amp;language store"
  ]);
?>

<h1 class="title" id="reference_language">&amp;language</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;language</strong></code> store specifies the Windows system language that a keyboard should
  be associated with on install. </p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(&amp;language) "<var>langcode</var>"
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>langcode</code></dt>
  <dd>The Windows language ID to associate the keyboard with on install. This can be specified as a single number, hexadecimal, for the Windows
  <code>LANGID</code> format, or as a pair of numbers separated by comma, for the Windows <code>PRILANGID, SUBLANGID</code> format.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>&amp;language</code> store specifies the Windows system language that a keyboard should be associated with. It is not used on
other platforms, which previously used the <a href='ethnologuecode.php'><code>&amp;ethnologuecode</code> store</a>.</p>

<p>If the specified language is available on the user's system, Keyman
Desktop will install it and register an input method for that language. The Keyman Desktop keyboard will then be
activated whenever the language is selected using Windows' language selector in the task bar.</p>

<p>The <code>LANGUAGE</code> statement and the <code>&amp;language</code> store are deprecated, and the Keyboard Package
  <a href="/developer/current-version/reference/file-types/metadata#obj-language">metadata</a> should be used to define the language data instead.</p>

<p><a class="ulink" href="http://msdn2.microsoft.com/en-us/library/ms776294.aspx" target="_blank">Microsoft language identifier
reference</a></p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_language" name="Example:_Using_language">Example: Using <code>&amp;language</code></h3>

<pre><code>store(&amp;language) "x401"  c Use this keyboard with the Arabic locale
</code></pre>

<pre><code>store(&amp;language) "9, 1"  c Use this keyboard with the US English locale
</code></pre>

<h2>Version history</h2>

<p>Keyman 10.0: The <code>&amp;language</code> store was deprecated.</p>
<p>In Keyman 8.0, the language association is used in editions of Keyman.</p>
<p>Keyman 7.0: Added support for single value <code>LANGID</code> format.</p>
<p>In Keyman 7.0, the <code>&amp;language</code> store was used only by Professional Edition.</p>
<p>Keyman 5.0: Added <code>&amp;language</code> store and deprecated <code>LANGUAGE</code> statement.</p>
<p>The <code>LANGUAGE</code> statement was introduced in Keyman 4.0.</p>

<h2>Platforms</h2>

<p>The <code>&amp;language</code> store is used on the following platforms. It will be ignored on all other platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✘</td><td>✘</td><td>✘</td><td>✘</td><td>✘</td><td>✘</td></tr>
  </tbody>
</table>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="ethnologuecode" title="&amp;ethnologuecode"><code>&amp;ethnologuecode</code> store</a></li>
  <li><a href="windowslanguages" title="&amp;windowslanguages"><code>&amp;windowslanguages</code> store</a></li>
</ul>