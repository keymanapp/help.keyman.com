<?php
  require_once('includes/template.php');

  head([
    'title' => "match rule"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">match rule</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_index.php">Prev</a> </td><th width="60%" align="center">Statements</th><td width="20%" align="right"> <a accesskey="n" href="reference_nomatch.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_match">match rule</h4></div></div></div><pre class="programlisting">
match &gt; %esString%
    </pre><p>
        In each group, if Keyman finds a match rule, it will use it when a rule in the group
        was matched.  A match rule can include use, return, beep and normal characters.
      </p><p>
        esString: The extended string to output, including the statements mentioned above.
      </p><h5><a name="id596417"></a>Example</h5><pre class="programlisting">
match &gt; use(AdjustVowels)
      </pre><h5><a name="id596800"></a>Versions</h5><p>The match statement was introduced in Keyman 3.0.</p><h5><a name="id597065"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference_nomatch.php" title="nomatch rule">nomatch rule</a></p></li><li><p><a class="xref" href="reference__struct_groups.php" title="Using Groups">Using Groups</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_index.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_statements_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_nomatch.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">index statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> nomatch rule</td></tr></table></div>
