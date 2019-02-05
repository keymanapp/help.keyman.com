<?php
  require_once('includes/template.php');

  head([
    'title' => "Package Files"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Package Files</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference__english.php">Prev</a> </td><th width="60%" align="center">Language Structure</th><td width="20%" align="right"> <a accesskey="n" href="reference__struct_registry.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference__package">Package Files</h4></div></div></div><p>
        Package files contain a single keyboard, along with readme files, fonts and any other files 
        you wish to include.  We recommend creating a package file to bundle your keyboard with fonts and
        help into a simple, single file that is easy for an end-user to install.
      </p><p>
        Keyman can install package files, including installing fonts, creating Start Menu shortcuts, and
        adding appropriate registry entries for uninstallation.
      </p><p>
        Internally, as well as your own files, the package file will contain a file "kmp.inf", which lists
        the details Keyman needs to install the package.  The package file is a PKZIP-compatible archive, and
        if you have any archiving tools installed, you should be able to right-click on a .kmp package and
        click "Open With WinZip" or similar entry.
      </p><p>
        The context menu for a package file has three extra entries: "View" (which lets you view a package 
        without it being installed), "Install", and "Open With WinZip" or similar.
      </p><p>
        See <a class="link" href="">Creating Packages</a> for more information.
      </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference__english.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_language_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference__struct_registry.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">US English keyboard layout </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Registry Settings</td></tr></table></div>
