<?php include_once( "kmdev.php" );
FORMAT( <<<ENDFORMAT
PAGE:           Options Dialog

BODY

SECTION:        Options Dialog
TEXT:           The following options are configurable in TIKE in the <b>Editor</b> tab:

HEADING:        General

VTABLE:         "30%", "70%"
                "Setting", "Description"
                "Show splash screen", "If checked, displays a splash screen when TIKE is started."
                "Show welcome dialog", "If checked, the Welcome dialog will be displayed when TIKE is started"
                "Check file associations", "If checked, makes sure that .kmn and .kps files are opened with TIKE."
                "Check for updates online", "Keyman canDeveloper  check the tavultesoft.com website periodically to see if any updates have been released.  If you don't want Keyman Developer to do this, switch it off.  You can click the <b>Check Now</b> button at any time, whether or not periodic update checks are enabled.  If you use a proxy server to access the web, you will need to enter the proxy details by clicking on the <b>Settings</b> button."
                "Warn if including .doc files in packages", "If checked, the package editor will display a warning about potential viruses in .doc files."

HEADING:        Editor

VTABLE:         "30%", "70%"
                "Setting", "Description"
                "Use tab character", "Sets whether to use the Tab character or spaces for indents."
                "Link quoted font size to primary font size", "If checked, the quoted font size will be the same as the default font size."
                "Indent size", "The indent size, measured in number of spaces."
                "Default font", "Sets the font for ordinary text in the editor."
                "Quoted font", "Sets the font for displaying comments text in single or double quotes in the editor."
                
HEADING:        Colours

TEXT:           Allows you to configure the syntax highlighting used in the editor window.
                You can set colours and font styles for each of the different segments of code, or disable syntax highlighting.

HEADING:        Debugger

VTABLE:         "30%", "70%"
                "Setting", "Description"
                "Use old debugger", "Enables the Keyman 5-style Test window instead of the debugger."
                "Breakpoints fire also when exiting line", "Breakpoints will fire when a rule has finished being processed also."
                "Turn on single step after breakpoint", "Activates single-step mode after a breakpoint fires."
                "Show matched character offsets in stores", "Displays numeric indices of characters in stores"

HEADING:        Character Map

VTABLE:         "30%", "70%"
                "Setting", "Description"
                "Find character under cursor automatically", "The character beneath the cursor in the edit window will be highlighted in the Character Map."
                "Disable database lookups", "Disables looking characters up in the database."
                "Rebuild database", "Rebuilds the Unicode character database."

ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
