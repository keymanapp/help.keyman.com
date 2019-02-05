<?php
  require_once('includes/template.php');

  head([
    'title' => "&amp;version store"
  ]);
?>

<h1 class="title" id="reference_version">&amp;version</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;version</strong></code> store determines the Keyman version which the keyboard will target.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(&amp;version) "<var>version</var>"
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>version</code></dt>
  <dd>The version of Keyman to target. This can be <code>5.0</code>, <code>6.0</code>, <code>7.0</code>,
    <code>8.0</code> or <code>9.0</code>.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>&amp;version</code> store allows Keyman to easily distinguish what version of Keyman the keyboard was
written for and handle it accordingly. The <code>&amp;version</code> store is required. For new keyboards, use 
<code>9.0</code> as the version number.</p>

<p>The keyboard version is used by Keyman Desktop for Windows. Versioning on other platforms generally matches the
current 9.0 feature set.</p>

<p>The <code>VERSION</code> statement is deprecated, instead use the <code>&amp;version</code> store.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_version" name="Example:_Using_version">Example: Using <code>&amp;version</code></h3>

<pre><code>store(&amp;version) '9.0'
</code></pre>

<h2>Platforms</h2>

<p>The <code>&amp;version</code> store can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>VERSION</code> statement was introduced in Keyman 3.0.</p>
<p>The <code>&amp;version</code> store was added in Keyman 5.0.</p>
<p>Each subsequent version of Keyman updates the maximum store value accordingly to its major version.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="keyboardversion.php" title="&amp;keyboardversion store"><code>&amp;keyboardversion</code> store</a></li>
</ul>