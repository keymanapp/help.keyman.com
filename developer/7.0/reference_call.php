<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">call statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_begin.php">Prev</a> </td><th width="60%" align="center">Statements</th><td width="20%" align="right"> <a accesskey="n" href="reference_context.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title"><a name="reference_call"></a>call statement</h4></div></div></div><pre class="programlisting">
call(%snStore%)
      </pre><p>
    The call statement calls an Input Method Extension (IMX) DLL. Functionally it
    behaves like the use statement, and can be used anywhere the use statement is valid except after the begin statement.
  </p><p>
    The store given must be referencing a function in an external DLL, as below:
  </p><h5><a name="id736397"></a>Example</h5><pre class="programlisting">
store(DLLFunction) "myimx.dll:KeyEvent"
+ 'a' &gt; call(DLLFunction)
      </pre><h5><a name="id736138"></a>KeymanWeb Support</h5><p>
    KeymanWeb supports the call statement.  Each function must have a unique name, and is associated with a Javascript source file with 
    the extension ".call_js" that is linked in when the keyboard is compiled.  In the example above, to compile for 
    KeymanWeb, the file 'KeyEvent.call_js' must exist in the same folder as the .kmn file.  The .call_js file must be in UTF-8 format
    (with or without UTF-8 signature).
  </p><p>
  </p><h5><a name="id735304"></a>Versions</h5><p>The call statement was introduced in Keyman 6.0.</p><h5><a name="id735949"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="guide_imx.php" title="DLL Interface for Keyman - Introduction">DLL Interface for Keyman - Introduction</a></p></li><li><p><a class="xref" href="reference__struct.php" title="Language Structure">Language Structure</a></p></li><li><p><a class="xref" href="reference_use.php" title="use statement">use statement</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_begin.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_statements_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_context.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">begin statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> context statement</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
