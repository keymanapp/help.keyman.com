<?php
  require_once('includes/template.php');

  head([
    'title' => "nomatch rule"
  ]);
?>

<h1 class="title" id="reference_nomatch">nomatch</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>nomatch</strong></code> rule is fired if no other rule is matched or fired in the same group, with some caveats.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>nomatch > ...
</code></pre>

<h2 id="Description" name="Description">Description</h2>

<p><code>nomatch</code> is similar to the <a href='match.php'><code>match</code> rule</a>, but instead of the rule being fired 
when a rule was matched, it will be used when no rule is matched in the group. A <code>nomatch</code> rule can 
include <a href='use.php'><code>use()</code> statements</a>, <a href='return.php'><code>return</code> statements</a>, 
<a href='beep.php'><code>beep</code> statements</a> and characters.</p>

<p>Caveat: <code>nomatch</code> will not be fired in a <code>using keys</code> group if the current keystroke does not produce a character 
in normal use (for example, modified keys, function keys). This is by design, and is intended to ensure that function keys,
and modified keys such as Ctrl+X, were passed through to the underlying application.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_nomatch" name="Example:_Using_nomatch">Example: Using <code>nomatch</code></h3>

<pre><code>begin > use(constraints)
group(constraints) using keys

c Block two diacritics on one vowel
any(vowel) any(diacritic) + any(diacriticKey) > context beep
nomatch > use(main)

group(main) using keys

+ any(diacriticKey) > index(diacritic, 1)
</code></pre>

<h2>Platforms</h2>

<p>The <code>nomatch</code> rule can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>
    
<p>The <code>nomatch</code> rule was introduced in Keyman 3.0.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="match" title="match rule"><code>match</code> rule</a></li>
  <li><a href="../guide/groups">Using groups</a></li>
</ul>
