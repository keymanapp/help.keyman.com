<?php
  require_once('includes/template.php');

  head([
    'title' => "nomatch rule"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">nomatch rule</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_match.php">Prev</a> </td><th width="60%" align="center">Statements</th><td width="20%" align="right"> <a accesskey="n" href="reference_notany.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_nomatch">nomatch rule</h4></div></div></div><pre class="programlisting">
nomatch &gt; %esString%
      </pre><p>
        nomatch is similar to match, but instead of the rule being used when a rule was matched,
        it will be used when a rule isn't matched in the group. A nomatch rule can include use,
        return, beep and normal characters.
      </p><p>
        Caveat: nomatch will not be fired in a "using keys" group if the current keystroke does 
        not produce a character in normal use (e.g. modified keys, function keys).  This is by
        design, and was originally intended to ensure that function keys, and modified keys 
        such as Ctrl+X, were passed through to the underlying application.
      </p><p>
        esString: The extended string to output, including the statements mentioned above.
      </p><h5><a name="id596719"></a>Example</h5><pre class="programlisting">
nomatch &gt; beep
      </pre><h5><a name="id645181"></a>Versions</h5><p>The nomatch statement was introduced in Keyman 3.0.</p><h5><a name="id645368"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference_match.php" title="match rule">match rule</a></p></li><li><p><a class="xref" href="reference__struct_groups.php" title="Using Groups">Using Groups</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_match.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_statements_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_notany.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">match rule </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> notany statement</td></tr></table></div>
