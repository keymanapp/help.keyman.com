<?php
  require_once('includes/template.php');

  head([
    'title' => "The Keyman Desktop Uniscribe Manager"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">The Keyman Desktop Uniscribe Manager</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="advanced_richedit.php">Prev</a> </td><th width="60%" align="center">Chapter 4. Advanced Help</th><td width="20%" align="right"> <a accesskey="n" href="advanced_language_config.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="advanced_uniscribe">The Keyman Desktop Uniscribe Manager</h2></div></div></div><h3><a name="id631324"></a>What is the Keyman Desktop Uniscribe Manager?</h3><p>
    The Keyman Desktop Uniscribe Manager provides text display support for additional languages that are not supported by the operating system you are using.  It can
    provide support for all languages supported on Windows Vista, in Windows XP, as well as other languages in the future as needed.  The Keyman Desktop Uniscribe Manager
    extends the capabilities of the Windows component called 'Uniscribe'.
  </p><p>
    For example, Tibetan text display is not supported by Windows XP.  Without the Keyman Desktop Uniscribe Manager, Tibetan text will appear as shown in the example on
    the left.  With the Keyman Desktop Uniscribe Manager, text will appear correctly, as shown on the right.
  </p><table><tbody><tr>
        <td>
          <span class="inlinemediaobject"><img src="desktop_images/uniscribe425.png"></span>
        </td>
        <td>
          <span class="inlinemediaobject"><img src="desktop_images/uniscribe626.png"></span>
        </td>
      </tr><tr>
        <td>
          Windows XP SP3 without Keyman Desktop Uniscribe Manager
        </td>
        <td>
          Windows XP SP3 with Keyman Desktop Uniscribe Manager
        </td>
      </tr></tbody></table><p>
    Keyman Desktop will automatically detect when the language you are using needs to have the Keyman Desktop Uniscribe Manager switched on, and will enable it for you.
  </p><h3><a name="id631388"></a>Support for Keyman Desktop Uniscribe Manager</h3><p>
    If you have any display issues when using the Keyman Desktop Uniscribe Manager, please contact <a class="ulink" href="mailto:support@tavultesoft.com" target="_blank">Tavultesoft Support</a> for assistance.
  </p><h3><a name="id631402"></a>Configure Keyman Desktop Uniscribe Manager</h3><p>The Keyman Desktop Uniscribe Manager can be switched on by Keyman Desktop when it detects that it is required, during keyboard installation.  In this situation,
  you would be prompted in the <a class="link" href="advanced_language_config.php" title="Language Configuration Tasks">Language Configuration Tasks dialog</a>.</p><p>You can also turn the Keyman Desktop Uniscribe Manager on or off via Keyman Configuration, <a class="link" href="basic_options_tab.php" title="Keyman Configuration - Options Tab">Options tab</a>.</p><p>
    After enabling or disabling the Keyman Desktop Uniscribe Manager, you will need to restart applications and/or Windows in order for the Keyman 
    Uniscribe Manager to be available.
  </p><h3><a name="id631426"></a>Related Topics</h3><div class="itemizedlist"><ul type="disc"><li><p>
        <a class="xref" href="basic_options_tab.php" title="Keyman Configuration - Options Tab">Keyman Configuration - Options Tab</a>
      </p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="advanced_richedit.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="advanced.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="advanced_language_config.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">The RichEdit Addin </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Language Configuration Tasks</td></tr></table></div>
