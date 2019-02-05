<?php
  require_once('includes/template.php');

  head([
    'title' => "nul statement"
  ]);
?>

<h1 class="title" id="reference_nul">nul</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>nul</strong></code> statement has two purposes: in the output of a rule, it signifies deleting context and keystroke, and at the start of the context 
it signifies that the context buffer in the application must be empty (or no longer than the context of the rule) in order for the rule to match.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre class="language-keyman"><code><strong>nul</strong> [<var>...</var>] [+ <var>key</var>] > <var>output</var>
[<var>...</var>] [+ <var>key</var>] > <strong>nul</strong>
</code></pre>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>nul</code> statement will delete the context and key on the left hand side of the rule from the output; it is equivalent to having an
empty output (which is not allowed). The <code>nul</code> statement probably will not be used often, because there are not many times you would want
to delete the context and keystroke. The <code>nul</code> command must be the only character or command on the right hand side of the rule.</p>

<p><code>nul</code> can be used in the context in one special situation. It is used at the start of the context to tell Keyman to find a match only
if the <code>nul</code> statement is before the start of the context buffer. For example, you may use this to test if the user is typing a
character at the start of a paragraph, and use a different character in this situation.</p>

<p>Be careful when using <code>nul</code> in the context. In legacy environments, such as many Windows applications, the context buffer will be
empty after cursor movement, menu access, or many other situations. This means that the <code>nul</code> keyword may match in situations where
you are not expecting it, for example in the middle of a word.</p>

<p>In modern environments, such as touch devices, web keyboards, macOS, and some modern Windows applications, the <code>nul</code> keyword will 
match at the start of a text buffer, and nowhere else. For example, in Microsoft Word, it will match at the start of the document, after a page, 
column or section break, at the start of a header or footer, at the start of a table cell and other similar situations.</p>

<aside>
  <h2>Note</h2>
  <p>If the context in a rule has both an <a href='if'><code>if()</code> statement</a> and a <code>nul</code> statement, then the <code>nul</code>
  statement must come first.</p>
</aside>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_nul" name="Example:_Using_nul">Example: Using <code>nul</code> on the right hand side of the context</h3>

<p>This example will delete a visible Malayalam virama when <span class='key'>a</span> is typed.</p>

<pre class="language-keyman"><code>U+0D4D + 'a' > nul
</code></pre>

<h3 id="Example:_Using_nul" name="Example:_Using_nul">Example: Using <code>nul</code> on the right hand side of the context</h3>

<p>This example will capitalize a letter at the start of a buffer (hint: this not really recommended!)</p>

<pre class="language-keyman"><code>nul + 'a' > 'A'
</code></pre>

<h2>Platforms</h2>

<p>The <code>nul</code> statement can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>nul</code> statement was introduced in Keyman 3.0.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="context.php" title="context statement"><code>context</code> statement</li>
</ul>
