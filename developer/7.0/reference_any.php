<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">any statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_statements_index.php">Prev</a> </td><th width="60%" align="center">Statements</th><td width="20%" align="right"> <a accesskey="n" href="reference_beep.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title"><a name="reference_any"></a>any statement</h4></div></div></div><pre class="programlisting">
any(%snStore%)
    </pre><p>
        The any statement will match any character that is in the store snStore.  
        This statement is only valid on the left side of a rule; the 
        index statement is used to match again or output the character matched by the
        any statement in the output.  If an any is used in the key, it will be expanded
        out to include one rule for each character in the store.  The 
        any statement remembers the offset in the store where the match for later use with the index 
        statement.
      </p><pre class="programlisting">
+ any(keys) &gt; index(output,1)
      </pre><h5><a name="id735799"></a>Example</h5><pre class="programlisting">
+ any(keys) &gt; index(output,1)
      </pre><h5><a name="id736795"></a>Versions</h5><p>The any keyword was introduced in Keyman 3.0.</p><h5><a name="id734935"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference__struct.php" title="Language Structure">Language Structure</a></p></li><li><p><a class="xref" href="reference__struct_stores.php" title="Using Stores">Using Stores</a></p></li><li><p><a class="xref" href="reference_store.php" title="store statement">store statement</a></p></li><li><p><a class="xref" href="reference_notany.php" title="notany statement">notany statement</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_statements_index.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_statements_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_beep.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Statements </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> beep statement</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
