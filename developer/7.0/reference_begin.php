<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">begin statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_beep.php">Prev</a> </td><th width="60%" align="center">Statements</th><td width="20%" align="right"> <a accesskey="n" href="reference_call.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title"><a name="reference_begin"></a>begin statement</h4></div></div></div><pre class="programlisting">
begin [ANSI|Unicode] &gt; use(%gnGroup%)
      </pre><p>
        The begin statement tells Keyman which group should be processed first when it receives a 
        keystroke.  You can specify either ANSI or Unicode starting groups in a single begin 
        statement.  If both are omitted, the ANSI option is assumed.
      </p><p>
        You can include two begin statements in a single keyboard file.  In this case, one must be 
        Unicode and the other ANSI.  Keyman will determine which group to use on the basis of the active 
        application.
      </p><h5><a name="id735865"></a>Example</h5><pre class="programlisting">
begin &gt; use(main)
begin Unicode &gt; use(main)
      </pre><h5><a name="id734835"></a>Versions</h5><p>This line originated in SIL-CC, and a simplified version was used in Keyman for consistency.  
        The ANSI/Unicode distinction was introduced in Keyman 5.</p><h5><a name="id735911"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference__struct.php" title="Language Structure">Language Structure</a></p></li><li><p><a class="xref" href="reference__struct_groups.php" title="Using Groups">Using Groups</a></p></li><li><p><a class="xref" href="reference_group.php" title="group statement">group statement</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_beep.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_statements_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_call.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">beep statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> call statement</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
