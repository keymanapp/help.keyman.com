<?php
  require_once('includes/template.php');

  head([
    'title' => "Distribution Editor"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Distribution Editor</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="context_frmKCTMain.php">Prev</a> </td><th width="60%" align="center">Chapter 5. Context Help</th><td width="20%" align="right"> <a accesskey="n" href="context_frmOSKEditor.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="context_frmInstallerEditor">Distribution Editor</h2></div></div></div><p>
    The Distribution Editor allows you to create an installer for a product based on Keyman Engine.
  </p><div class="itemizedlist"><ul type="disc"><li><a class="xref" href="tutorial_distribution.php" title="Distribution Tutorial">Distribution Tutorial</a></li><li><a class="xref" href="reference_tools_wix.php" title="Windows Installer XML (WiX)">Windows Installer XML (WiX)</a></li></ul></div><p>
    Note: If you copy an installer source file, you must delete the GUID (globally unique identifier) section from the 
    file because the GUIDs are specific to that particular installer file.  Keyman Developer will then
    regenerate the GUIDs as needed.
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="context_frmKCTMain.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="context.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="context_frmOSKEditor.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Branding Editor </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> On Screen Keyboard Editor</td></tr></table></div>
