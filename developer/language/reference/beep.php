<?php
  require_once('includes/template.php');

  head([
    'title' => "beep statement"
  ]);
?>
<h1 class="title" id="reference_beep">beep</h1>

<h2 id="Summary" name="Summary">Summary</h2>

<p>The <code><strong>beep</strong></code> statement emits a sound or otherwise provides feedback to the user that the key they typed was not permitted.</p>

<h2 id="Syntax" name="Syntax">Syntax</h2>

<pre><code>beep</code></pre>

<h2 id="Description" name="Description">Description</h2>

<p>The <code>beep</code> statement produces a beep with the system speaker when the rule is matched. In Keyman Desktop, <code>beep</code> will
produce the sound specified by "Asterisk" in Windows Sounds configuration. In KeymanWeb, <code>beep</code> will flash the current text field
instead of producing a sound. Other systems may use alternate forms of feedback, such as vibration. When using the <code>beep</code> statement, remember that
it will delete all that was matched on the left side of the rule if you don't precede it with <a href='context'><code>context</code> statement</a> or 
appropriate characters. The <code>beep</code> statement is only valid in the output.</p>

<h2 id="Examples">Examples</h2>

<h3 id="Example:_Using_index" name="Example:_Using_index">Example: Using <code>beep</code></h3>

The example given below will, if it receives a key that is in the <code><var>key</var></code> group, and the
context ends with a <code><var>cons</var></code> character, ignore the key and leave the context alone.</p>

<pre><code>any(cons) + any(key) > context beep
</code></pre>

<h2>Platforms</h2>

<p>The <code>beep</code> statement can be used in keyboards on all platforms. The feedback given may differ depending on the platform.</p>

<table class='platform'>
  <thead>
    <tr><th>Windows</th><th>macOS</th><th>Linux</th><th>Desktop web</th><th>Mobile web</th><th>iOS</th><th>Android</th></tr>
  </thead>
  <tbody>
    <tr><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td><td>✔</td></tr>
  </tbody>
</table>

<h2>Version history</h2>

<p>The beep statement was introduced in Keyman 3.0.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href='match'><code>match</code> rule</a></li>
  <li><a href='nomatch'><code>nomatch</code> rule</a></li>
  <li><a href='nul'><code>nul</code> statement</a></li>
</ul>
