<?php
  require_once('includes/template.php');

  head([
    'title' => "index statement"
  ]);
?>

<h1>index()</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>index()</strong></code> statement maps a character from an input store to an output store.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>any(<var>inputStore</var>) > <strong>index</strong>(<var>outputStore</var>,<var>offset</var>)
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>outputStore</code></dt>
  <dd>The store from which the output character is selected. This store should be the same length as the <code><var>inputStore</var></code>.</dd>

  <dt><code>offset</code></dt>
  <dd>The character offset of the <code>any()</code> statement in the left hand side of the rule to pair with, starting at <code>1</code>. The
  index increments for each character or statement found, with one caveat: <code>outs()</code> statements are expanded prior to calculating the
  offset. Note that unlike the <a href='context'><code>context()</code></a> statement, the offset calculation does 
  include <a href='if'><code>if()</code></a> statements.
  </dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code><strong>index()</strong></code> statement works together with <a href='any'><code>any()</code></a> to map an array of characters in <code><var>inputStore</var></code> to a corresponding array in <code><var>outputStore</var></code>. <code><strong>index()</strong></code> can be used in the context and output sections of a rule. If used in the context section, the <code><var>offset</var></code> parameter must be less than the offset of the <code><strong>index()</strong></code> statement in the context.</p>

<p>The stores can include <code>deadkey()</code> statements, <code>outs()</code> statements and virtual keys; the <code>outs()</code> statement is expanded prior to the calculation of offsets within the input and output stores. When a store contains virtual keys, it can be used only with the <code>any()</code> statement in the key part of the rule.</p>

<p>Conceptually, the <code><strong>index()</strong></code> and <code>any()</code> pairing can be expanded into multiple rules, one for each pair of characters. If expanded, this would grow the rule set exponentially when multiple pairs of <code><strong>index()</strong></code> and <code>any()</code> are used in the same rule.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_index" name="Example:_Using_index">Example: Using <code>index()</code></h3>

<p>This example maps a vowel, followed by a diacritic key, to the same vowel, and a corresponding combining diacritic mark.</p>
<pre><code>store(vowel) "aeiou"
store(diacritickey) "`'^"
store(diacritic) U+0300 U+0301 U+0302

any(vowel) + any(diacritic) > index(vowel,1) index(diacriticCombining,2)

c this could also be expressed with the context statement:
any(vowel) + any(diacritic) > context index(diacriticCombining,2)
</code></pre>

<p>This example does the same as the previous, except it reverses the input order: a diacritic mark first, then a vowel, and uses the 
<code><strong>index()</strong></code> statement to swap the results in the output.</p>
<pre><code>store(vowel) "aeiou"
store(diacritickey) "`'^"
store(diacritic) U+0300 U+0301 U+0302

any(diacritic) + any(vowel) > index(vowel,2) index(diacriticCombining,1)
</code></pre>

<p>The following example shows how the index statement can be used in the left hand side of a rule. If a repeating vowel is found, then
this rule puts a circumflex on top of both vowels when <span class='key'>^</span> is pressed.</p>
<pre><code>store(vowel)     "aeiou"
store(vowelcirc) "âêîôû"
any(vowel) index(vowel,1) + "^" > index(vowelcirc,1) index(vowelcirc,2)
</code></pre>

<h2>Platforms</h2>

<p>The <code>index()</code> statement can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code><strong>index()</strong></code> statement was introduced in Keyman 3.0. As of version 6.0, it can also be used in the left-hand side of a rule.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="../guide/stores.php" title="Using Stores">Using stores</a></li>
  <li><a href="any.php" title="any() statement"><code>any()</code> statement</li>
  <li><a href="context.php" title="context statement"><code>context</code> statement</li>
  <li><a href="store.php" title="store() statement"><code>store()</code> statement</li>
</ul>
