<?php
  require_once('includes/template.php');

  head([
    'title' => "deadkey statement"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">deadkey statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_context.php">Prev</a> </td><th width="60%" align="center">Statements</th><td width="20%" align="right"> <a accesskey="n" href="reference_group.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_deadkey">deadkey statement</h4></div></div></div><pre class="programlisting">
deadkey(%name%)

dk(%name%)
      </pre><p>
        The deadkey or dk statement lets you program a deadkey in your keyboard.  The
        deadkey will be processed by Keyman as if it were a normal character, but it
        is not output onto the screen, but stored internally in the context.  Any
        keyboard can have around 65,000 unique deadkeys.
      </p><h5><a name="id596665"></a>Example</h5><pre class="programlisting">
+ '`' &gt; dk(backquote)
dk(backquote) + 'e' &gt; 'è'
      </pre><p>
        Any deadkeys inserted by another rule immediately before or after the character to the left 
        of the insertion point will be deleted when backspace is pressed, unless backspace is overridden
        with a keyboard rule.  This can be illustrated with the following implicit rule (* indicates 0 
        or more deadkeys; 'char' is any character):
      </p><pre class="programlisting">
dk()* any(char) dk()* + [K_BKSP] &gt; nul
      </pre><h5><a name="id596410"></a>Versions</h5><p>Numbered deadkeys were introduced in version 3.0. Keyman 5.0 and later support
      named deadkeys. The use of numbered deadkeys is still supported, but not
      recommended; named deadkeys make the keyboard source much more readable.
    </p><h5><a name="id596226"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference_match.php" title="match rule">match rule</a></p></li><li><p><a class="xref" href="reference_nomatch.php" title="nomatch rule">nomatch rule</a></p></li><li><p><a class="xref" href="reference__struct.php" title="Language Structure">Language Structure</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_context.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_statements_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_group.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">context statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> group statement</td></tr></table></div>
