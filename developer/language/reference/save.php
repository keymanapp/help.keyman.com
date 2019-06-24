<?php
  require_once('includes/template.php');

  head([
    'title' => "save() statement"
  ]);
?>

<h1 class="title" id="reference_save">save()</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>save()</strong></code> statement persists a variable store for future sessions.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>... > save(<var>StoreName</var>)
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>storeName</code></dt>
  <dd>The name of the variable store to be persisted.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>save()</code> statement is used on the right hand (output) side of a rule to save a current variable store value 
to the system settings. This variable store value will then become the default variable value for future use. It will typically 
be used after a <a href='set'><code>set()</code> statement</a> to make the dynamically changed option value change permanent.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_save" name="Example:_Using_save">Example: Using <code>save()</code></h3>

<pre><code>store(opt1) '0'  c Default value on install  

+ [CTRL ALT "1"] > set(opt1='1') save(opt1)  c new value now saved to system settings
</code></pre>


<h2>Platforms</h2>

<p>The <code>save()</code> statement can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>save()</code> statement was introduced in Keyman 8.0.</p>
<p>Keyman for macOS 11.0.221 added support for `if()`, `set()`, `save()` and `reset()` for variable stores.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="../guide/variable-stores" title="Using variable system stores">Using variable system stores</a></li>
  <li><a href="if" title="if() statement"><code>if()</code> statement</li>
  <li><a href="reset" title="reset() statement"><code>reset()</code> statement</li>
  <li><a href="set" title="set() statement"><code>set()</code> statement</li>
  <li><a href="store" title="store() statement"><code>store()</code> statement</li>
</ul>
  
