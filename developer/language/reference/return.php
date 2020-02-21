<?php
  require_once('includes/template.php');

  head([
    'title' => "return statement"
  ]);
?>

<h1 class="title" id="reference_return">return</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>return</strong></code> statement stops processing rules for the current keystroke event.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>... > return
</code></pre>


<h2 id="Description" name="Description">Description</h2>


<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_return" name="Example:_Using_return">Example: Using <code>return</code></h3>

<p>The <code>return</code> statement tells Keyman to stop processing rules and wait for the next keystroke event. 
Keyman will immediately return control to the user, and will not process other groups in the call stack, so this 
will skip <a href='match.php'><code>match</code> rules</a>, for example.</p>

<pre><code>nomatch > return
</code></pre>

<h2>Platforms</h2>

<p>The <code>return</code> statement is supported only on desktop keyboards.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✘</td><td>✘</td><td>✘</td><td>✘</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The <code>return</code> statement was introduced in Keyman 3.0.</p>
