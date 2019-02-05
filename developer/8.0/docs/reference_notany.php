<?php
  require_once('includes/template.php');

  head([
    'title' => "notany statement"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">notany statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_nomatch.php">Prev</a> </td><th width="60%" align="center">Statements</th><td width="20%" align="right"> <a accesskey="n" href="reference_nul.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_notany">notany statement</h4></div></div></div><pre class="programlisting">
notany(snStore)
    </pre><p>
    The notany statement will match any character that is not in the <a class="link" href="reference_store.php" title="store statement">store</a> snStore.
    This statement is only valid in the context part of a rule.  The notany statement
    cannot be used with the <a class="link" href="reference_index.php" title="index statement">index</a> statement, but can be used 
    with the <a class="link" href="reference_context.php" title="context statement">context</a> statement.
  </p><p>
    The notany statement does not match when there is no character at that position in the context 
    (e.g. at the start of the file).  To match this, use the <a class="link" href="reference_nul.php" title="nul statement">nul</a> statement.
  </p><p>
    Introduced in version 7.0.
  </p><h5><a name="id643729"></a>Example</h5><pre class="programlisting">
notany(laochar) + any(laokey) &gt; context(1) index(laochar,2)
      </pre><h5><a name="id643716"></a>Versions</h5><p>The notany statement was introduced in Keyman 7.0.</p><h5><a name="id645356"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference_any.php" title="any statement">any statement</a></p></li><li><p><a class="xref" href="reference__struct_stores.php" title="Using Stores">Using Stores</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_nomatch.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_statements_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_nul.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">nomatch rule </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> nul statement</td></tr></table></div>
