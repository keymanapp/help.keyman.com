<?php
  require_once('includes/template.php');

  head([
    'title' => "beep statement"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">beep statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_any.php">Prev</a> </td><th width="60%" align="center">Statements</th><td width="20%" align="right"> <a accesskey="n" href="reference_begin.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_beep">beep statement</h4></div></div></div><p>
        The beep statement produces a beep with the system speaker when the rule is matched.  If you 
        have a sound driver installed, beep will produce the sound specified by "Asterisk" in the 
        Sounds option in Control Panel.  When using the beep statement, remember that it can delete
        all that was matched on the left side of the rule if you don't precede it with context or
        appropriate characters.  The beep statement is only valid in the output.  The example
        given below will, if it receives a key that is in the key group, and the context ends
        with a cons character, ignore the key and leave the context alone.
      </p><h5><a name="id596713"></a>Example</h5><pre class="programlisting">
any(cons) + any(key) &gt; context beep
      </pre><h5><a name="id596641"></a>Versions</h5><p>The beep statement was introduced in Keyman 3.0.</p><h5><a name="id596190"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference_match.php" title="match rule">match rule</a></p></li><li><p><a class="xref" href="reference_nomatch.php" title="nomatch rule">nomatch rule</a></p></li><li><p><a class="xref" href="reference__struct.php" title="Language Structure">Language Structure</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_any.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_statements_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_begin.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">any statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> begin statement</td></tr></table></div>
