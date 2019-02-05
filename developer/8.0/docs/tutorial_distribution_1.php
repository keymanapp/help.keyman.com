<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 1: Choose the distribution licence and branding"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 1: Choose the distribution licence and branding</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_distribution.php">Prev</a> </td><th width="60%" align="center">Distribution Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_distribution_2.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="tutorial_distribution_1">Step 1: Choose the distribution licence and branding</h3></div></div></div><p>
    The Distribution Editor will open on the <span class="guibutton">Licence</span> page.  On this page, select the .kct Branding Source File that
    your distribution will use for its branding and licencing.
  </p><div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3>
    The following information has been updated for builds 7.0.237.0 and later.  Due to issues with uninstallation, it is recommended that 
    a .kct file should only be associated with a single .msi file now.
  </div><p>
    A .kct file should only be associated with a single installer.  If you have a need to package up variations of keyboards with your .msi
    installer, you should use the Package Installer functionality and not include any keyboards in your base .msi installer.
  </p><p>
    After selecting the .kct file, some information will be displayed on the licence page about the status of the file.
    If the .kct has been modified since the last time a distribution was built, a status line indicating that the 'Branding file
    is available but will be encrypted during next build" is displayed; if the branding file has not been modified,
    it will display 'Branding file is ready'.
  </p><p>
    The ProductID assigned to the branding file by the tavultesoft.com server is also shown here.  If no ProductID has been
    assigned, then one will be assigned during the Distribution build, by the tavultesoft.com server.  After the build, the
    .kct file will be updated to include the ProductID that it has been assigned.
  </p><p>
    <a class="xref" href="tutorial_distribution_2.php" title="Step 2: Select files for distribution">Step 2: Select files for distribution</a>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_distribution.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_distribution.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_distribution_2.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Distribution Tutorial </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Step 2: Select files for distribution</td></tr></table></div>
