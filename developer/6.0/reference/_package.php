<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:      Package Files

TEXT:         Package files contain a single keyboard, along with readme files, fonts and any other files 
              you wish to include.  We recommend creating a package file to bundle your keyboard with fonts and
              help into a simple, single file that is easy for an end-user to install.

TEXT:         Keyman can install package files, including installing fonts, creating Start Menu shortcuts, and
              adding appropriate registry entries for uninstallation.

TEXT:         Internally, as well as your own files, the package file will contain a file "kmp.inf", which lists
              the details Keyman needs to install the package.  The package file is a PKZIP-compatible archive, and
              if you have any archiving tools installed, you should be able to right-click on a .kmp package and
              click "Open With WinZip" or similar entry.

TEXT:         The context menu for a package file has three extra entries: "View" (which lets you view a package 
              without it being installed), "Install", and "Open With WinZip" or similar.
              
TEXT:         See <a href="../main/creating_packages.html">Creating Packages</a> for more information.

REF
); ?>
