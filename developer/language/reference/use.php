<?php
  require_once('includes/template.php');

  head([
    'title' => "use statement"
  ]);
?>

<h1 class="title" id="reference_use">use()</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>use()</strong></code> statement transfers control to another group.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>begin > use(<var>groupName</var>) 
... > use(<var>groupName</var>)
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>groupName</code></dt>
  <dd>The name of the group to transfer control to.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>use()</code> statement tells Keyman to switch processing to a new group; after Keyman has gone through the new group, and any other
nested groups, it will return to the previous one. The <code>use()</code> statement can be used with the
<a href='match'><code>match</code></a> and <a href='nomatch'><code>nomatch</code></a> rules; it will work the same way.</p>

<p>The current output is moved to the context before the new group is entered, so the new group will see the output from the fired rule
as its context. This means that the context is no longer consistent once control returns to the rule with the <code>use()</code> statement,
so no <a href='context'><code>context</code></a> or <a href='index'><code>index()</code></a> statements should be used after a
<code>use()</code> statement in a rule.</p>


<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_use" name="Example:_Using_use">Example: Using <code>use()</code></h3>

<pre><code>any(Vowel) + any(DiacriticKey) > context index(Diacritic, 2) use(AdjustVowels)

group(AdjustVowels)
any(Vowel) U+0300 > index(VowelWithGrave, 1)
</code></pre>

<h2>Platforms</h2>

<p>The <code>use()</code> statement can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>use()</code> statement was introduced in Keyman 3.0.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="../guide/groups" title="Using groups">Using groups</a></li>
  <li><a href="group" title="group() statement"><code>group()</code> statement</a></li>
</ul>
