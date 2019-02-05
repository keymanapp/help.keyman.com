<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Caps Lock stores and statements</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_bitmap.php">Prev</a> </td><th width="60%" align="center">Headers and System Stores</th><td width="20%" align="right"> <a accesskey="n" href="reference_copyright.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title"><a name="reference_caps"></a>Caps Lock stores and statements</h4></div></div></div><p>
        These are three optional header statements that Keyman recognizes, all working with Caps Lock.  The 
        first statement, "Caps Always Off", makes sure that Caps Lock cannot be turned on while the keyboard 
        is active, and it turns Caps Lock off when the keyboard is switched on.  Put this statement on its own line 
        in the header.
      </p><p>
        The other two statements, "Caps On Only", and "Shift Frees Caps" are usually used together.  "Caps On Only" 
        makes the Caps Lock key like a typewriter Caps Lock, where pressing it turns it on only.
        "Shift Frees Caps" tells Keyman to recognize the use of the Shift key to turn Caps Lock off.  Using these
        two together makes Keyman work like many European keyboards.  These two statements each take a single line
        in the header.
      </p><h5><a name="id735321"></a>Example</h5><pre class="programlisting">
store( &amp;capsalwaysoff ) "1"
store( &amp;capsononly ) "1"
store( &amp;shiftfreescaps ) "1"

CAPS ALWAYS OFF
CAPS ON ONLY
SHIFT FREES CAPS
      </pre><h5><a name="id735541"></a>Versions</h5><p>The caps statement was introduced in Keyman 5.0.</p><h5><a name="id735378"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference__struct.php" title="Language Structure">Language Structure</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_bitmap.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_systemstores_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_copyright.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Bitmap store and BITMAP statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Copyright store and COPYRIGHT statement</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
