<?php
  require_once('includes/template.php');

  head([
    'title' => "set() statement"
  ]);
?>

<h1 class="title" id="reference_set">set()</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>set()</strong></code> statement changes the value of a variable store.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>... > set(<var>StoreName</var> = <var>value</var>)
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>storeName</code></dt>
  <dd>The name of the variable store to be updated.</dd>
  
  <dt><code>value</code></dt>
  <dd>A string value or the name of another store to retrieve a value from.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>set()</code> statement allows the content of a store to be changed dynamically, either to a string value or to the 
content of another store, during use of the keyboard. Changing store content while using one application will change it for all 
applications until Keyman is closed or the keyboard is uninstalled. If you want to make the changed store content permanent, 
to become the default content when restarting Keyman, the <code>set()</code> statement should be followed by a 
<a href='save.php'><code>save()</code> statement</a>.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_set" name="Example:_Using_set">Example: Using <code>set()</code></h3>

<pre><code>store(opt1) '0'
+ [CTRL ALT K_1] > set(opt1='1') 
+ [CTRL ALT K_2] > set(opt1='2') 
</code></pre>

<h2>Platforms</h2>

<p>The <code>set()</code> statement can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>set()</code> statement was introduced in Keyman 8.0.</p>
<p>Keyman for macOS 11.0.221 added support for <code>if()</code>, <code>set()</code>, <code>save()</code> and <code>reset()</code> for variable stores.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="../guide/variable-stores" title="Using variable system stores">Using variable system stores</a></li>
  <li><a href="if" title="if() statement"><code>if()</code> statement</li>
  <li><a href="reset" title="reset() statement"><code>reset()</code> statement</li>
  <li><a href="save" title="save() statement"><code>save()</code> statement</li>
  <li><a href="store" title="store() statement"><code>store()</code> statement</li>
</ul>
  
