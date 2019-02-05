<?php
  require_once('includes/template.php');

  head([
    'title' => "Options Dialog"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Options Dialog</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="context_frmKeyTest.php">Prev</a> </td><th width="60%" align="center">Chapter 5. Context Help</th><td width="20%" align="right"> <a accesskey="n" href="context_frmStartup.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="context_frmOptions">Options Dialog</h2></div></div></div><p>
        The following options are configurable in TIKE in the <span class="guilabel">Editor</span> tab:
      </p><h3><a name="id638932"></a>General</h3><table><tbody><tr>
      <th>Setting</th>
      <th>Description</th>
    </tr><tr>
      <td>
            Show splash screen
          </td>
      <td>
            If checked, displays a splash screen when TIKE is started.
          </td>
    </tr><tr>
      <td>
            Check file associations
          </td>
      <td>
            If checked, makes sure that .kmn and .kps files are opened with TIKE.
          </td>
    </tr><tr>
      <td>
        External Editor
      </td>
      <td>
        You can open any Keyman source file shown in the project in an external text editor by right-clicking on the file and selecting "Open in External Editor".
        The files available for editing externally are .kmn, .kps and .kpp.  .kct and .kvk files are in a binary format and cannot be edited outside the TIKE
        environment.  This field configures which editor you wish to use to edit the files.  Note: if you need to pass command line parameters to the editor,
        you will need to wrap the command in a batch file and reference the batch file here.
      </td>
    </tr><tr>
      <td>
            Warn if including .doc files in packages
          </td>
      <td>
            If checked, the package editor will display a warning about potential viruses in .doc files.
          </td>
    </tr></tbody></table><h3><a name="id685934"></a>Editor</h3><table><tbody><tr>
      <th>Setting</th>
      <th>Description</th>
    </tr><tr>
      <td>
            Use tab character
          </td>
      <td>
            Sets whether to use the Tab character or spaces for indents.
          </td>
    </tr><tr>
      <td>
            Link quoted font size to primary font size
          </td>
      <td>
            If checked, the quoted font size will be the same as the default font size.
          </td>
    </tr><tr>
      <td>
            Indent size
          </td>
      <td>
            The indent size, measured in number of spaces.
          </td>
    </tr><tr>
      <td>
            Default font
          </td>
      <td>
            Sets the font for ordinary text in the editor.
          </td>
    </tr><tr>
      <td>
            Quoted font
          </td>
      <td>
            Sets the font for displaying comments text in single or double quotes in the editor.
          </td>
    </tr></tbody></table><h3><a name="id685861"></a>Colours</h3><p>
        Allows you to configure the syntax highlighting used in the editor window.
        You can set colours and font styles for each of the different segments of code, or disable syntax highlighting.
      </p><h3><a name="id685849"></a>Debugger</h3><table><tbody><tr>
      <th>Setting</th>
      <th>Description</th>
    </tr><tr>
      <td>
            Use old debugger
          </td>
      <td>
            Enables the Keyman 5-style Test window instead of the debugger.
          </td>
    </tr><tr>
      <td>
            Breakpoints fire also when exiting line
          </td>
      <td>
            Breakpoints will fire when a rule has finished being processed also.
          </td>
    </tr><tr>
      <td>
            Turn on single step after breakpoint
          </td>
      <td>
            Activates single-step mode after a breakpoint fires.
          </td>
    </tr><tr>
      <td>
            Show matched character offsets in stores
          </td>
      <td>
            Displays numeric indices of characters in stores
          </td>
    </tr></tbody></table><h3><a name="id685786"></a>Character Map</h3><table><tbody><tr>
      <th>Setting</th>
      <th>Description</th>
    </tr><tr>
      <td>
            Find character under cursor automatically
          </td>
      <td>
            The character beneath the cursor in the edit window will be highlighted in the Character Map.  This will intelligently
            parse the character data under the cursor so that a character code (e.g. U+1234) will be highlighted correctly.
          </td>
    </tr><tr>
      <td>
            Disable database lookups
          </td>
      <td>
            Disables looking characters up in the database.
          </td>
    </tr><tr>
      <td>
            Rebuild database
          </td>
      <td>
            Rebuilds the Unicode character database from source unicodedata.txt and blocks.txt.  These files can be downloaded
            from the Unicode website at <a class="ulink" href="http://www.unicode.org/ucd/" target="_blank">http://www.unicode.org/ucd/</a>.  This lets
            you update the character map with a newer version of Unicode.  Keyman Developer 7.0 was released with Unicode version 5.0
            data.
          </td>
    </tr></tbody></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="context_frmKeyTest.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="context.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="context_frmStartup.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Virtual Key Identifier </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Splash Screen</td></tr></table></div>
