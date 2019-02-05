<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">On Screen Keyboard Editor</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="context_frmInstallerEditor.php">Prev</a> </td><th width="60%" align="center">Chapter 5. Context Help</th><td width="20%" align="right"> <a accesskey="n" href="context_frmEditor.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both"><a name="context_frmOSKEditor"></a>On Screen Keyboard Editor</h2></div></div></div><p>
        The Visual Keyboard Editor allows you to create a layout of a keyboard for use as an on-screen reference.  This
        keyboard layout can also be printed or included in HTML or other documentation.  The editor allows you to export the
        file to HTML, PNG or BMP formats.
      </p><p>
        Note that the visual keyboard functionality is designed for positional layouts.  With 
        <a class="link" href="reference_mnemoniclayout.php" title="mnemoniclayout system store">mnemonic layouts</a>, the position of the characters on the keycaps will move according
        to the user's actual keyboard.
      </p><table class="simplelist" border="0" summary="Simple list"><tr><td>
Character Set:
</td><td>
 Display the selected key on the keyboard and any combinations with the Shift, Ctrl and Alt keys.
 </td></tr><tr><td>
 The selected character set chosen on the Details tab.
 </td><td>
Text
</td></tr><tr><td>
Font:
</td><td>
 Type in the character for the selected key.
 </td></tr><tr><td>
 Displays the selected font for the keyboard. Click on the link to change.
 </td><td>
Bitmap
</td></tr><tr><td>
Fill from layout
</td><td>
 You can also use bitmap images for the keycaps.  This can often help in clarity for complex fonts. 
 </td></tr><tr><td>
 Use the same layout as the new keyboard, assigning the same characters to the same keyboard letters.
 </td><td>
Display underlying layout characters
</td></tr><tr><td>
Import
</td><td>
 If selected, then the visual keyboard will only be used if the current underlying layout is active.  This feature is not currently supported in Keyman. 
 </td></tr><tr><td>
 Import an existing keyboard layout.
 </td><td> 
Distinguish between left and righ Ctrl/Alt (implies (AltGr)
</td></tr><tr><td>
Export
</td><td>
 If selected, the visual keyboard editor will allow you to have different characters displayed depending on whether left or right Ctrl/Alt are depressed.
 </td></tr><tr><td>
 Export the keyboard to other file formats (HTML, BMP, or PNG), for use in documentation.
Export the structure of the keyboard to XML format for automated processing. 
</td><td>
Include 102nd key used on European keyboards
</td></tr><tr><td> 
Key
</td><td>
 If selected, displays the 102nd key to the right of the left-hand shift key.
 </td></tr></table><h3><a name="id775841"></a>1. Introduction</h3><p>
        On this page, you should enter the name of your Keyman keyboard that this visual keyboard is for.  Use the filename
        of the keyboard, not its display name, and do not include either path or extension.  For example, if your keyboard is
        <code class="filename">c:\My Documents\Keyboards\Hindi.kmx</code>, then use the text <strong class="userinput"><code>Hindi</code></strong>.
      </p><p>
        At this point, you can also select a .kmx file to import into the Visual Keyboard Editor.  The editor will use the 
        keyboard to generate the base characters for a layout.
      </p><p>
        Keyman Developer Professional users can import a .xml file that describes the visual keyboard.  The DTD for visual keyboards is
        available at http://www.tavultesoft.com/keymandev/visualkeyboard.dtd.
      </p><h3><a name="id776119"></a>2. Options</h3><p>
        The following options are available for visual keyboards:
        </p><div class="itemizedlist"><ul type="disc"><li><p>Distinguish between left and right Ctrl/Alt (implies AltGr): If selected, the visual keyboard editor will allow you to have different characters displayed depending on whether left or right Ctrl/Alt are depressed.</p></li><li><p>Include 102nd key used on European keyboards: If selected, displays the 102nd key (K_oE2 in .kmn files) to the right of the left-hand shift key.</p></li><li><p>Display underlying layout characters: Switches on the display of the default characters on the key caps.</p></li><li><p>Associate with underlying layout: If selected, then the visual keyboard will only be used if the current underlying layout is active.  This feature is not currently supported in Keyman.</p></li></ul></div><p>
      </p><h3><a name="id780562"></a>3. Layout Keyboard</h3><p>
        In this screen, you should type the characters you wish to have appear on the key caps.  Note that you should use the 
        actual character, and you can use any ANSI or Unicode character, even if designing an Code Page/Custom layout.  You will
        find the character map useful for inserting characters.
      </p><p>
        You can also use bitmap images for the keycaps.  This can often help in clarity for complex fonts.
      </p><p>
        Don't forget to configure both ANSI and Unicode layouts for the keyboard.
      </p><h3><a name="id781068"></a>4. Finish</h3><p>
        At this point, you should save the visual keyboard.  It is appropriate to include the visual keyboard in a package with the
        keyboard that it is associated with; if you do this, it will be automatically installed for the end user.
      </p><p>
        You can also export the keyboard to other file formats (HTML, BMP, or PNG), for use in documentation.
      </p><p>
        Keyman Developer Professional users can also export the structure of the keyboard to XML format for automated processing.
      </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="context_frmInstallerEditor.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="context.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="context_frmEditor.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Distribution Editor </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Editor Window</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
