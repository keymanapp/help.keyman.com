<?php
  require_once('includes/template.php');

  head([
    'title' => "if statement"
  ]);
?>

<h1 class="title" id="reference_if">if()</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>if()</strong></code> statement allows a rule to be applied conditionally on the basis of the content of a variable store.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>if(<var>storeName</var> <var>comparison</var> <var>store2</var>) ... > ...
if(<var>storeName</var> <var>comparison</var> <var>constant</var>) ... > ...
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>storeName</code></dt>
  <dd>The variable store to test.</dd>

  <dt><code>comparison</code></dt>
  <dd>Either <code>=</code> or <code>!=</code>, for equal and not equal, respectively.</dd>
</dl>

<h2>Description</h2>

<p>The <code>if()</code> statement allows any rule to be applied conditionally, depending on the content of store <code><var>storeName</var></code>, which can be defined either
during keyboard configuration or dynamically by using a <code>set()</code> statement. The content of <code><var>storeName</var></code> is tested to see whether it matches
(or does not match) a string or the content of another store, and the following rule used or ignored accordingly.</p>

<p>A variable store (used in an <code>if()</code>, <code>set()</code>, <code>save()</code> or <code>reset()</code> statement) should not also be used to match context or key, or output in a rule. 
(Note: this advice has changed from previous versions of Keyman. The compiler will warn on this misuse.)</p>

<h2>Example</h2>

<pre><code>if(opt1 = '1') + any(letterGroup1) > index(outputGroup1,2)
</code></pre>

<p>The rule to output a character from the <code>outputGroup1</code> store according to a keystroke matching a character in store <code>letterGroup1</code> will
only be applied if the content of store <code>opt1</code> is exactly equal to the string '1'.</p>

<p>Where two or more separate options are held in stores, the different options can be tested together (logical "AND"):</p>

<pre><code>if(opt1 = '1') if(opt2 = '1') + any(letterGroup1) > index(outputGroup1,3)
</code></pre>

<p>or separately (logical "OR"):</p>

<pre><code>if(opt1 = '1') + any(letterGroup1) > index(outputGroup1,2) 
if(opt2 = '1') + any(letterGroup1) > index(outputGroup1,2)
</code></pre>

<h2>Platforms</h2>

<p>The <code>if()</code> statement can be used in keyboards on the following platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>if()</code> statement was introduced in Keyman 8.0.</p>
<p>Keyman 9.0: Added support for variable system stores.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="../guide/variable-stores" title="Using variable system stores">Using variable system stores</a></li>
  <li><a href="reset" title="reset() statement"><code>reset()</code> statement</li>
  <li><a href="save" title="save() statement"><code>save()</code> statement</li>
  <li><a href="set" title="set() statement"><code>set()</code> statement</li>
  <li><a href="store" title="store() statement"><code>store()</code> statement</li>
</ul>
  