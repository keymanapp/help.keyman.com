<?php
  require_once('includes/template.php');

  head([
    'title' => "Using constraint rules"
  ]);
?>

<h1>Using constraint rules</h1>

<p>Constraints are rules that restrict certain combinations from being typed. Constraints can be made with any rules, even <code>match</code> 
or <code>nomatch</code> rules.</p>

<p>Typical constraints would reject isolated keystrokes, keystrokes following a certain context, or certain context and keystroke
combinations.</p>

<h2>Rejecting keystrokes</h2>

<p>To make a keystroke produce no output, you use the <a href='../reference/nul'><code>nul</code> statement</a>. For example, we could use the 
following rule to prevent the user from typing "Q":</p>

<pre><code>+ "Q" > nul
</code></pre>

<p>In some cases, you might want to let the user know that they typed an illegal key; for this you would use the 
<a href='../reference/beep'><code>beep</code> statement</a>. The <code>beep</code> statement, like the <code>nul</code> statement, produces
no output, but it plays the sound assigned to "Default Beep" in the Sounds Control Panel.</p>

<pre><code>+ "Q" > beep
</code></pre>

<p>One difference between the <code>nul</code> and <code>beep</code> statements is that the <code>nul</code> statement is only valid 
as the whole output, while the <code>beep</code> statement can be used as just a part of the output.</p>

<h2>Rejecting keystrokes after a context</h2>

<p>In order to reject a keystroke following a certain context, you make the rule output just the context. Logically, you use the
<code>context</code> statement for this:</p>

<pre><code>"ba" + "d" > context
</code></pre>

<p>This would have the effect of ignoring the "d": the output would be the context, so to the user it would appear as though
they had never typed the "d". You can also use the <code>beep</code> statement here to aurally alert the user
that they typed a bad word.</p>

<pre><code>"ba" + "d" > context beep
</code></pre>

<h2>Rejecting both context and keystroke</h2>

<p>In certain special situations, you might wish to reject both the context and the keystroke. You can use the <code>nul</code>
statement to achieve this aim:</p>

<pre><code>"eras" + "e" > nul
</code></pre>

<p>This would effectively erase the context and the key. As in both situations above, you can also use the
<code>beep</code> statement here to alert the user with a warning beep:</p>

<pre><code>"eras" + "e" > beep
</code></pre>

<h2>Typical usage of constraints</h2>

<p>For a typical keyboard, you might use a constraint in a <a href='../reference/nomatch'><code>nomatch</code> rule</a>, to prevent the user 
from typing anything that is not matched by another rule.</p>

<p>Alternatively, you might want to restrict a few certain combinations: in this case you might put specific constraint rules in the
first group of a keyboard, and use a <code>nomatch</code> rule to process all other (allowed) input with another group. The separation 
of legal and illegal input into separate groups will make the keyboard's operation clearer.</p>

<h2 id="See_also" name="See_also">See also</h2>

<ul>
  <li><a href="../reference/nul" title="nul statement"><code>nul</code> statement</a></li>
  <li><a href="../reference/beep" title="beep statement"><code>beep</code> statement</a></li>
  <li><a href="../reference/nomatch" title="nomatch rule"><code>nomatch</code> rule</a></li>
</ul>
