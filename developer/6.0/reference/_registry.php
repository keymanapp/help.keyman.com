<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:      Registry Settings

TEXT:         <font color="red">This document is incomplete: please contact Tavultesoft Support if you need further information about
              Keyman registry settings.</font>

TEXT:         Keyman makes changes to the registry in the following locations (the values modified are not listed here,
              only the general locations):

VTABLE:       "Location", "Information"
              "HKEY_CLASSES_ROOT\.kmx<br>HKEY_CLASSES_ROOT\.kmp<br>
              HKEY_CLASSES_ROOT\Keyman.File.Keyboard<br>HKEY_CLASSES_ROOT\Keyman.File.Package<br>",
              "File associations in Explorer"
              "HKEY_CURRENT_USER\Software\Tavultesoft\Keyman\\6.0", "Keyman user settings"
              "HKEY_CURRENT_USER\Software\Tavultesoft\Keyman\\6.0\Active Keyboards", "Per-user keyboard settings"
              "HKEY_CURRENT_USER\Software\Tavultesoft\Keyman\\6.0\Active Languages", "Language associations"
              "HKEY_CURRENT_USER\Software\Tavultesoft\Keyman\\6.0\Installed Keyboards", "Keyman user keyboards"
              "HKEY_CURRENT_USER\Software\Tavultesoft\Keyman\\6.0\Installed Packages", "Keyman user packages"
              "HKEY_CURRENT_USER\Software\Tavultesoft\Keyman\\6.0\Add-ins", "Keyman user add-ins"
              "HKEY_CURRENT_USER\Software\Microsoft\Windows\CurrentVersion\Run", "Keyman startup with Windows"
              "HKEY_LOCAL_MACHINE\Software\Tavultesoft\Keyman\\6.0", "Keyman global settings"
              "HKEY_LOCAL_MACHINE\Software\Tavultesoft\Keyman\\6.0\Installed Keyboards", "Keyman global keyboards"
              "HKEY_LOCAL_MACHINE\Software\Tavultesoft\Keyman\\6.0\Installed Packages", "Keyman global packages"
              "HKEY_LOCAL_MACHINE\Software\Tavultesoft\Keyman\\6.0\Add-ins", "Keyman global packages"
              "HKEY_LOCAL_MACHINE\Software\Microsoft\Windows\CurrentVersion\Uninstall\Keyman Keyboard *", 
                            "Keyman keyboard uninstall keys"
              "HKEY_LOCAL_MACHINE\Software\Microsoft\Windows\CurrentVersion\Uninstall\Tavultesoft Keyman 6.0", 
                            "Keyman runtime uninstall key"
              "HKEY_LOCAL_MACHINE\System\CurrentControlSet\Control\Keyboard Layouts\\0000xxFE",
                            "Keyman associated Windows keyboards"

REF
); ?>
