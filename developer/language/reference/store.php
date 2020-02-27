<?php
  require_once('includes/template.php');

  head([
    'title' => "store statement"
  ]);
?>

<h1 class="title" id="reference_store">store()</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>store()</strong></code> statement defines a store.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(<var>storeName</var>) <var>value</var>
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>storeName</code></dt>
  <dd>The name of the store to be defined.</dd>
  
  <dt><code>value</code></dt>
  <dd>An extended string value.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>store()</code> statement lets you store a string of characters or keys in a buffer for use elsewhere in the keyboard
source file. The <code>store()</code> statement can be used with <a href='any'><code>any()</code></a> and <a href='index'><code>index()</code></a> to reduce
sets of similar rules down to a single rule. A store is terminated at the end of the line (or continuation
lines). Stores can contain characters, <a href='../guide/virtual-keys'>virtual keys</a>, 
<a href='deadkey'><code>deadkey()</code> statements</a>, and <a href='outs'><code>outs()</code> statements</a>.</p>

<p>There are several types of stores. The store type is determined by a set of requirements.</p>

<dl>
  <dt>System stores</dt>
  <dd>A system store has a name prefixed with <code>&amp;</code>. The <code>&amp;</code> prefix is reserved and cannot be used for
  other types of stores. See the <a href='_keywordsbytype'>Keywords index</a> for a list of system stores.</dd>
  
  <dt>Variable stores</dt>
  <dd>Variable stores, sometimes also known as option stores, can be used with the <a href='if'><code>if()</code></a>, 
  <a href='set'><code>set()</code></a>, <a href='save'><code>save()</code></a>, and <a href='reset'><code>reset()</code></a>
  statements to control <a href='../guide/variable-stores'>keyboard variables</a>.</dd>
  
  <dt>IMX definition stores</dt>
  <dd>These are used with the <a href='call'><code>call()</code> statement</a> to define external functions for the keyboard to call.</dd>
  
  <dt>Standard stores</dt>
  <dd>All other stores are standard stores, and can be used with <a href='any'><code>any()</code></a>,
  <a href='index'><code>index()</code></a> and <a href='outs'><code>outs()</code></a> statements.</dd>
</dl>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_standard_stores" name="Example:_Using_standard_stores">Example: Using standard stores</h3>

<pre><code>store(vowelKey) 'aeiou'
store(vowel) 'αειου'

+ any(vowelKey) > index(vowel, 1)
</code></pre>

<h3 id="Example:_Using_system_stores" name="Example:_Using_system_stores">Example: Using system stores</h3>

<pre><code>store(&amp;name) 'My Greek Keyboard'
store(&amp;version) '9.0'
</code></pre>

<h3 id="Example:_Using_variable_stores" name="Example:_Using_variable_stores">Example: Using variable stores</h3>

<pre><code>store(opt1) '0'

+ [CTRL ALT K_1] > set(opt1='1') save(opt1)
+ [CTRL ALT K_0] > set(opt1='0') save(opt0)
</code></pre>



<h2>Platforms</h2>

<p>The <code>store()</code> statement can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>store()</code> statement was introduced in Keyman 3.0.</p>
<p>Version 5.0 added system stores and IMX definition stores.</p>
<p>Version 6.0 added <code>deadkey()</code> and virtual key support within stores.</p>
<p>Version 8.0 added variable stores.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="../guide/stores" title="Using stores">Using stores</a></li>
  <li><a href="../guide/variable-stores" title="Using variable system stores">Using variable system stores</a></li>
  <li><a href="any" title="any() statement"><code>any()</code> statement</a></li>
  <li><a href="call" title="call() statement"><code>call()</code> statement</a></li>
  <li><a href="if" title="if() statement"><code>if()</code> statement</a></li>
  <li><a href="index" title="index() statement"><code>index()</code> statement</a></li>
  <li><a href="outs" title="outs() statement"><code>outs()</code> statement</a></li>
  <li><a href="reset" title="reset() statement"><code>reset()</code> statement</a></li>
  <li><a href="save" title="save() statement"><code>save()</code> statement</a></li>
  <li><a href="store" title="store() statement"><code>store()</code> statement</a></li>
</ul>
