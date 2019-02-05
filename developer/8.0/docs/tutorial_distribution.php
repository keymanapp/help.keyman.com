<?php
  require_once('includes/template.php');

  head([
    'title' => "Distribution Tutorial"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Distribution Tutorial</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_branding_6.php">Prev</a> </td><th width="60%" align="center">Chapter 3. Tutorials</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_distribution_1.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="tutorial_distribution">Distribution Tutorial</h2></div></div></div><div class="toc"><dl><dt><span class="section"><a href="tutorial_distribution_1.php">Step 1: Choose the distribution licence and branding</a></span></dt><dt><span class="section"><a href="tutorial_distribution_2.php">Step 2: Select files for distribution</a></span></dt><dt><span class="section"><a href="tutorial_distribution_3.php">Step 3: Fill in details about the distribution</a></span></dt><dt><span class="section"><a href="tutorial_distribution_4.php">Step 4: Create shortcuts</a></span></dt><dt><span class="section"><a href="tutorial_distribution_5.php">Step 5: Compile your distribution</a></span></dt></dl></div><p>
    The distribution editor provides tools to create an installer for your product, using
    industry-standard Windows Installer (.msi) technology.  The installer embeds your keyboards,
    your product customisation and the Keyman Engine for a simple installation experience, and
    supports upgrades, patches and even complex deployment requirements for large organisations.
  </p><p>
    When you are creating a shareware-licensed product, the distribution editor also adds copy
    protection to your keyboards and product file during the compilation process.
  </p><div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3><p>
      You must purchase a licence for the Branding Pack before you can use the Branding Editor or
      the Distribution Editor in Keyman Developer.
    </p></div><p>
    The distribution editor creates a <a class="link" href="reference_tools_wix.php" title="Windows Installer XML (WiX)">WiX source file</a> that
    you can extend and compile yourself using the WiX tools.  Although the Distribution Editor hides
    much of the detail of creating an MSI installer, an understanding of both WiX and MSI will be
    useful.
  </p><div class="itemizedlist"><ul type="disc"><li>
      Learn more about WiX at: <a class="ulink" href="http://wix.sourceforge.net/" target="_blank">wix.sourceforge.net</a>.  In particular,
      the tutorial is very helpful in gaining an understanding of the principles behind WiX and Windows Installer.
    </li><li>
      Learn more about Windows Installer at: <a class="ulink" href="http://msdn2.microsoft.com/en-us/library/aa372866.aspx" target="_blank">msdn.microsoft.com</a> and
      <a class="ulink" href="http://en.wikipedia.org/wiki/Microsoft_Installer" target="_blank">Wikipedia</a>.
    </li></ul></div><p>
    Let's get started.  Open the Project window in Keyman Developer, select the Distribution tab, and
    click <span class="guibutton">New Distribution</span>.  Enter a filename, for example, qfrench.kpp, and click
    <span class="guibutton">OK</span>.
  </p><p>
    <a class="xref" href="tutorial_distribution_1.php" title="Step 1: Choose the distribution licence and branding">Step 1: Choose the distribution licence and branding</a>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_branding_6.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorials.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_distribution_1.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Step 6: Customising user interface files </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Step 1: Choose the distribution licence and branding</td></tr></table></div>
