<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">CSS classes for Visual Keyboard</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw__keyboarddesign.php">Prev</a> </td><th width="60%" align="center">KeymanWeb</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw__uimodes.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="reference_kmw__css"></a>CSS classes for Visual Keyboard</h3></div></div></div><p>
    KeymanWeb defines a number of CSS classes for the Visual Keyboard, to allow you to override its default
    formatting and display.
  </p><p>
    You can also control the color of a key when the mouse pointer moves over or when it is clicked.  Due to bugs
    in Internet Explorer's CSS handling, we have chosen not to support these additional states as CSS classes, but instead
    have defined three global variables: KeymanWeb_KeyDownColor, KeymanWeb_KeyHoverColor, KeymanWeb_ControlDownColor
  </p><p>
    The following classes are defined:
    </p><table class="simplelist" border="0" summary="Simple list"></table><p>
  </p><p>
    In addition, each cap and character can be addressed separately:
    </p><table class="simplelist" border="0" summary="Simple list"></table><p>
  </p><p>
    See the following diagram for the relevant positions:

    </p><pre class="programlisting">
 `   1   2   3   4   5   6   7   8   9   0   -   =
0   1   2   3   4   5   6   7   8   9   10  11  12

   Q   W   E   R   T   Y   U   I   O   P   [   ]
  16  17  18  19  20  21  22  23  24  25  26  27
    A   S   D   F   G   H   J   K   L   ;   '
   32  33  34  35  36  37  38  39  40  41

 *   Z   X   C   V   B   N   M   ,   .   /
48  49  50  51  52  53  54  55  56  57  58

            [space bar]
                64
    </pre><p>
  </p><p>
    To modify the formatting of shifted characters, add the following value to the position:
    </p><table class="simplelist" border="0" summary="Simple list"></table><p>
  </p><p>
    Examples:
    </p><table class="simplelist" border="0" summary="Simple list"></table><p>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw__keyboarddesign.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw__uimodes.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Keyboard Design </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> User Interface Modes</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
