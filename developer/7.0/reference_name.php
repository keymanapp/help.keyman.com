<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Name store and NAME statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_mnemoniclayout.php">Prev</a> </td><th width="60%" align="center">Headers and System Stores</th><td width="20%" align="right"> <a accesskey="n" href="reference_version.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title"><a name="reference_name"></a>Name store and NAME statement</h4></div></div></div><pre class="programlisting">
store( &amp;name ) "%tsKeyboardName%"

NAME %tsKeyboardName%
      </pre><p>
        The NAME statement lets you give a more descriptive name to your keyboard than just the 
        file name.  If NAME isn't specified in the keyboard file, Keyman will use the filename
        of the keyboard, excluding the extension, so the NAME statement is optional.
      </p><p>
        If a name is specified in the keyboard file, care should be taken to ensure that you give
        it an easily recognisiable and unique name.  For example, rather than call your keyboard
        "Dutch", which would confuse users who have the Windows' Dutch keyboard already installed,
        you should call your keyboard "My Dutch" or "Modified Dutch".
      </p><p>
        gnGroup: The name of the new group.
      </p><h5><a name="id708933"></a>Example</h5><pre class="programlisting">
store( &amp;name ) "Modified Dutch"
      </pre><h5><a name="id708522"></a>Versions</h5><p>The name statement was introduced in Keyman 3.0.</p><h5><a name="id708576"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference__struct_headers.php" title="Header keywords">Header keywords</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_mnemoniclayout.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_systemstores_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_version.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">mnemoniclayout system store </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Version store and VERSION statement</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
