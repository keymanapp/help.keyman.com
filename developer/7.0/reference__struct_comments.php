<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Comments</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference__struct.php">Prev</a> </td><th width="60%" align="center">Language Structure</th><td width="20%" align="right"> <a accesskey="n" href="reference__struct_constants.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title"><a name="reference__struct_comments"></a>Comments</h4></div></div></div><p>
        Comments must be started with a "c" character (case-insensitive), and followed 
        by a space character.  The comment continues to the end of the line and cannot be 
        <a class="link" href="reference__struct_longlines.php" title="Long lines and continuations">line-extended</a>. Comments cannot be included 
        in <a class="link" href="reference__struct_longlines.php" title="Long lines and continuations">line-extended</a> lines.
      </p><h5><a name="id778441"></a>Example</h5><pre class="programlisting">
c This is a comment line
+ 'a' &gt; 'b'    c This line changes "a" to "b"
+ 'c' &gt; \
        'd'    c A comment here is okay too
      </pre><h5><a name="id777395"></a>Versions</h5><p>Comments were introduced in Keyman 3.0.</p><h5><a name="id776993"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference__struct.php" title="Language Structure">Language Structure</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference__struct.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_language_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference__struct_constants.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Language Structure </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Named Constants</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
