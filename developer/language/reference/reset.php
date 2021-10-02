<?php
  require_once('includes/template.php');

  head([
    'title' => "reset statement"
  ]);
?>

<h1 class="title" id="reference_reset">reset()</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>reset()</strong></code> statement restores a variable store to its original value.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>... > reset(<var>StoreName</var>)
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>storeName</code></dt>
  <dd>The name of the variable store to be reset to its original value.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>reset()</code> statement is used on the right hand (output) side of a rule to restore a variable to the
current default value - either the store content as defined in the keyboard source file, or the value persisted previously
in the system settings by <a href='save.php'><code>save()</code></a> or by the keyboard configuration dialog.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_reset" name="Example:_Using_reset">Example: Using <code>reset()</code></h3>

<pre><code>store(opt1) '1'
+ [CTRL ALT K_0] > reset(opt1)
</code></pre>

<h2>Platforms</h2>

<p>The <code>reset()</code> statement can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>reset()</code> statement was introduced in Keyman 8.0.</p>
<p>Keyman for macOS 11.0.221 added support for <code>if()</code>, <code>set()</code>, <code>save()</code> and <code>reset()</code> for variable stores.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="../guide/variable-stores" title="Using variable stores">Using variable stores</a></li>
  <li><a href="if" title="if() statement"><code>if()</code> statement</li>
  <li><a href="save" title="save() statement"><code>save()</code> statement</li>
  <li><a href="set" title="set() statement"><code>set()</code> statement</li>
  <li><a href="store" title="store() statement"><code>store()</code> statement</li>
</ul>

