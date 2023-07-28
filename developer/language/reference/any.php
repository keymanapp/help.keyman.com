<?php
  require_once('includes/template.php');

  head([
    'title' => "any statement"
  ]);
?>

<h1 class="title" id="reference_any">any()</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>any()</strong></code> statement matches a character from an input store.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>any(<var>inputStore</var>)
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>inputStore</code></dt>
  <dd>A store from which the current character in the context or key part of the rule must be matched.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code><strong>any()</strong></code> statement will match any character that is in the store <code><var>inputStore</var></code>. This
statement is only valid on the left side of a rule; the <a href='_index'><code>index()</code> statement</a> is used to match again or
output the character matched by the <code>any()</code> statement in the output. The <code>any()</code> statement remembers the offset in the store
where the match occurred for later use with the <code>index()</code> statement.</p>

<p>Note that <a href='outs'><code>outs()</code> statements</a> are expanded in stores, so the character offset match is on the fully expanded version
of the store. Other specials, such as deadkeys or virtual keys, are only a single character wide when measuring offset.</p>

<h2>Examples</h2>

<pre><code>store(keys) 'abcde'
store(output) 'αβγδε'
+ any(keys) > index(output,1)
</code></pre>

<h2>Platforms</h2>

<p>The <code>any()</code> statement can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>any()</code> keyword was introduced in Keyman 3.0.</p>
<p>Keyman 6.0 added support for deadkeys and virtual keys in stores</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="../guide/stores" title="Using Stores">Using stores</a></li>
  <li><a href="_index" title="index() statement"><code>index()</code> statement</li>
  <li><a href="notany" title="notany() statement"><code>notany()</code> statement</li>
  <li><a href="store" title="store() statement"><code>store()</code> statement</li>
</ul>
