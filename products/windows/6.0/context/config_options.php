<?php include_once( "kmdist.php" );
FORMAT( <<<ENDFORMAT

PAGE:         Keyman Configuration - Options Tab

BODY

SECTION:      Configuration - Options tab

HEADING:      Keyman Off Hotkey
TEXT:         Allows the user to select a hotkey that can be used to turn off the currently
              active Keyman keyboard.

HEADING:      Other Options

TEXT:         <b>General</b>

TEXT:         Keyboard hotkeys toggle keyboard activation: When selected, a keyboard hotkey will switch a keyboard on or
              off, instead of just switching the keyboard on.

TEXT:         Simulate AltGr with Ctrl+Alt: Some keyboards do not have a right alt or AltGr key, especially on notebooks.
              When this option is selected, pressing Ctrl+Alt will be equivalent to pressing right alt or AltGr.

TEXT:         <b>Startup</b>

TEXT:         Start Keyman with Windows: Select this option to have Keyman start when Windows starts.

TEXT:         Show Keyman splash screen: When you have registered Keyman, you can switch off the splash screen to reduce
              the time Keyman takes to start.

TEXT:         Show language indicator: When Keyman starts, it can be useful on older versions of Windows to have it
              start the <a href="../main/glossary.html#languageindicator">language indicator</a>.  This option is not
              available in Windows XP, because the language indicator has been replaced with the 
              <a href="../main/glossary.html#languagebar">Language Bar</a>.

TEXT:         Check file associations: When selected, Keyman will make sure Explorer loads .kmx and .kmp files with 
              Keyman instead of another application.

TEXT:         Show visual keyboard: Will start the visual keyboard at the same time as Keyman starting.  If not selected,
              the visual keyboard can be switched on by right-clicking on the Keyman icon and selecting the Visual Keyboard
              option.

TEXT:         <b>Keyboard installation</b>

TEXT:         Create Start Menu folders under the 'Tavultesoft Keyman' folder: Many packages will create Start Menu entries
              when they are installed.  If this option is selected, the package Start Menu entries will be created under
              the 'Tavultesoft Keyman' entry instead of in the main list, which can help in organising your Start Menu.

TEXT:         List keyboards in 'Add or Remove Programs' Control Panel applet: When selected, keyboards and packages will
              have entries added in the Control Panel 'Add or Remove Programs' applet.  If unselected, you must uninstall
              keyboards and packages from within Keyman Configuration.

TEXT:         <b>Advanced</b>

TEXT:         Turn on Unicode supplementary character display: This option is only available under Windows 2000 and Windows
              XP.  If unselected, you will not be able to view <a href="../main/glossary.html#smp">supplementary plane 
              characters</a>.

TEXT:         Turn on 'Unknown' language: This will install the 'unknown' language in Control Panel.  You should not use
              this option unless you already understand what it does!

TEXT:         Debugging: If you are having a problem with Keyman, you can switch on this option to help figure it out.
              Keyman will then create a file 'c:\keyman.log' which contains details of what is happening when you type.  If
              you send this file, along with details of the problem you are experiencing, to Tavultesoft Support, it will
              help us to sort out the problem more quickly.  Don't forget to switch this option off again after you have 
              finished with it -- the c:\keyman.log file can grow large very quickly.

TEXT:         <b>Check for Updates Online</b>

TEXT:         Keyman can check the tavultesoft.com website periodically to see if any updates have been released.  If you
              don't want Keyman to do this, switch it off.  You can click the <b>Check Now</b> button at any time, whether
              or not periodic update checks are enabled.  If you use a proxy server to access the web, you will need to
              enter the proxy details by clicking on the <b>Settings</b> button.
              
RELATED:      "Keyman Configuration - Keyboards Tab", "config_keyboards.html"
              "Keyman Configuration - Add-ins Tab", "config_addins.html"
              "Keyman Configuration - Languages Tab", "config_languages.html"

ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
