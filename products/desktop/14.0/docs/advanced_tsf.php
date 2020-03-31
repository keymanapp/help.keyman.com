<?php
  require_once('includes/template.php');

  head([
    'title' => "Text Services Framework"
  ]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Text Services Framework</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="advanced_locale_edit.php">Prev</a> </td><th width="60%" align="center">Chapter 4. Advanced Help</th><td width="20%" align="right"> <a accesskey="n" href="common.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="advanced_tsf">Text Services Framework</h2></div></div></div><h3><a name="id576474"></a>What is the Text Services Framework?</h3><p>The Text Services Framework, or TSF, is a set of components for modern applications that support advanced input and text processing. It supports features such 
  as keyboard drivers, handwriting recognition, speech recognition,   as well as spell checking and other text processing functions.</p><p>In Windows 7, the Language Bar is the core user interface for TSF. From the Language Bar, you can select the input language, 
  and control keyboard input, handwriting recognition and speech 
  recognition. In Windows 8, the Language Bar is no longer used, and the interface is tightly integrated into the taskbar.</p><p>
    <span class="inlinemediaobject"><img src="desktop_images/language-bar.png"></span>
  </p><p>With Keyman Desktop 9 and later versions, all keyboards are registered through the Windows interfaces, and the
  key advantage is that Keyman Desktop now automatically detects applications that have support for TSF and upgrades the experience for those applications.</p><p>For those applications that support TSF, the most important advantage is that Keyman Desktop can read the current 'context' from the application. The 
  'context' is the characters on the screen around the insertion point. Earlier versions of Keyman Desktop remembered the context while inputting text, but as
  soon as an arrow key was pressed,   or the mouse clicked, Keyman Desktop would forget the context. This means that existing text can be edited in a   
  much more intuitive manner when using TSF.</p><h3><a name="id577215"></a>What applications support TSF?</h3><p>At the time of the release of Keyman Desktop 9.0, TSF was fully supported by some Windows Vista and Windows 7 components, along with Microsoft Word and
  Microsoft Publisher. Other applications support TSF to a varying degree.</p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="advanced_locale_edit.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="advanced.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="common.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">The Locale Editor - Translating the Keyman Desktop User Interface </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Chapter 5. Common Questions</td></tr></table></div>
