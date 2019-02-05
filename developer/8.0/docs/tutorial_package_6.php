<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 6: Compiling, testing and distributing a Package"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 6: Compiling, testing and distributing a Package</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_package_5.php">Prev</a> </td><th width="60%" align="center">Package Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_branding.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="tutorial_package_6">Step 6: Compiling, testing and distributing a Package</h3></div></div></div><p>
    In the Package Editor, click on the <span class="guibutton">Compile</span> tab.
  </p><p>
    Click <span class="guibutton">Compile Package</span> to compile the package into a .kmp file.  Compiling takes all the files listed for
    the package, compresses them (using a .ZIP-compatible format) and adds the package information, all into a single file.  If any
    files are not available, an error will be listed in the Messages window.
  </p><p>
    After compiling, you can test the package installation in Keyman Desktop, by clicking <span class="guibutton">Install Package</span>.  You
    should test that all the keyboards and fonts install successfully, that the Readme and Welcome files are displayed during the install,
    and that the documentation is accessible to the end user.  Make sure that the On Screen Keyboard installs with your keyboards, and that
    the shortcuts are correctly listed and working in the Start Menu.
  </p><h4><a name="id598152"></a>Distributing a package on the Tavultesoft website</h4><p>
    Once you have tested the package to your satisfaction, it is time to distribute it. We recommend uploading your package 
    to the Tavultesoft website -- this makes it easy to download and install through the Keyman Configuration interface.  To upload a package 
    to Tavultesoft:
  </p><div class="orderedlist"><ol type="1"><li><p>
      Click <span class="guibutton">Upload to Tavultesoft</span> in the <span class="guibutton">Compile</span> tab.  A window will appear, listing the keyboards
      that you have already uploaded to Tavultesoft; if you have already uploaded your keyboard, then select that from the list.  Otherwise, 
      select (Upload new keyboard) to create a new upload.  Click <span class="guibutton">Upload</span> to start the upload process.  This may take
      a minute or two, depending on the size of the package.</p></li><li><p>
      After the upload completes, your web browser will be opened to an Edit Keyboard page.  Fill in the details on this page, and click Update
      Keyboard.  You can also add links to your own website, or upload additional documentation for the keyboard.
    </p></li><li><p>
      When you have finished all this, click <span class="guibutton">Publish Keyboard</span> at the bottom of the page, to have the keyboard published
      on the Tavultesoft website, at http://www.tavultesoft.com/keyman/downloads/keyboards/.  Each keyboard uploaded is checked by Tavultesoft
      before it is listed, so it will take a day or two for the keyboard to appear on the downloads page.  If Tavultesoft find any issues with
      the keyboard, you will be contacted with details.
    </p></li></ol></div><div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3><p>
      Packages that are listed on the Tavultesoft website, but where the file is hosted elsewhere 
      do not receive any icon ratings (see <a class="link" href="tutorial_package_1.php" title="Step 1: What do we include?">Step 1</a> for details).
    </p></div><p>
    Additional advantages to hosting on the Tavultesoft website include access to a forum for your
    keyboard on the Tavultesoft website -- here, Tavultesoft staff and the Keyman community can also
    provide assistance to your end users.
  </p><h4><a name="id598215"></a>Distributing a package on your own website</h4><p>
    If you distribute a package on your own site, we have the following recommendations:
  </p><div class="itemizedlist"><ul type="disc"><li><p>
      1) Ensure the MIME type on the web server or folder for .KMX and .KMP files is set up to
      application/octet-stream. Without this, .KMP files will be recognised as .ZIP files -- this
      is not helpful to the end user as it will be opened in the wrong application. If you can't
      make this change, consider hosting the keyboard package on the Tavultesoft website to make
      things easier for your end user.
    </p></li><li><p>
      2) Avoid putting the .KMP file in an archive (e.g. .ZIP) or self-expanding archive (.EXE) -
      this makes it harder for end users to install. A .KMP file is already compressed (it is
      actually just a ZIP archive file!) and you won't save much space by recompressing it.
    </p></li><li><p>
      3) Include a link to the Keyman download page: http://www.tavultesoft.com/keyman/downloads/
    </p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_package_5.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_package.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_branding.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Step 5: Shortcuts </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Branding Tutorial</td></tr></table></div>
