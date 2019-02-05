<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 4: Create shortcuts"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 4: Create shortcuts</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_distribution_3.php">Prev</a> </td><th width="60%" align="center">Distribution Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_distribution_5.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="tutorial_distribution_4">Step 4: Create shortcuts</h3></div></div></div><p>
    In the Distribution Editor, click the <span class="guibutton">Shortcuts</span> tab.
  </p><p>
    You need to include Start Menu shortcuts for your product.  You should consider adding
    the following items to the Start Menu:
  </p><div class="itemizedlist"><ul type="disc"><li>Product Startup</li><li>Product Configuration</li><li>Documentation shortcuts</li></ul></div><p>
    You may also wish to include a shortcut to your product on the user's desktop.
  </p><p>
    Click <span class="guibutton">New</span> to add a new shortcut to the package.  Enter a description for the shortcut,
    and select the program or file to start from the Program list.  Four predefined program entries (Start Product),
    (Product Configuration), (Product Help) and (About Product) will be translated into the appropriate shortcuts.
    You will see that you can also select a location and an icon for each product.  Any .ico files you add to
    the Distribution will be available for selection in the Icon combobox.
  </p><div class="tip" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Tip</h3><p>
      Products are listed in the Control Panel Add/Remove Programs applet with Keyman Desktop 7.0.  There is no option
      in the Distribution Editor to create an uninstall shortcut; this matches the Windows logo guidelines for installers.
    </p></div><p>
    <a class="xref" href="tutorial_distribution_5.php" title="Step 5: Compile your distribution">Step 5: Compile your distribution</a>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_distribution_3.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_distribution.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_distribution_5.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Step 3: Fill in details about the distribution </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Step 5: Compile your distribution</td></tr></table></div>
