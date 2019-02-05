<?php
  require_once('includes/template.php');

  head([
    'title' => "notany statement"
  ]);
?>

<h1 class="title" id="reference_notany">notany()</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>notany()</strong></code> statement will match any character not in a given store.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>notany(<var>storeName</var>) + ... > ...
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>storeName</code></dt>
  <dd>The name of the store from which a match must be avoided.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>notany()</code> statement will match any character that is not in the <a href="store" title=
"store statement">store</a> referenced by <code><var>storeName</var></code>. The <code>notany()</code> statement is only valid in 
the context part of a rule. It cannot be used with the <a href="index"><code>index()</code></a> statement, but can be used with the 
<a href="context" title="context statement"><code>context</code></a> statement.</p>

<p>The <code>notany()</code> statement does not match when there is no character at that position in the context (e.g. at the start of 
a document). To match this, use the <a href="nul" title="nul statement"><code>nul</code></a> statement.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_notany" name="Example:_Using_notany">Example: Using <code>&amp;notany</code></h3>

<pre><code>notany(punctuation) + any(diacritic) > context(1) index(diacritic,2)
</code></pre>

<h2>Platforms</h2>

<p>The <code>notany()</code> statement can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>
    
<p>Introduced in version 7.0.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="../guide/stores" title="Using Stores">Using stores</a></li>
  <li><a href="notany" title="any() statement"><code>any()</code> statement</li>
  <li><a href="store" title="store() statement"><code>store()</code> statement</li>
</ul>
