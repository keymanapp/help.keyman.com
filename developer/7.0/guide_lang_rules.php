<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Programmer's Guide - Rules</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="guide_lang_groups.php">Prev</a> </td><th width="60%" align="center">Keyman Keyboard Language Guide</th><td width="20%" align="right"> <a accesskey="n" href="guide_lang_stores.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="guide_lang_rules"></a>Programmer's Guide - Rules</h3></div></div></div><p>
        A rule is the basic part of a Keyman keyboard.  Each rule defines what a keystroke will output, 
        when certain characters are already displayed on the screen.  A rule is also used to pre-process
        and post-process the characters being output to the screen.
      </p><h4><a name="id754300"></a>Using Rules</h4><p>
        A rule is made up of three parts:
      </p><p>
    </p><pre class="programlisting">
%context% + %keystroke% &gt; %output%
      </pre><p>
  </p><p>
        The <em class="parameter"><code>context</code></em> refers to what is already displayed on the screen.  A rule will only be fired
        if the context and the keystroke both match.  The <em class="parameter"><code>output</code></em> will replace the context matched on
        the left hand side of the rule.
      </p><p>
        In advanced <a class="link" href="guide_lang_groups.php" title="Programmer's Guide - Using Groups">groups</a>, the <em class="parameter"><code>keystroke</code></em> section of the rule may be omitted
        for processing on the context and output.
      </p><p>
        Some of the important functions that can be used in rules are <code class="code">context</code>, <code class="code">nul</code> and <code class="code">beep</code>.
      </p><h4><a name="id754448"></a>context</h4><p>
        The <code class="code">context</code> keyword will transfer the <em class="parameter"><code>context</code></em> of the rule into the <em class="parameter"><code>output</code></em>, for example:
      </p><pre class="programlisting">
"abc" + "d" &gt; context "D"
      </pre><p>
        will, when "abc" is on the screen, and "d" is pressed, replace "abc" with "abcD".
        You can also put a single character from the context into the output using context(n):
      </p><pre class="programlisting">
"abc" + "d" &gt; "D" context(2)
      </pre><p>
        This will output "Db" when "abcd" is typed.
      </p><h4><a name="id754502"></a>nul</h4><p>
        <code class="code">nul</code> is used in the output of a rule to give the rule no output.  For instance, the backslash key may
        be invalid in the keyboard you are creating, so the following rule will mean it will never have any output:
      </p><pre class="programlisting">
+ '\' &gt; nul
      </pre><h4><a name="id754174"></a>beep</h4><p>
        <code class="code">beep</code> is the same as <code class="code">nul</code>, except that the computer will emit a beep sound at the same time to
        alert the user to the error.  You
        can use this, for instance, when the user types the same diacritic twice in a row:
      </p><pre class="programlisting">
'è' + '`' &gt; context beep
      </pre><p>
        The <code class="code">context</code> statement is required here so that the rule does not delete the "è" character.
      </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="guide_lang_groups.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="index_guide_language.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="guide_lang_stores.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Programmer's Guide - Using Groups </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Programmer's Guide - Stores</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
