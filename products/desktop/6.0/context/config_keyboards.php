<?php include_once( "kmdist.php" );
FORMAT( <<<ENDFORMAT

PAGE:         Keyman Configuration - Keyboards Tab

BODY

SECTION:      Configuration - Keyboards tab

HEADING:      Installed Keyboards
TEXT:         Lists the keyboards which are currently installed. Keyboards with a check mark
              beside the name are enabled, and will be shown in the keyboard selection menu.
              
              You can enable and disable a keyboard by clearing or checking the box beside
              its name.

HEADING:      Keyboard Details
TEXT:         Lists the filename, supported encoding options, and additional information about
              the highlighted keyboard in the list.  You can set the hotkey for a keyboard here.

TEXT:         If a visual keyboard is available for a keyboard, you can install it by clicking the Add
              button to the right of the "Visual keyboard" text.

HEADING:      Uninstall...
TEXT:         Uninstalls the highlighted keyboard in the list. If the keyboard was installed as part
              of a package, you may be given the option to keep any fonts that were installed
              with the keyboard. If you have any documents that use these fonts, you should
              choose to retain them, or your documents may become unreadable.

HEADING:      Install Keyboard...
TEXT:         Opens a dialog allowing you to select a keyboard file to be installed.

RELATED:      "Keyman Configuration - Options Tab", "config_options.html"
              "Keyman Configuration - Add-ins Tab", "config_addins.html"
              "Keyman Configuration - Languages Tab", "config_languages.html"

ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
