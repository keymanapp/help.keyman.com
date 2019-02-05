<?php include_once( "kmdev.php" );
FORMAT( <<<ENDFORMAT
PAGE:           New File Dialog

BODY

SECTION:        New File dialog

HEADING:        Keyboard Wizard
TEXT:           Ccreates a new keyboard file using the Keyboard Wizard. The Keyboard Wizard allows you to
                quickly create a simple keyboard layout using drag and drop.

HEADING:        Keyboard
TEXT:           Creates a new keyboard source file. This file will be opened in an editor window.

HEADING:        Package
TEXT:           Creates a new keyboard package. A keyboard package contains one or more keyboard files, and
                can optionally contain other associated files such as documentation.

HEADING:        Text file
TEXT:           Creates a new text file.

HEADING:        Keyboard bitmap
TEXT:           Creates a new keyboard bitmap, which will be shown in the taskbar when the keyboard is active.

HEADING:        Visual Keyboard
TEXT:           Creates a new bisual keyboard, which can be used for entering characters, or just for documenting
                a keyboard layout.

HEADING:        HTML file
TEXT:           Creates a new HTML file.

HEADING:        XML file
TEXT:           Creates a new XML file.

ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
