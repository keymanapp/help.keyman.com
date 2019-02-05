<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 8: Deadkeys</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_keyboard_7.php">Prev</a> </td><th width="60%" align="center">Keyboard Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_keyboard_9.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="tutorial_keyboard_8"></a>Step 8: Deadkeys</h3></div></div></div><h4><a name="id776725"></a>Solving the Problem</h4><p>
    Probably the easiest solution to the problem which we encountered on the last
    page is to design the keyboard so that the user types a quote key twice when
    they want to produce a quote, but once when they want to use it as an accent.
    However, we cannot simply use the rule:
  </p><pre class="programlisting">
"'" + "'" &gt; "'"
    </pre><p>
    This will certainly produce a single quote after it's typed twice; however it
    will still produce the same error. We need to distinguish between the output
    of this rule, when the user wants a quote, and that of a single quote press,
    when the user wants to place an accent on a vowel. To implement this behaviour,
    we use deadkeys.
  </p><h4><a name="id776740"></a>Deadkeys</h4><p>
    A deadkey is like a character that is used in the context or output but never
    appears on the screen. We use deadkeys like this:
  </p><pre class="programlisting">
+ "'" &gt; deadkey(quote)

c Handle acute accents
deadkey(quote) + any( plainvowels ) &gt; index( acutevowels, 2 )

c Handle a single quote
deadkey(quote) + "'" &gt; "'"
    </pre><p>
    Note that for the sake of convenience, a deadkey can also be written in a
    short form:
  </p><pre class="programlisting">
dk(quote)     c This is identical to deadkey(quote)
    </pre><p>
    Type the three rules above in place of the existing rule for acute accents in
    the keyboard so far. If you test the keyboard now, you will find that the error
    no longer occurs. This is because accented vowels are only produced after the
    deadkey, and no deadkey is output if the user types a quote key twice.
  </p><p>
    Another difference is that the quote is no longer displayed before you type the
    vowel: this is because we are converting the quote to a deadkey. If necessary,
    we can still distinguish between rules in the above manner and display the
    quote, if we just add a quote before the deadkey, like this:
  </p><pre class="programlisting">
+ "'" &gt; "'" dk(quote)

c Handle acute accents
"'" dk(quote) + any( plainvowels ) &gt; index( acutevowels, 2 )

c Handle a single quote
"'" dk(quote) + "'" &gt; "'"
    </pre><p>
    However, we will not use this for the Quick French keyboard, as it could cause
    some confusion when the user wants to type a quote, and not an accent.
  </p><p>
    Now we can make changes so that all the other accents use deadkeys as
    well, for consistency, and add rules to output the accent character by typing
    the key twice.
  </p><p>
    The Quick French keyboard is now complete. The full source is on the next page.
  </p><p>
    <a class="xref" href="tutorial_keyboard_9.php" title="Step 9: The Finished Keyboard">Step 9: The Finished Keyboard</a>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_keyboard_7.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_keyboard.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_keyboard_9.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Step 7: Testing the Keyboard </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Step 9: The Finished Keyboard</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
