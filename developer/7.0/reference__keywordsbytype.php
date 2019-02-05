<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Keywords by Type</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference__keywordsbyname.php">Prev</a> </td><th width="60%" align="center">Keyman Keyboard Language</th><td width="20%" align="right"> <a accesskey="n" href="reference_language_index.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="reference__keywordsbytype"></a>Keywords by Type</h3></div></div></div><h4><a name="id775285"></a>Header keywords</h4><p>
        Header keywords are being replaced by <a class="link" href="reference__struct_stores.php" title="Using Stores">system stores</a>.  However, all these
        header keywords will continue to be available in future versions of Keyman.  New features will only be
        accessible through system stores.
      </p><table><tbody><tr>
      <td>bitmap </td>
      <td><a class="xref" href="reference_bitmap.php" title="Bitmap store and BITMAP statement">Bitmap store and BITMAP statement</a></td>
      <td>An image that appears in the language menu </td>
    </tr><tr>
      <td>bitmaps </td>
      <td><a class="xref" href="reference_bitmap.php" title="Bitmap store and BITMAP statement">Bitmap store and BITMAP statement</a></td>
      <td>Obsolete (was reference to two images, for Keyman 3.2 keyboards) </td>
    </tr><tr>
      <td>caps </td>
      <td><a class="xref" href="reference_caps.php" title="Caps Lock stores and statements">Caps Lock stores and statements</a></td>
      <td>Manages CAPS LOCK behaviour </td>
    </tr><tr>
      <td>copyright </td>
      <td><a class="xref" href="reference_copyright.php" title="Copyright store and COPYRIGHT statement">Copyright store and COPYRIGHT statement</a></td>
      <td>A copyright message for the keyboard </td>
    </tr><tr>
      <td>&amp;ethnologuecode </td>
      <td><a class="xref" href="reference_ethnologuecode.php" title="EthnologueCode system store">EthnologueCode system store</a></td>
      <td>The SIL Ethnologue code for the language </td>
    </tr><tr>
      <td>hotkey </td>
      <td><a class="xref" href="reference_hotkey.php" title="Hotkey store and HOTKEY statement">Hotkey store and HOTKEY statement</a></td>
      <td>A default activation hotkey </td>
    </tr><tr>
      <td>language </td>
      <td><a class="xref" href="reference_language.php" title="LANGUAGE statement">LANGUAGE statement</a></td>
      <td>Specifies the system language to install </td>
    </tr><tr>
      <td>layout </td>
      <td><a class="xref" href="reference_layout.php" title="LAYOUT statement">LAYOUT statement</a></td>
      <td>Obsolete (was the Windows system layout for the keyboard) </td>
    </tr><tr>
      <td>message </td>
      <td><a class="xref" href="reference_message.php" title="Message store and MESSAGE statement">Message store and MESSAGE statement</a></td>
      <td>A message that appears when the keyboard is installed </td>
    </tr><tr>
      <td>&amp;mnemoniclayout </td>
      <td><a class="xref" href="reference_mnemoniclayout.php" title="mnemoniclayout system store">mnemoniclayout system store</a></td>
      <td>Sets a keyboard to be mnemonic or positional </td>
    </tr><tr>
      <td>name </td>
      <td><a class="xref" href="reference_name.php" title="Name store and NAME statement">Name store and NAME statement</a></td>
      <td>The name of the keyboard </td>
    </tr><tr>
      <td>version </td>
      <td><a class="xref" href="reference_version.php" title="Version store and VERSION statement">Version store and VERSION statement</a></td>
      <td>The Keyman keyboard version </td>
    </tr></tbody></table><h4><a name="id775490"></a>Rule keywords</h4><table><tbody><tr>
      <td>any </td>
      <td><a class="xref" href="reference_any.php" title="any statement">any statement</a></td>
      <td>Matches on an array of characters </td>
    </tr><tr>
      <td>beep </td>
      <td><a class="xref" href="reference_beep.php" title="beep statement">beep statement</a></td>
      <td>Generates a beep on the speaker </td>
    </tr><tr>
      <td>call </td>
      <td><a class="xref" href="reference_call.php" title="call statement">call statement</a></td>
      <td>Calls an Input Method Extension DLL </td>
    </tr><tr>
      <td>context </td>
      <td><a class="xref" href="reference_context.php" title="context statement">context statement</a></td>
      <td>Outputs the context part of a rule </td>
    </tr><tr>
      <td>deadkey </td>
      <td><a class="xref" href="reference_deadkey.php" title="deadkey statement">deadkey statement</a></td>
      <td>Matches and generates deadkeys </td>
    </tr><tr>
      <td>index </td>
      <td><a class="xref" href="reference_index.php" title="index statement">index statement</a></td>
      <td>Outputs from an array of characters </td>
    </tr><tr>
      <td>notany </td>
      <td><a class="xref" href="reference_notany.php" title="notany statement">notany statement</a></td>
      <td>Matches anything not in a particular array of characters </td>
    </tr><tr>
      <td>nul </td>
      <td><a class="xref" href="reference_nul.php" title="nul statement">nul statement</a></td>
      <td>Forces no output on a rule </td>
    </tr><tr>
      <td>outs </td>
      <td><a class="xref" href="reference_outs.php" title="outs statement">outs statement</a></td>
      <td>Outputs an array of characters </td>
    </tr><tr>
      <td>return </td>
      <td><a class="xref" href="reference_return.php" title="return statement">return statement</a></td>
      <td>Stops processing of the current keystroke </td>
    </tr><tr>
      <td>use </td>
      <td><a class="xref" href="reference_use.php" title="use statement">use statement</a></td>
      <td>Starts processing in another group </td>
    </tr></tbody></table><h4><a name="id775671"></a>Structural keywords</h4><table><tbody><tr>
      <td>begin </td>
      <td><a class="xref" href="reference_begin.php" title="begin statement">begin statement</a></td>
      <td>Defines the starting group for the keyboard layout </td>
    </tr><tr>
      <td>group </td>
      <td><a class="xref" href="reference_group.php" title="group statement">group statement</a></td>
      <td>Starts a new group of rules </td>
    </tr><tr>
      <td>match </td>
      <td><a class="xref" href="reference_match.php" title="match rule">match rule</a></td>
      <td>A system rule that is fired when another rule is matched </td>
    </tr><tr>
      <td>nomatch </td>
      <td><a class="xref" href="reference_nomatch.php" title="nomatch rule">nomatch rule</a></td>
      <td>A system rule that is fired when no rule is matched </td>
    </tr><tr>
      <td>store </td>
      <td><a class="xref" href="reference_store.php" title="store statement">store statement</a></td>
      <td>Defines an array of characters </td>
    </tr></tbody></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference__keywordsbyname.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kkl_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_language_index.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Keywords by Name </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Language Structure</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
