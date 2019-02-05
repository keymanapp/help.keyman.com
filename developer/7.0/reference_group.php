<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">group statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_deadkey.php">Prev</a> </td><th width="60%" align="center">Statements</th><td width="20%" align="right"> <a accesskey="n" href="reference_index.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title"><a name="reference_group"></a>group statement</h4></div></div></div><pre class="programlisting">
group(%gnGroup%) [using keys]
      </pre><p>
        group tells Keyman that a new group has started.  There are two sorts of groups: key processing 
        groups, and context processing groups.  Key processing groups can include 
        context checking, but context processing groups cannot include key checking.  Keyman will 
        use first the group specified in the begin statement, and move from there onto other groups.  The 
        keystroke received by Keyman is the same for all groups with key processing.
      </p><p>
        To tell Keyman that the group should include key processing, you should include the 
        using keys section of the statement; it that is left out, Keyman assumes the group checks the 
        context only.  The keystroke will remain the same during processing; you can have many groups
        that each use using keys, and the keystroke will be the same for all of them.   If you leave
        out using keys, you have to also leave out the '+' and the keystroke.
      </p><p>
        gnGroup: The name of the new group.
      </p><h5><a name="id736027"></a>Example</h5><pre class="programlisting">
group(main) using keys
group(syllablecheck)
      </pre><h5><a name="id736019"></a>Versions</h5><p>The group construct was introduced in Keyman 5.0.</p><h5><a name="id734849"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference__struct_groups.php" title="Using Groups">Using Groups</a></p></li><li><p><a class="xref" href="reference__struct.php" title="Language Structure">Language Structure</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_deadkey.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_statements_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_index.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">deadkey statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> index statement</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
