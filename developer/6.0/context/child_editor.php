<?php include_once( "kmdev.php" );
FORMAT( <<<ENDFORMAT
PAGE:           Editor Window

BODY

SECTION:        Editor Window

TEXT:           The Editor window in TIKE supports standard Windows keystrokes.  If the coloured text bothers you, it
                can be turned off or modified from the default in the <b>Tools|Options</b> dialog.

TEXT:           You can switch between the editor window and the Keyboard Wizard window with <b>View|Open in Wizard</b> 
                menu item.

TEXT:           Clicking right mouse button on a BITMAP or store(&bitmap) line will allow you to open the 
                bitmap for editing.

SECTION:        Special Functionality
TEXT:           Aside from standard Windows keys, the following keystrokes are defined for the editor:

VTABLE:         "Keystroke", "Action"
                "Ctrl + Shift + number", "Set a bookmark at the current line"
                "Ctrl + number", "Move cursor to bookmark position"
                "Alt + selection key/mouse", "Box selection functionality"
                "Insert", "Toggle between insert and overwrite mode"
                "Ctrl + Shift + M", "Toggle message window visibility"
                "Ctrl + Shift + C", "Open character map"
                "Ctrl + Shift + W", "Open current keyboard in Keyboard Wizard"
                "Ctrl + F, Ctrl + Shift + F", "Find text"
                "Ctrl + H, Ctrl + Shift + H", "Find text"

ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
