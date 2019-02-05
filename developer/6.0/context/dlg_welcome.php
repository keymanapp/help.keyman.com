<?php include_once( "kmdev.php" );
FORMAT( <<<ENDFORMAT
PAGE:           Welcome Dialog

BODY

SECTION:        Welcome dialog
TEXT:           The Welcome dialog provides quick access to commonly used tasks. If you do not
                wish to see the Welcome dialog, check the "Don't show this dialog on startup
                again" option. You can turn the Welcome dialog on again in <b>Tools, Options,
                Show welcome dialog</b>.
                
HEADING:        Create a keyboard with a wizard
TEXT:           Opens the <a href="child_kbdwiz.html">Keyboard wizard</a> for creating a new
                keyboard.
                
HEADING:        Learn the Keyman programming language with the Tutorial
TEXT:           Opens the <a href="../tutorial/tute_a_01.html">tutorial</a>, which leads you
                through the creation of a simple keyboard.

HEADING:        Start a new keyboard source file
TEXT:           Opens a blank keyboard source file ready for use.

HEADING:        Create a package
TEXT:           Opens the <a href="child_package.html">package editor</a> ready to make a new
                package.

HEADING:        Open an existing file
TEXT:           Brings up the Open dialog to let you choose a file to open.

HEADING:        Open a recent file
TEXT:           Lists the most recently edited files for quick access.

ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
