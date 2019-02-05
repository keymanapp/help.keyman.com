<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Bitmap store and BITMAP statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_systemstores_index.php">Prev</a> </td><th width="60%" align="center">Headers and System Stores</th><td width="20%" align="right"> <a accesskey="n" href="reference_caps.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title"><a name="reference_bitmap"></a>Bitmap store and BITMAP statement</h4></div></div></div><pre class="programlisting">
store( &amp;bitmap ) "%bmpfile%"

BITMAP %bmpFile%
      </pre><p>
        Specifies the bitmap associated with the keyboard file.  The bmpFile can be specified as a full path, 
        or relative to the keyboard, or, if in the same directory, simply as the name of the file without the 
        '.bmp' extension.  The bitmap filename must be enclosed in quotes when using the store() syntax.
      </p><p>
        The bitmap statement is not required in Keyman 5.  However, if you leave it out, a black box will currently 
        be displayed.  This may be changed in the future for a simple generic image.
      </p><p>
        
      </p><h5><a name="id736026"></a>Example</h5><pre class="programlisting">
store( &amp;bitmap ) "keyboard.bmp"
      </pre><h5><a name="id736068"></a>Versions</h5><p>The BITMAPS statement was introduced in Keyman 3.0. This statement replaces the BITMAPS statement from Keyman 3.0.  Keyman 4 only required one bitmap.  Keyman 5 now makes the statement completely optional.</p><h5><a name="id735211"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference__struct_headers.php" title="Header keywords">Header keywords</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_systemstores_index.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_systemstores_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_caps.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Headers and System Stores </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Caps Lock stores and statements</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
