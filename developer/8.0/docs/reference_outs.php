<?php
  require_once('includes/template.php');

  head([
    'title' => "outs statement"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">outs statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_nul.php">Prev</a> </td><th width="60%" align="center">Statements</th><td width="20%" align="right"> <a accesskey="n" href="reference_return.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_outs">outs statement</h4></div></div></div><pre class="programlisting">
outs(%snStore%)
      </pre><p>
        The outs statement simply copies the store snStore into the position in which it has been 
        inserted.  Most of the time this is used only in stores but it can be used in the context
        and output as well.
      </p><div class="warning" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Warning</h3><p>
        When using outs() in the context, the characters in the outs are included in index counts.
        See the example.
      </p></div><h5><a name="id645266"></a>Example</h5><pre class="programlisting">
store(conskeys) "BCDFGHJKLMNPQRSTVWXYZ"
store(vowelkeys) "AEIOU"
store(allkeys) outs(conskeys) outs(vowelkeys)

c using outs in the context

outs(vowelkeys) + any(conskeys) &gt; index(conskeys, 6)  
      </pre><h5><a name="id645327"></a>Versions</h5><p>The outs statement was introduced in Keyman 3.0.</p><h5><a name="id644524"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference__struct_stores.php" title="Using Stores">Using Stores</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_nul.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_statements_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_return.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">nul statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> return statement</td></tr></table></div>
