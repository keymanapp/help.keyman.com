<?php
  require_once('includes/template.php');

  head([
    'title' => "outs statement"
  ]);
?>

<h1 class="title" id="reference_outs">outs()</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>outs()</strong></code> statement emits the contents of a given store to the current point in the program source.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>store(<var>store1</var>) ... outs(<var>storeName</var>) ...
... outs(<var>storeName</var>) ... + ... >  ... 
... > ... outs(<var>storeName</var>) ...
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>storeName</code></dt>
  <dd>The name of the store to be emitted.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>outs()</code> statement simply copies the store <code><var>storeName</var></code> into the position in which it 
has been inserted. This can be used in stores, in the context and the output. If the store to be emitted is a single character
or virtual key, it can also be used in the key part of the rule.</p>

<p>If a store is a single character, it can also be emitted using the <a href='../guide/constants'>named constants</a> prefix <code>$</code>,
for example <code>$aleph</code>.

<p>When using <code>outs()</code> in the context, the characters in the store are included in offset counts.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_outs" name="Example:_Using_outs">Example: Using <code>outs()</code></h3>

<pre><code>store(conskeys)  "BCDFGHJKLMNPQRSTVWXYZ"
store(cons)      "bcdfghjklmnpqrstvwxyz"
store(vowelkeys) "AEIOU"
store(vowels)    "aeiou"
store(allkeys) outs(conskeys) outs(vowelkeys)
store(letters) outs(cons) outs(vowels)

c using outs in the context

outs(vowels) + any(conskeys) > context index(cons, 6)  
</code></pre>

<h2>Platforms</h2>

<p>The <code>outs()</code> statement can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>outs()</code> statement was introduced in Keyman 3.0.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="../guide/stores" title="Using Stores">Using stores</a></li>
  <li><a href="../guide/constants" title="Named constants">Named constants</a></li>
</ul>
