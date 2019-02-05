<?php
  require_once('includes/template.php');

  head([
    'title' => "save statement"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">save statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_reset.php">Prev</a> </td><th width="60%" align="center">Statements</th><td width="20%" align="right"> <a accesskey="n" href="reference_set.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_save">save statement</h4></div></div></div><pre class="programlisting">  
%ruleContext% + %ruleKey% &gt; %ruleOutput% save(%optName%)
  </pre><p>
    The save command is used on the right hand (output) side of a rule to save a current option value in the Windows registry. 
    This option value will then become the default option value for future use. 
    It will typically be used after a set command to make the dynamically changed option value change permanent.
  </p><h5><a name="id643838"></a>Example</h5><pre class="programlisting">  
+[CTRL ALT "1"] &gt; set(opt1='1') save(opt1) 
  </pre><p>
    The key sequence matched by the rule will change the option value to '1' and make that change permanent.
  </p><h5><a name="id645380"></a>Versions</h5><p>The save keyword was introduced in Keyman 8.0.</p><h5><a name="id645166"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="guide_lang_options.php" title="Programmer's Guide - Keyboard Options">Programmer's Guide - Keyboard Options</a></p></li><li><p><a class="xref" href="reference_if.php" title="if statement">if statement</a></p></li><li><p><a class="xref" href="reference_set.php" title="set statement">set statement</a></p></li><li><p><a class="xref" href="reference_reset.php" title="reset statement">reset statement</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_reset.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_statements_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_set.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">reset statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> set statement</td></tr></table></div>
