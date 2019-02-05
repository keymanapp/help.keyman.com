<?php
  require_once('includes/template.php');

  head([
    'title' => "store statement"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">store statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_set.php">Prev</a> </td><th width="60%" align="center">Statements</th><td width="20%" align="right"> <a accesskey="n" href="reference_use.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_store">store statement</h4></div></div></div><pre class="programlisting">
store(%snStore%) %xsData%
      </pre><p>
        The store statement lets you store a string of characters or keys in a buffer which can then 
        be referenced with any and index.  Proper use of store can reduce many keyboards down to a
        few rules.  A store is terminated at the end of the line (or continuation lines).  Stores
        can contain either Unicode or ANSI characters, but a single store cannot contain both.
        Stores can also contain virtual keys and deadkeys, and outs() statements.
      </p><h5><a name="id596514"></a>Example</h5><pre class="programlisting">
store(keys) "ABCDEFG"
      </pre><h5><a name="id596931"></a>Versions</h5><p>The return statement was introduced in Keyman 3.0. Starting in version 6.0,
      deadkeys and virtual keys are allowed within stores.  Version 5.0
      and earlier did not allow these.
    </p><h5><a name="id597217"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference_index.php" title="index statement">index statement</a></p></li><li><p><a class="xref" href="reference__struct_stores.php" title="Using Stores">Using Stores</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_set.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_statements_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_use.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">set statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> use statement</td></tr></table></div>
