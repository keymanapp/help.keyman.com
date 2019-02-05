<?php
  require_once('includes/template.php');

  head([
    'title' => "&amp;windowslanguages store"
  ]);
?>

<h1 class="title" id="reference_windowslanguages">&amp;windowslanguages</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;windowslanguages</strong></code> store specifies a list of alternate languages that
a Keyman keyboard works with in Windows.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(&amp;windowslanguages) "<var>code [code ...]</var>"
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>code</code></dt>
  <dd>The identifier of the language to reference. This can be specified as a single number, hexadecimal, for the Windows
  <code>LANGID</code> format.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>&amp;windowslanguages</code> store specifies additional Windows system languages that a keyboard may be associated with. 
It is not used on other platforms, which instead use the <a href='ethnologuecode.php'><code>&amp;ethnologuecode</code> store</a>.</p>

<p><a class="ulink" href="http://msdn2.microsoft.com/en-us/library/ms776294.aspx" target="_blank">Microsoft language identifier
reference</a></p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_windowslanguages" name="Example:_Using_windowslanguages">Example: Using <code>&amp;windowslanguages</code></h3>

<pre><code>store(&amp;windowslanguages) 'x0409 x0809'
</code></pre>

<h2>Platforms</h2>

<p>The <code>&amp;windowslanguages</code> store is used only in Windows platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✘</td><td>✘</td><td>✘</td><td>✘</td><td>✘</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>Keyman 10.0: The <code>&amp;windowslanguages</code> store was deprecated.</p>
<p>The <code>&amp;windowslanguages</code> store was added in Keyman 8.0.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="language.php" title="&amp;language store"><code>&amp;language</code> store</a></li>
</ul>