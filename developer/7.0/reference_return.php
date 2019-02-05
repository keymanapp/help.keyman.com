<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">return statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_outs.php">Prev</a> </td><th width="60%" align="center">Statements</th><td width="20%" align="right"> <a accesskey="n" href="reference_store.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title"><a name="reference_return"></a>return statement</h4></div></div></div><pre class="programlisting">
return
      </pre><p>
        return will tell Keyman to stop processing rules and wait for the next keystroke to 
        come.  Keyman will not return to process other groups that called the one with the 
        return statement.
      </p><h5><a name="id736057"></a>Example</h5><pre class="programlisting">
nomatch &gt; return
      </pre><h5><a name="id736240"></a>Versions</h5><p>The return statement was introduced in Keyman 3.0.</p><h5><a name="id736361"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference__struct.php" title="Language Structure">Language Structure</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_outs.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_statements_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_store.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">outs statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> store statement</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
