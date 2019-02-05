<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 5: Rules with Context"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 5: Rules with Context</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_keyboard_4.php">Prev</a> </td><th width="60%" align="center">Keyboard Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_keyboard_6.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="tutorial_keyboard_5">Step 5: Rules with Context</h3></div></div></div><h4><a name="id662141"></a>Rules with Context</h4><p>
    Very often we want a keyboard to produce different output based on more than just the last
    keystroke. For example, in the Quick French keyboard, we want the key "e" to produce one of
    "è", "é", "ë", "ê", or just "e", depending on what was typed
    immediately before it. To do this we must make our rules look at the context.
  </p><p>
    The context is the output from previous rules; that is, the characters that are displayed
    on the screen. We can make a rule work with only certain context by putting this before
    the plus sign in the rule:
  </p><pre class="programlisting">
"^" + "e" &gt; "ê"
  </pre><p>
    With this rule, whenever an 'e' is typed, if it was preceded by a caret (^), the output will be 'ê'.
    It is important to remember that the context consists of <span class="emphasis"><em>output from previous rules</em></span>, not
    the previous keystrokes. To emphasize this point, consider the four rules below:
  </p><pre class="programlisting">
+ "a" &gt; "b"
+ "b" &gt; "c"
"b" + "c" &gt; "d"
"c" + "d" &gt; "e"
  </pre><p>
    With these rules, typing "bc" would produce the output "cc", and not "d", as you might expect. This is
    because the key "b" is converted by the second rule into the output "c", while the third rule
    expects a context of "b", and not "c"; we would have to type "ac" to get "d".
  </p><p>
    However, if a key has no matching rule, the output will be the same as the key: so the output "e"
    will be produced for the inputs "cd" and "bd".
  </p><h4><a name="id662174"></a>Continuing the Quick French keyboard</h4><p>
    Now we know how to create context-dependent rules, we can continue making the Quick French keyboard.
    Let's start with the rules for acute-accented characters, using the ANSI codes from the table we
    prepared earlier:
  </p><pre class="programlisting">
c lowercase characters with acute accent
"'" + "a" &gt; U+00E1
"'" + "e" &gt; U+00E9
"'" + "i" &gt; U+00ED
"'" + "o" &gt; U+00F3
"'" + "u" &gt; U+00FA
"'" + "y" &gt; U+00FD

c uppercase characters with acute accent
"'" + "A" &gt; U+00C1
"'" + "E" &gt; U+00C9
"'" + "I" &gt; U+00CD
"'" + "O" &gt; U+00D3
"'" + "U" &gt; U+00DA
"'" + "Y" &gt; U+00DD
  </pre><p>
    We can also create similar rules for the other thirty-odd accented characters.
  </p><p>
    As you can see, even for a simple keyboard like this we quickly end up with a large number
    of rules, which makes for clumsiness. We can make things simpler using stores, and the <code class="code">any</code> and
    <code class="code">index</code> statements.
  </p><p>
    <a class="xref" href="tutorial_keyboard_6.php" title="Step 6: Stores, 'any', and 'index'">Step 6: Stores, 'any', and 'index'</a>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_keyboard_4.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_keyboard.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_keyboard_6.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Step 4: The Keyboard Body </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Step 6: Stores, 'any', and 'index'</td></tr></table></div>
