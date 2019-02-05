<?php
  require_once('includes/template.php');

  head([
    'title' => "set statement"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">set statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_save.php">Prev</a> </td><th width="60%" align="center">Statements</th><td width="20%" align="right"> <a accesskey="n" href="reference_store.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_set">set statement</h4></div></div></div><pre class="programlisting">%ruleContext% + %ruleKey% &gt; %ruleOutput% set(%optName% = %storeName% | %stringValue%) 
  </pre><p>
    The set command allows the content a store to be changed dynamically, either to a string value or to the content of another store,
    during use of the keyboard. Changing store content while using one application will change it for all applications until Keyman 
    is closed or the keyboard uninstalled. If it is wanted to make the changed store content permanent, to become the default content 
    when restarting Keyman, the set command should be followed by a save command.
  </p><h5><a name="id645031"></a>Example</h5><pre class="programlisting">+[CTRL ALT "1"] &gt; set(opt1='1') 
+[CTRL ALT "2"] &gt; set(opt1='2') 
  </pre><h5><a name="id645188"></a>Versions</h5><p>The reset keyword was introduced in Keyman 8.0.</p><h5><a name="id644532"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="guide_lang_options.php" title="Programmer's Guide - Keyboard Options">Programmer's Guide - Keyboard Options</a></p></li><li><p><a class="xref" href="reference_if.php" title="if statement">if statement</a></p></li><li><p><a class="xref" href="reference_save.php" title="save statement">save statement</a></p></li><li><p><a class="xref" href="reference_reset.php" title="reset statement">reset statement</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_save.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_statements_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_store.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">save statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> store statement</td></tr></table></div>
