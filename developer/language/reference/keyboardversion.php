<?php
  require_once('includes/template.php');

  head([
    'title' => "&amp;keyboardversion store"
  ]);
?>

<h1 class="title" id="reference_keyboardversion">&amp;keyboardversion</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;keyboardversion</strong></code> store documents the version of the keyboard.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(&amp;keyboardversion) "<var>version</var>"
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>version</code></dt>
  <dd>The version of the keyboard, in a dotted numeric format. For example, <code>2.0</code> is a higher version than <code>1.11</code>, which is a higher version than <code>1.9.3</code>.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>&amp;keyboardversion</code> store documents the version of the keyboard. Keyman uses this on touch platforms
to check for updated versions of the keyboard and update them automatically. </p>

<p>The version string should match as far as possible the package version string, when a keyboard is included in a package.</p>

<p>Note the difference between <code>&amp;keyboardversion</code>, which documents the keyboard version, and <a href='version.php'><code>&amp;version</code></a>, which determines which version of Keyman a keyboard
will run with.</p>

<p>A keyboard version should be updated whenever there are changes to a keyboard. A good principle to follow is to increment the major version number for a keyboard that has significant
new functionality, to increment the minor version number for changes that impact functionality but not in a significant manner, and optionally to use a third number for bug fixes.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_keyboardversion" name="Example:_Using_keyboardversion">Example: Using <code>&amp;keyboardversion</code></h3>

<pre><code>store(&amp;keyboardversion) '1.1.2'
</code></pre>

<h2>Platforms</h2>

<p>The <code>&amp;keyboardversion</code> store can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>&amp;keyboardversion</code> store was added in Keyman 9.0.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="version" title="&amp;version store"><code>&amp;version</code> store</a></li>
</ul>