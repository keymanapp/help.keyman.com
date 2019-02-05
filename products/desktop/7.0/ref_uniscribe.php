<?php
  require_once('includes/template.php');
  
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']
  ]);
?>
<body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Keyman Uniscribe Manager</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="ref_tsf.php">Prev</a> </td><th width="60%" align="center">Chapter 3. Reference Documentation</th><td width="20%" align="right"> <a accesskey="n" href="langsetup.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="ref_uniscribe">Keyman Uniscribe Manager</h2></div></div></div><h3><a name="id757275"></a>What is the Keyman Uniscribe Manager?</h3><p>
    The Keyman Uniscribe Manager provides text display support for additional languages that are not supported by the operating system you are using.  It can
    provide support for all languages supported on Windows Vista, in Windows XP, as well as other languages in the future as needed.  The Keyman Uniscribe Manager
    extends the capabilities of the Windows component called "Uniscribe".
  </p><p>
    For example, Tibetan text display is not supported by Windows XP.  Without the Keyman Uniscribe Manager, Tibetan text will appear as shown in the example on
    the left.  With the Keyman Uniscribe Manager, text will appear correctly, as shown on the right.
  </p><table><tbody><tr>
        <td>
          <span class="inlinemediaobject"><img src="images%5Cuniscribe425.png"></span>
        </td>
        <td>
          <span class="inlinemediaobject"><img src="images%5Cuniscribe626.png"></span>
        </td>
      </tr><tr>
        <td>
          Windows XP SP3 without Keyman Uniscribe Manager
        </td>
        <td>
          Windows XP SP3 with Keyman Uniscribe Manager
        </td>
      </tr></tbody></table><p>
    Keyman will automatically detect when the language you are using needs to have the Keyman Uniscribe Manager switched on, and will enable it for you.
  </p><h3><a name="id757626"></a>Support for Keyman Uniscribe Manager</h3><p>
    If you have any display issues when using the Keyman Uniscribe Manager, please contact Tavultesoft Support for assistance.
  </p><h3><a name="id757633"></a>Command-line configuration</h3><p>
    The Keyman Uniscribe Manager can also be installed and uninstalled from the command line, using the kmuspmgr.exe program.  This program is located in
    [Common Files]\Tavultesoft\Keyman Engine 7.0.  kmuspmgr.exe has three options:
  </p><div class="itemizedlist"><ul type="disc"><li>-c: Check if Keyman Uniscribe Manager is enabled (if it is, then it returns ERRORLEVEL 1)</li><li>-u: Uninstall the Keyman Uniscribe Manager</li><li>-i: Install Keyman Uniscribe Manager</li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="ref_tsf.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="langsetup.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Keyman Desktop and the Text Services Framework </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Chapter 4. Language Configuration Tasks Documentation</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
