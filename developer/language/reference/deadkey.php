<?php
  require_once('includes/template.php');

  head([
    'title' => "deadkey statement"
  ]);
?>

<h1 class="title" id="reference_deadkey">deadkey</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>deadkey()</strong></code> emits a invisible placeholder in the output, or matches an invisible placeholder in the context.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre class="language-keyman"><code>deadkey(<var>deadkeyName</var>) + ... > ...
... > deadkey(<var>deadkeyName</var>)

dk(<var>deadkeyName</var>) + ... > ...
... > dk(<var>deadkeyName</var>)
</code></pre>

<h3 id="Parameters" name="Parameters">Parameters</h3>

<dl>
  <dt><code>deadkeyName</code></dt>
  <dd>A unique name for the deadkey.</dd>
</dl>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>deadkey()</code> or <code>dk()</code> statement lets you program an invisible placeholder variable into the output of a rule, which can then be 
matched by future rules. The deadkey will be processed by Keyman as if it were a normal character, but it is not output onto the screen, instead being
stored internally in the context. A keyboard has a limit of 65,534 unique deadkeys.</p>

<p>While Keyman deadkeys arose from the concept of deadkeys in Windows, they are considerably more flexible. A deadkey in context will not be ignored
by the keyboard rule matching algorithm, and multiple deadkeys can be present at one time.</p>

<p>Deadkeys are however ephemeral. When the user moves to another text field or uses the mouse or cursor keys to navigate in the current text field,
the deadkey buffer will be reset. While this may seem unhelpful at first, it in fact provides a more consistent experience for the end user, as editing
seemingly identical pieces of text will not result in differing behaviour.</p>

<p>The <a href='set.php'><code>set()</code> statement</a> can be used to control persistent variables in a keyboard.</p>

<p>Note: While Keyman supports consecutive deadkeys between two real characters, as of build 2.0.390, KeymanWeb does not. This may be addressed in a future version.</p>

<p>Deadkeys can be used in stores and matched with <a href='any.php'><code>any()</code></a> and output with <a href='_index.php'><code>index()</code></a>.</p>

<p>Any deadkeys inserted by another rule immediately before or after the character to the left of the insertion point will be deleted
when backspace is pressed, unless backspace is overridden with a keyboard rule. This can be illustrated with the following implicit
rule (* indicates 0 or more deadkeys; 'char' is any character):</p>

<pre><code>dk()* any(char) dk()* + [K_BKSP] > nul
</code></pre>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_deadkey" name="Example:_Using_deadkey">Example: Using <code>deadkey()</code></h3>

<pre><code>+ '`' > dk(backquote)
dk(backquote) + 'e' > 'è'
</code></pre>

<h2>Platforms</h2>

<p>The <code>deadkey()</code> statement can be used in keyboards on all platforms.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>
    
<p>Numbered deadkeys were introduced in version 3.0. Keyman 5.0 and later support named deadkeys. The use of numbered deadkeys is still
supported, but not recommended; named deadkeys make the keyboard source much more readable.</p>
