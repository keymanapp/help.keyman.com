<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 4: The Keyboard Body</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_keyboard_3.php">Prev</a> </td><th width="60%" align="center">Keyboard Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_keyboard_5.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="tutorial_keyboard_4"></a>Step 4: The Keyboard Body</h3></div></div></div><p>
    The body of the keyboard is the most important part: it determines the behaviour
    of the keyboard. The body consists of groups, which in turn contain one or
    more rules which define the responses of the keyboard to certain keystrokes.
  </p><h4><a name="id776338"></a>Groups</h4><p>
    There are two types of groups: one that processes the keys pressed and the
    context, and one that processes the context only. For most purposes, the latter
    type of group will be unnecessary. A group begins with a <a class="link" href="reference_group.php" title="group statement">Group statement</a>, and
    ends either at the start of another group, or at the end of the keyboard file.
  </p><p>
    We will only use one group in the Quick French keyboard, called Main. We mark
    the start of it with the group statement below. Add this line to the keyboard.
  </p><pre class="programlisting">
group(Main) using keys
  </pre><p>
    "Using keys" tells Keyman that this group will process keystrokes.
  </p><h4><a name="id776360"></a>Basic Rules</h4><p>
    A rule tells Keyman the output to produce for a certain input. A rule consists
    of three parts: the context, the key, and the output.
  </p><p>
    The context specifies the conditions under which a rule will act. If the most
    recent output matches the context of a rule, the rule will be processed.
    The key specifies which keystroke the rule will act upon.
    The output is the characters that are produced by a rule.
  </p><h4><a name="id776371"></a>Simple rules</h4><p>
    The simplest rules in Keyman consist of just a key and output, as below. (The
    examples in this section are just for illustration, and do not form part of the
    Quick French keyboard).
  </p><pre class="programlisting">
+ "a" &gt; "ä"
  </pre><p>
    In this rule, the key is "a", and the output is "ä". A simple rule begins with
    a plus sign, followed by the key, a greater-than symbol (suggesting "becomes"),
    and finally the output. As you might guess, this rule will change a lowercase
    'a' entered by the user into 'ä'.
  </p><p>
    The key and output can be written as a character in single
    or double quotes (as above), or as its Unicode character code, or using a named
    constant. The rule above could have been written in any of the 3 following ways:
  </p><pre class="programlisting">
    + 'a' &gt; 'ä'

    + U+0061 &gt; U+00E4

    store(ADIERESIS) 'ä'
    + 'a' &gt; $ADIERESIS
  </pre><p>
    You can also write the key in one form and the context in another.
  </p><h4><a name="id776396"></a>Rules with longer output</h4><p>
    The output of a rule is not limited to a single character. You could, for
    example, write a rule such as the following:
  </p><pre class="programlisting">
+ "f" &gt; "ph"
  </pre><p>
    This would change any f's typed into 'ph'. If the output of a rule consists of
    more than one character, you can write the characters in different ways if
    necessary, with a space separating each part. You can specify multiple
    characters in quotes, but if you use the Unicode codes to write the characters,
    you must separate each with a space:
  </p><pre class="programlisting">
+ "f" &gt; U+0070 U+0068

+ "f" &gt; U+0070 "h"
  </pre><p>
    This rule is functionally identical to the one further above.
  </p><p>
    <a class="xref" href="tutorial_keyboard_5.php" title="Step 5: Rules with Context">Step 5: Rules with Context</a>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_keyboard_3.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_keyboard.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_keyboard_5.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Step 3: The Keyboard Header </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Step 5: Rules with Context</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
