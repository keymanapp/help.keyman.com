<?php
  require_once('includes/template.php');

  head([
    'title' => "&amp;layer store"
  ]);
?>

<h1 class="title" id="reference_layer">&amp;layer</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>&amp;layer</strong></code> system variable store can be used to set or test the current
layer on the touch keyboard.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>if(&amp;layer = "<var>layerName</var>") ... > ...
... > ... layer("<var>layerName</var>")
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>layerName</code></dt>
  <dd>The name of the layer in the touch layout (associated with the keyboard) to compare against or to switch to.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>&amp;layer</code> store is used to test and set the current layer of the keyboard from the keyboard code.
Some layer controls can also be made directly in the touch layout itself with the <strong>Next Layer</strong> control, but
the <code>&amp;layer</code> store provides for finer control.</p>

<p>When a key in a touch layout definition includes a <strong>Next Layer</strong> control, this takes precedence over 
setting layer via the <code>layer</code> store (as the <strong>Next Layer</strong> control is applied once the rule
has finished processing).</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_layer" name="Example:_Using_layer">Example: Using <code>&amp;layer</code></h3>

<pre><code>if(&amp;layer = 'default') + 'a' > 'α'
+ 'b' > 'β' layer('shift')
</code></pre>

<h2>Platforms</h2>

<p>The <code>&amp;layer</code> store is used in touch platforms. It is ignored on all other platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✘</td><td>✘</td><td>✘</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>&amp;layer</code> store was added in Keyman 9.0.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="/developer/9.0/guides/develop/">Designing touch layouts with Keyman Developer</a></li>
  <li><a href="layoutfile" title="&amp;layoutfile store"><code>&amp;layoutfile</code> store</a></li>
</ul>