<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Programmer's Guide - Constraints</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="guide_lang_advanced.php">Prev</a> </td><th width="60%" align="center">Keyman Keyboard Language Guide</th><td width="20%" align="right"> <a accesskey="n" href="guide_lang_groups.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="guide_lang_constraints"></a>Programmer's Guide - Constraints</h3></div></div></div><p>
    Constraints are rules that restrict certain combinations from being typed.
    Constraints can be made with any rules, even <code class="code">match</code> or <code class="code">nomatch</code>
    rules.
  </p><p>
    Typical constraints would reject isolated keystrokes, keystrokes following a
    certain context, or certain context and keystroke combinations.
  </p><h4><a name="id753942"></a>Rejecting keystrokes</h4><p>
    To make a keystroke produce no output, you use the <code class="code">nul</code> keyword. For
    example, we could use the following rule to prevent the user from typing "Q":
  </p><pre class="programlisting">
+ "Q" &gt; nul
  </pre><p>
    In some cases, you might want to let the user know that they typed an illegal
    key; for this you would use the <code class="code">beep</code> statement. The <code class="code">beep</code> statement,
    like the <code class="code">nul</code> statement, produces no output, but it plays the sound
    assigned to "Default Beep" in the Sounds Control Panel.
  </p><pre class="programlisting">
+ "Q" &gt; beep
  </pre><p>
    One difference between the <code class="code">nul</code> and <code class="code">beep</code> statements is that the
    <code class="code">nul</code> statement is only valid as the whole output, while the <code class="code">beep</code>
    statement can be used as just a part of the output.
  </p><h4><a name="id754074"></a>Rejecting keystrokes after a context</h4><p>
    In order to reject a keystroke following a certain context, you make the rule
    output just the context. Logically, you use the <code class="code">context</code> statement for
    this:
  </p><pre class="programlisting">
"ba" + "d" &gt; context
  </pre><p>
    This would have the effect of ignoring the "d": the output would be the context,
    so to the user it would appear as though they had never typed the "d".
    You can also use the <code class="code">beep</code> statement here to aurally alert the user that
    they typed a bad word.
  </p><pre class="programlisting">
"ba" + "d" &gt; context beep
  </pre><h4><a name="id754150"></a>Rejecting both context and keystroke</h4><p>
    In certain special situations, you might wish to reject both the context and the
    keystroke. You can use the <code class="code">nul</code> statement to achieve this aim:
  </p><pre class="programlisting">
"eras" + "e" &gt; nul
  </pre><p>
    This would effectively erase the context and the key. A synonym for the <code class="code">nul</code>
    keyword that might be used in its place in such a situation is <code class="code">clearcontext</code>.
    As in both situations above, you can also use the <code class="code">beep</code> statement here to
    alert the user with a warning beep:
  </p><pre class="programlisting">
"eras" + "e" &gt; beep
  </pre><h4><a name="id754015"></a>Typical usage of constraints</h4><p>
    For a typical keyboard, you might use a constraint in a </p><pre class="programlisting">nomatch</pre><p> rule, to
    prevent the user from typing anything that is not matched by another rule.
  </p><p>
    Alternatively, you might want to restrict a few certain combinations: in this
    case you might put specific constraint rules in the first group of a keyboard,
    and use a nomatch rule to process all other (allowed) input with another group.
    The separation of legal and illegal input into separate groups will make the
    keyboard's operation clearer.
  </p><h4><a name="id754343"></a>Related Topics</h4><div class="itemizedlist"><ul type="disc"><li><p>
        <a class="xref" href="reference_context.php" title="context statement">context statement</a>
      </p></li><li><p>
        <a class="xref" href="reference_beep.php" title="beep statement">beep statement</a>
      </p></li><li><p>
        <a class="xref" href="reference_nul.php" title="nul statement">nul statement</a>
      </p></li><li><p>
        <a class="xref" href="reference_match.php" title="match rule">match rule</a>
      </p></li><li><p>
        <a class="xref" href="reference_nomatch.php" title="nomatch rule">nomatch rule</a>
      </p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="guide_lang_advanced.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="index_guide_language.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="guide_lang_groups.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Programmer's Guide - Advanced Keyboard Creation </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Programmer's Guide - Using Groups</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
