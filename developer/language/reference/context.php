<?php
  require_once('includes/template.php');

  head([
    'title' => "context statement"
  ]);
?>

<h1 class="title" id="reference_context">context</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>context</strong></code> statement reproduces part or all of the context buffer.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>... > context
... > context(<var>offset</var>)
... context(<var>offset</var>) > ...
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>offset</code></dt>
  <dd>The character offset in the context from which the output character is selected, starting at <code>1</code>. The
  index increments for each character or statement found, with two caveats:
  <ul>
    <li>
      <a href='outs'><code>outs()</code></a> statements are expanded prior to calculating the
      offset.
    </li>
    <li>
      <a href='if'><code>if()</code></a> statements are not included in the calculation of the offset,
      which is different to how <a href='index'><code>index()</code></a> statements calculate offset.
    </li>
  </ul>
  This offset must be less than the offset of the <code>context()</code> statement itself, if the <code>context()</code> statement is in the
  context (third form above).</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>context</code> statement reproduces the context stored from the rule match, or a single character of it, into the output. Use the
<code>context</code> statement as much as possible as it is significantly faster than using the index statement.</p>

<p>A single character from the context can be output (on the right-hand side of a rule) or matched (on the left-hand side of a rule)
using the <code>context()</code> form.</p>

<p>Note that although the <code>context()</code> form can be used in the left-hand side of a rule, the <code>context</code> form cannot.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_context" name="Example:_Using_context">Example: Using <code>context</code></h3>

<pre><code>any(cons) "W" + any(key) > context index(keyout,3)
"contex" + "t" > context(2) context(6)     c outputs "ox"
</code></pre>

<h2>Platforms</h2>

<p>The <code>context</code> statement can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>Support for <a href='notany'><code>notany()</code></a> together with <code>context()</code> added in KeymanWeb 14.0.</p>
<p>The context(n) form was introduced in version 6.0.</p>
<p>The context statement was introduced in Keyman 3.0.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="if" title="if() statement"><code>if()</code> statement</li>
  <li><a href="outs" title="outs() statement"><code>outs()</code> statement</li>
</ul>
