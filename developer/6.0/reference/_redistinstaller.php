<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:      Redistributable Installer

TEXT:         The redistributable installer is an executable that contains the following:

TABLE:        "File",                     "Description"
              "keyman.exe",               "Main Keyman program"
              "keyman32.dll",             "Keyman keyboard manager"
              "kmshell.exe",              "Keyman configuration and user interface"
              "keyman.chm",               "Keyman help file"
              "klicence.htm",             "Keyman licence details"
              "kmredist.inf",             "Redistributable installer information file"
              "kmuninst.bin",             "Keyman uninstaller"
              "lpng.dll",                 "PNG image library"

TEXT:         As well as these files, there will be one or more <a href="_package.html">Keyman package (.kmp)
              files</a>.  The user can choose to install any 1 or more or none of these packages.

TEXT:         The executable is stored as a PKZIP-compatible self-extracting archive.  You can open the
              archive in WinZip or other similar programs, but modifications through these applications may
              damage the self-extracting stub program.

REF
); ?>
