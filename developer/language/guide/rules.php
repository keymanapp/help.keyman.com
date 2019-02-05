<?php
  require_once('includes/template.php');

  head([
    'title' => "Using rules"
  ]);
?>

<h1>Using rules</h1>

<p>A rule is the basic part of a Keyman keyboard. Each rule defines what a keystroke will output, when certain characters are already
displayed on the screen. A rule is also used to pre-process and post-process the characters being output to the screen.</p>

<p>A rule is made up of three parts:</p>

<pre><code><var>context</var> + <var>keystroke</var> > <var>output</var>
</code></pre>

<p>The <em>context</em> refers to what is already displayed on the screen. A rule will only be fired if
the context and the keystroke both match. The <em>output</em> will replace the context matched on the
left hand side of the rule.</p>

<p>In advanced <a href="groups">groups</a>, the <em>keystroke</em> section of the rule may be omitted for 
processing on the context and output.</p>

<p>One of the important statements that can be used in rules is the <code>context</code> statement.</p>

<h2>context</h2>

<p>The <a href='../reference/context'><code>context</code> statement</a> will transfer the <em>context</em> of the rule into the
<em>output</em>, for example:</p>

<pre><code>"abc" + "d" > context "D"
</code></pre>

<p>will, when <code class='language-none'>abc</code> is on the screen, and <span class='key'>d</span> is pressed, replace 
<code class='language-none'>abc</code> with <code class='language-none'>abcD</code>. You can also put a single character from the 
context into the output using <code>context()</code>:</p>

<pre><code>"abc" + "d" > "D" context(2)
</code></pre>

<p>This will output <code class='language-none'>Db</code> when <span class='key'>abcd</span> is typed.</p>
