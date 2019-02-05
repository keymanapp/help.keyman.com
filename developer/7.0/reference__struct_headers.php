<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Header keywords</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference__struct_groups.php">Prev</a> </td><th width="60%" align="center">Language Structure</th><td width="20%" align="right"> <a accesskey="n" href="reference__struct_history.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title"><a name="reference__struct_headers"></a>Header keywords</h4></div></div></div><h5><a name="id775797"></a>System stores</h5><table><tbody><tr>
      <td>&amp;bitmap </td>
      <td><a class="xref" href="reference_bitmap.php" title="Bitmap store and BITMAP statement">Bitmap store and BITMAP statement</a></td>
      <td>An image that appears in the language menu </td>
    </tr><tr>
      <td>&amp;capsalwaysoff, &amp;capsononly, &amp;shiftfreescaps </td>
      <td><a class="xref" href="reference_caps.php" title="Caps Lock stores and statements">Caps Lock stores and statements</a></td>
      <td>Manages CAPS LOCK behaviour </td>
    </tr><tr>
      <td>&amp;copyright </td>
      <td><a class="xref" href="reference_copyright.php" title="Copyright store and COPYRIGHT statement">Copyright store and COPYRIGHT statement</a></td>
      <td>A copyright message for the keyboard </td>
    </tr><tr>
      <td>&amp;ethnologuecode </td>
      <td><a class="xref" href="reference_ethnologuecode.php" title="EthnologueCode system store">EthnologueCode system store</a></td>
      <td>SIL Ethnologue language code for the keyboard </td>
    </tr><tr>
      <td>&amp;hotkey </td>
      <td><a class="xref" href="reference_hotkey.php" title="Hotkey store and HOTKEY statement">Hotkey store and HOTKEY statement</a></td>
      <td>A default activation hotkey </td>
    </tr><tr>
      <td>&amp;includecodes </td>
      <td><a class="xref" href="reference_includecodes.php" title="includecodes system store">includecodes system store</a></td>
      <td>Include list of named character constants </td>
    </tr><tr>
      <td>&amp;language </td>
      <td><a class="xref" href="reference_language.php" title="LANGUAGE statement">LANGUAGE statement</a></td>
      <td>Specifies the system language to install </td>
    </tr><tr>
      <td>&amp;message </td>
      <td><a class="xref" href="reference_message.php" title="Message store and MESSAGE statement">Message store and MESSAGE statement</a></td>
      <td>A message that appears when the keyboard is installed </td>
    </tr><tr>
      <td>&amp;mnemoniclayout </td>
      <td><a class="xref" href="reference_mnemoniclayout.php" title="mnemoniclayout system store">mnemoniclayout system store</a></td>
      <td>Sets the keyboard to be mnemonic or positional </td>
    </tr><tr>
      <td>&amp;name </td>
      <td><a class="xref" href="reference_name.php" title="Name store and NAME statement">Name store and NAME statement</a></td>
      <td>The name of the keyboard </td>
    </tr><tr>
      <td>&amp;version </td>
      <td><a class="xref" href="reference_version.php" title="Version store and VERSION statement">Version store and VERSION statement</a></td>
      <td>The Keyman keyboard version </td>
    </tr></tbody></table><h5><a name="id774651"></a>Header keywords</h5><p>
        Header keywords are being replaced by <a class="link" href="reference__struct_stores.php" title="Using Stores">system stores</a>.  However, all these
        header keywords will continue to be available in future versions of Keyman.  New features will only be
        accessible through system stores.
      </p><table><tbody><tr>
      <td>bitmap</td>
      <td><a class="xref" href="reference_bitmap.php" title="Bitmap store and BITMAP statement">Bitmap store and BITMAP statement</a></td>
      <td>An image that appears in the language menu </td>
    </tr><tr>
      <td>bitmaps </td>
      <td><a class="xref" href="reference_bitmap.php" title="Bitmap store and BITMAP statement">Bitmap store and BITMAP statement</a></td>
      <td>Obsolete (was reference to two images, for Keyman 3.2 keyboards) </td>
    </tr><tr>
      <td>caps (caps on only, caps always off, shift frees caps)</td>
      <td><a class="xref" href="reference_caps.php" title="Caps Lock stores and statements">Caps Lock stores and statements</a></td>
      <td>Manages CAPS LOCK behaviour </td>
    </tr><tr>
      <td>copyright </td>
      <td><a class="xref" href="reference_copyright.php" title="Copyright store and COPYRIGHT statement">Copyright store and COPYRIGHT statement</a></td>
      <td>A copyright message for the keyboard </td>
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
      <td>name </td>
      <td><a class="xref" href="reference_name.php" title="Name store and NAME statement">Name store and NAME statement</a></td>
      <td>The name of the keyboard </td>
    </tr><tr>
      <td>version </td>
      <td><a class="xref" href="reference_version.php" title="Version store and VERSION statement">Version store and VERSION statement</a></td>
      <td>The Keyman keyboard version </td>
    </tr></tbody></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference__struct_groups.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_language_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference__struct_history.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Using Groups </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Keyboard File History</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
