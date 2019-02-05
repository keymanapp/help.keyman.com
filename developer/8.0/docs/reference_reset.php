<?php
  require_once('includes/template.php');

  head([
    'title' => "reset statement"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">reset statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_return.php">Prev</a> </td><th width="60%" align="center">Statements</th><td width="20%" align="right"> <a accesskey="n" href="reference_save.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_reset">reset statement</h4></div></div></div><pre class="programlisting">%ruleContext% + %ruleKey% &gt; reset(%optName%)
    </pre><p>
      The reset command is used on the right hand (output) side of a rule to restore an option to the current default value - either the store content 
      as defined in the keyboard source file, or the value saved previously in the Windows registry.
    </p><h5><a name="id643986"></a>Example</h5><pre class="programlisting">+ [CTRL ALT '0'] &gt; reset(opt1)
      </pre><h5><a name="id645099"></a>Versions</h5><p>The reset keyword was introduced in Keyman 8.0.</p><h5><a name="id645062"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="guide_lang_options.php" title="Programmer's Guide - Keyboard Options">Programmer's Guide - Keyboard Options</a></p></li><li><p><a class="xref" href="reference_if.php" title="if statement">if statement</a></p></li><li><p><a class="xref" href="reference_set.php" title="set statement">set statement</a></p></li><li><p><a class="xref" href="reference_save.php" title="save statement">save statement</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_return.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_statements_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_save.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">return statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> save statement</td></tr></table></div>
