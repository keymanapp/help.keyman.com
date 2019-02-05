<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 3: Fill in details about the distribution</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_distribution_2.php">Prev</a> </td><th width="60%" align="center">Distribution Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_distribution_4.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="tutorial_distribution_3"></a>Step 3: Fill in details about the distribution</h3></div></div></div><p>
    In the Distribution Editor, select the <span class="guibutton">Details</span> tab.
  </p><h4><a name="id736932"></a>Destination Path</h4><p>
    Choose the destination path for your product.  Note that the "C:\Program Files\" label is only descriptive - the actual
    name of the Program Files folder depends on the installed locale of the destination computer.  You can include subfolders
    in the path name, for example "Tavultesoft\Quick French Sample" - the Distribution Editor will understand this and
    create a subfolder accordingly.
  </p><h4><a name="id736939"></a>EULA</h4><p>
    Next, select the End User Licence Agreement (EULA) file for your product.  Due to restrictions in Windows Installer, the EULA
    must be in RTF format.  Most word processing applications support RTF.
  </p><h4><a name="id736947"></a>Product Name</h4><p>
    The product name displayed on this page is not editable - it has been extracted from the .kct file and is displayed for
    reference only.
  </p><h4><a name="id736954"></a>Version Number</h4><p>
    The version number for the product must be a 3 part number, for example "1.0.3".  Whenever you make an updated version of
    your product, you must increment this version number.  Changing the version number tells the Distribution Editor to
    setup an upgrade for the product and sets the internal GUIDs accordingly.
  </p><p>
    After updating the version number, the new installer will install cleanly over existing installations, upgrading any files
    necessary automatically.  The user will not need to uninstall the old version first.
  </p><p>
    It is also possible to generate a .msp patch file from the old and new versions of the .msi files, using WiX and the Windows
    Installer SDK, but that is beyond the scope of this tutorial.  Patch files created in this manner can be sent to Tavultesoft
    in order for the Online Update functionality in Keyman Engine to be available automatically in your product.  Please contact
    Tavultesoft Support for further information.
  </p><div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3><p>
      If you distribute an updated version of Keyman Engine at any time, you should also increment the version number of
      your product.
    </p></div><h4><a name="id736975"></a>Other Fields</h4><p>The Copyright, Author, Email and Website fields must be completed.</p><h4><a name="id736983"></a>Locale Folder</h4><p>
    If you have provided translations for the user interface in your product, you should
    include them in a locale subfolder, just as in Keyman Desktop.  Select this locale folder
    on this page in order to include all the files and subfolders there in the installer.
  </p><p>
    <a class="xref" href="tutorial_distribution_4.php" title="Step 4: Create shortcuts">Step 4: Create shortcuts</a>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_distribution_2.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_distribution.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_distribution_4.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Step 2: Select files for distribution </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Step 4: Create shortcuts</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
