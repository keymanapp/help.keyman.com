<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 2: Select files for distribution</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_distribution_1.php">Prev</a> </td><th width="60%" align="center">Distribution Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_distribution_3.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="tutorial_distribution_2"></a>Step 2: Select files for distribution</h3></div></div></div><p>
    In the Distribution Editor, select the <span class="guibutton">Files</span> tab.
  </p><p>
    In the <span class="guibutton">Files</span> tab, you need to choose all the files that will be installed.  Typically, you
    will put fonts, keyboards and documentation into a .kmp package, and include the package here, rather than including
    the files separately.  However, if you want to include a shortcut to the documentation, you will need to include the
    documentation files directly here instead of putting them into the package.
  </p><p>
    You will also see the .kct that you selected in the previous step in the list of files here.
  </p><p>
    If you are using your own user interface, that is, instead of customising the Keyman Desktop user interface, you
    should add the relevant files and applications here.  Note that the Distribution editor does not support subfolders (apart
    from the locale folder - see the next step for details) - all files will be placed in one folder when installed.  If your
    application requires subfolders, you could use the Distribution Editor to create a WiX file as a starting point for
    your installer, and then customise the WiX file yourself.
  </p><div class="tip" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Tip</h3><p>
      Do not try and add files from the Keyman Engine or from Keyman Desktop here.  They will be automatically included as
      required during the build process.
    </p></div><p>
    At this time, you should also choose the addins that you wish to include in your product.
  </p><p>
    <a class="xref" href="tutorial_distribution_3.php" title="Step 3: Fill in details about the distribution">Step 3: Fill in details about the distribution</a>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_distribution_1.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_distribution.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_distribution_3.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Step 1: Choose the distribution licence and branding </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Step 3: Fill in details about the distribution</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
