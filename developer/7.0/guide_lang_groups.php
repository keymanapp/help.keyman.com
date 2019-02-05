<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Programmer's Guide - Using Groups</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="guide_lang_constraints.php">Prev</a> </td><th width="60%" align="center">Keyman Keyboard Language Guide</th><td width="20%" align="right"> <a accesskey="n" href="guide_lang_rules.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="guide_lang_groups"></a>Programmer's Guide - Using Groups</h3></div></div></div><p>
        Groups provide a facility for grouping related rules, similar to functions 
        in other programming languages.  When used effectively, groups can reduce the
        size and complexity of your keyboards significantly.
      </p><p>
        Groups can match on context only, or on context and keystroke.  The context-only groups
        can be very useful for pre- and post-processing rules, such as reordering stacked
        diacritics.
      </p><p>
        The examples below show the two types of groups.
      </p><pre class="programlisting">
group(mygroup)                   c context only
'a' &gt; 'b'
group(mygroup) using keys        c context and keystroke
'a' + 'a' &gt; 'c'
      </pre><p>
        The <a class="link" href="reference_use.php" title="use statement">use</a> statement allows you move into another group when a rule
        is matched.  All output from the current group is processed into the context before the
        subsequent group is entered (although it is not sent to the application until processing
        finishes for the current keystroke).  For example,
      </p><pre class="programlisting">
c This example prohibits two vowels in a row

begin &gt; use(precheck)

group(precheck)
  any(vowel) &gt; context use(vowelstate)                                                             
  nomatch &gt; use(nostate)

group(vowelstate) using keys
  + any(vowel) &gt; beep
  nomatch &gt; use(nostate)

group(nostate) using keys
  + any(cons) &gt; index(cons, 1)
      </pre><p>
        Several important things to note from this example:
      </p><p>
        The first rule (any(vowel) &gt; context use(vowelstate)) uses the 
        <a class="link" href="reference_context.php" title="context statement">context</a> keyword to copy the matched context to the output, so that
        Keyman can move it back into the context for use with the vowelstate group.  If you do not do this,
        the context will be dropped before vowelstate is used, and the character will be deleted from the
        screen.
      </p><p>
        If the final group processed is a context and keystroke group ("using keys"), and there is not a 
        nomatch rule, and the keystroke is not matched in the group, the keystroke will be output 
        to the screen, regardless of whether or not it was matched in earlier groups.
      </p><p>
        For another example of a keyboard using multiple groups, see
        <a class="link" href="guide_lang_advanced.php" title="Programmer's Guide - Advanced Keyboard Creation">Advanced Keyboard Creation</a>.
      </p><p>
        The following statements and special rules are used with groups:
      </p><table><tbody><tr>
      <td><a class="xref" href="reference_begin.php" title="begin statement">begin statement</a></td>
      <td>Defines the starting group for the keyboard layout </td>
    </tr><tr>
      <td><a class="xref" href="reference_group.php" title="group statement">group statement</a></td>
      <td>Starts a new group of rules </td>
    </tr><tr>
      <td><a class="xref" href="reference_match.php" title="match rule">match rule</a></td>
      <td>A system rule that is fired when another rule is matched </td>
    </tr><tr>
      <td><a class="xref" href="reference_nomatch.php" title="nomatch rule">nomatch rule</a></td>
      <td>A system rule that is fired when no rule is matched </td>
    </tr><tr>
      <td><a class="xref" href="reference_return.php" title="return statement">return statement</a></td>
      <td>Stops processing of the current keystroke </td>
    </tr><tr>
      <td><a class="xref" href="reference_use.php" title="use statement">use statement</a></td>
      <td>Starts processing in another group </td>
    </tr></tbody></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="guide_lang_constraints.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="index_guide_language.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="guide_lang_rules.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Programmer's Guide - Constraints </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Programmer's Guide - Rules</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
