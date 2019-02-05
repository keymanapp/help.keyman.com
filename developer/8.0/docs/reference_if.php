<?php
  require_once('includes/template.php');

  head([
    'title' => "if statement"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">if statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_group.php">Prev</a> </td><th width="60%" align="center">Statements</th><td width="20%" align="right"> <a accesskey="n" href="reference_index.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_if">if statement</h4></div></div></div><pre class="programlisting">if(%optName% = | != %storeName% | %stringValue%) %ruleContext% + %ruleKey% &gt; %ruleOutput%
  </pre><p> 
    The if statement allows any rule to be applied conditionally, depending on the content of store optName, which can be defined either 
    during keyboard configuration or dynamically by using a set statement. The content of store optName is tested to see whether it matches
    (or does not match) a string or the content of another store, and the following rule used or ignored accordingly.
  </p><p>
    A store being used for an option (in an if, set, save or reset statement) may also be used to match context or output in a rule, but may not be used to match keystrokes.
  </p><h5><a name="id596693"></a>Example</h5><pre class="programlisting">if(opt1 = '1') + any(letterGroup1) &gt; index(outputGroup1,1) 
  </pre><p>
    The rule to output a character from the outputGroup1 store according to a keystroke matching a character in store letterGroup1 
    will only be applied if the content of store opt1 is exactly equal to the string '1'. 
  </p><p>
    Where two or more separate options are held in stores, the different options can be tested together (logical "AND"):
  </p><pre class="programlisting">if(opt1 = '1') if(opt2 = '1') + any(letterGroup1) &gt; index(outputGroup1,1)
  </pre><p>
    or separately (logical "OR") 
  </p><pre class="programlisting">if(opt1 = '1') + any(letterGroup1) &gt; index(outputGroup1,1) 
if(opt2 = '1') + any(letterGroup1) &gt; index(outputGroup1,1)
  </pre><h5><a name="id596287"></a>Versions</h5><p>The if keyword was introduced in Keyman 8.0.</p><h5><a name="id597125"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="guide_lang_options.php" title="Programmer's Guide - Keyboard Options">Programmer's Guide - Keyboard Options</a></p></li><li><p><a class="xref" href="reference_set.php" title="set statement">set statement</a></p></li><li><p><a class="xref" href="reference_save.php" title="save statement">save statement</a></p></li><li><p><a class="xref" href="reference_reset.php" title="reset statement">reset statement</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_group.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_statements_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_index.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">group statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> index statement</td></tr></table></div>
