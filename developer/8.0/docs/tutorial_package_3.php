<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 3: Creating a package and adding files"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 3: Creating a package and adding files</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_package_2.php">Prev</a> </td><th width="60%" align="center">Package Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_package_4.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="tutorial_package_3">Step 3: Creating a package and adding files</h3></div></div></div><p>
    We are finally ready to open up the Package Editor and create the new package.
  </p><div class="itemizedlist"><ul type="disc"><li><p>
        In the Project Window in Keyman Developer,
        click the <span class="guibutton">Packages</span> tab, and click <span class="guibutton">New Package...</span>.  Enter the path and
        filename of the package you are creating.
      </p><div class="tip" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Tip</h3><p>In this tutorial, you could call the package <code class="filename">qfrench.kps</code>.</p></div><p>A package source file will have the extension .kps, and will be compiled in a file with extension .kmp.</p><p>After you click OK, the Package Editor will open with the Files tab visible.</p></li><li><p>
        In the Files tab, click <span class="guibutton">Add</span> to add all the files we discussed in the previous step to the package.
        You can add multiple files at once, and from multiple folders.  When the package is compiled, all the files will be placed
        in the same folder within the package.
      </p><p>
        You could stop here. This would be a completely valid package, but it would not be as good as it could be.  So let's continue
        on to the next step, and fill in some descriptions of the package.
      </p></li></ul></div><p>
    <a class="xref" href="tutorial_package_4.php" title="Step 4: Filling in package details">Step 4: Filling in package details</a>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_package_2.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_package.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_package_4.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Step 2: Creating Additional Files for the Package </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Step 4: Filling in package details</td></tr></table></div>
