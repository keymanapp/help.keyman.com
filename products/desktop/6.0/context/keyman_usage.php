<?php include_once( "kmdist.php" );
FORMAT( <<<ENDFORMAT

PAGE:         Kmshell Command-line Usage

BODY

SECTION:      Kmshell command-line usage
TEXT:         Kmshell accepts the following switches when run from the command line:

HEADING:      Keyboard Management
HTABLE:       "2160",               "2880"
              "-i <i>filename</i>", "Install the specified keyboard or package."
              "-u <i>filename</i>", "Uninstall the specified keyboard or package."
              "-v <i>filename</i>", "View the keyboard or package details."
HEADING:      File associations
HTABLE:       "2160",               "2880"
              "-ra", "Associate Keyman with keyboard and package files."
              "-rr", "Remove all Keyman associations."
HEADING:      Program Installation
HTABLE:       "2160",               "2880"
              "-pri", "Install Keyman redistributable after expanding archive."
              "-pru", "Uninstall Keyman redistributable."
HEADING:      Miscellaneous
HTABLE:       "2160",               "2880"
              "-a", "Display the about dialog."
              "-r", "Display the registration dialog."
              "-updatecheck", "Check for updates online."
              "-h", "Display the Keyman help file."
              "-?", "Display help on command-line usage."
HEADING:      Options
TEXT:         These switches can be used in combination with the switches above, where
              appropriate.
HTABLE:       "2160",               "2880"
              "-s", "Carries out the specified action silently."
              "-q", "Used with <b>-pri</b>, queries before carrying out the action."

TEXT:         When run without any parameters, Kmshell will display the Keyman Configuration
              dialog.

ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>

