<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 8: Deadkeys"
  ]);
?>

<h1>Step 8: Deadkeys</h1>

<h2>Solving the Problem</h2>

<p>Probably the easiest solution to the problem which we encountered on the last page is to design the keyboard so that the user types
a quote key twice when they want to produce a quote, but once when they want to use it as an accent. However, we cannot simply use the
rule:</p>

<pre><code>"'" + "'" > "'"
</code></pre>

<p>This will certainly produce a single quote after it's typed twice; however it will still produce the same error, because the 
following keystroke will continue to swallow the quote character from the context. We need to
distinguish between the output of this rule, when the user wants a quote, and that of a single quote press, when the user wants to
place an accent on a vowel. To implement this behaviour, we use <a href='/developer/language/reference/deadkey'>deadkeys</a>.</p>

<h2>Deadkeys</h2>

<p>A deadkey is like a character that is used in the context or output but never appears on the screen. We use deadkeys like this:</p>

<pre><code>+ "'" > deadkey(quote)

c Handle acute accents
deadkey(quote) + any( plainvowels ) > index( acutevowels, 2 )

c Handle a single quote
deadkey(quote) + "'" > "'"
</code></pre>

<p>Note that for the sake of convenience, a deadkey can also be written in a short form:</p>

<pre><code>dk(quote)     c This is identical to deadkey(quote)
</code></pre>

<p>Type the three rules above in place of the existing rule for acute accents in the keyboard so far. If you test the keyboard now, you
will find that the error no longer occurs. This is because accented vowels are only produced after the deadkey, and no deadkey is
output if the user types a quote key twice.</p>

<p>But we've introduced another difference to the keyboard now: the quote is no longer displayed before you type the vowel.
This is because we are converting the quote to a deadkey. If we prefer, we can still distinguish between rules in the above manner 
and display the quote, if we just add a quote before the deadkey, like this:</p>

<pre><code>+ "'" > "'" dk(quote)

c Handle acute accents
"'" dk(quote) + any( plainvowels ) > index( acutevowels, 2 )

c Handle a single quote
"'" dk(quote) + "'" > "'"
</code></pre>

<p>However, we will not use this technique for the Quick French keyboard.</p>

<p>Now we can make changes so that all the other accents use deadkeys as well, for consistency, and add rules to output the accent
character by typing the key twice.</p>

<p>The Quick French keyboard is now complete. The full source is on the next page.</p>

<p><a href="step-9.php" title="Step 9: The Finished Keyboard">Step 9: The Finished Keyboard</a></p>
