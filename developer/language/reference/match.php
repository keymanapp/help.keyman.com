<?php
  require_once('includes/template.php');

  head([
    'title' => "match rule"
  ]);
?>

<h1 class="title" id="reference_match">match</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>match</strong></code> rule is fired after any rule is matched and fired in the same group.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>match > ...
</code></pre>

<h2 id="Description" name="Description">Description</h2>

<p>In each group, if Keyman finds a <code>match</code> rule, it will fire it after a rule in the group was matched. 
A match rule can include <a href='use.php'><code>use()</code> statements</a>, <a href='return.php'><code>return</code> statements</a>, 
<a href='beep.php'><code>beep</code> statements</a> and characters.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_match" name="Example:_Using_match">Example: Using <code>match</code></h3>

<pre><code>group(main) using keys

any(vowel) + '^' > context U+0302
match > use(CombineDiacritics)
      
group(CombineDiacritics)

any(vowel) U+0302 > index(vowelWithCircumflex, 1)
</code></pre>

<h2>Platforms</h2>

<p>The <code>match</code> rule can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>
    
<p>The <code>match</code> rule was introduced in Keyman 3.0.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="nomatch" title="nomatch rule"><code>nomatch</code> rule</a></li>
  <li><a href="../guide/groups">Using groups</a></li>
</ul>
