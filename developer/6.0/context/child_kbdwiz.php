<?php include_once( "kmdev.php" );
FORMAT( <<<ENDFORMAT
PAGE:           Keyboard Wizard

BODY

SECTION:        Keyboard Wizard

TEXT:           The Keyboard Wizard is the easiest way to create a simple keyboard.  There are 
                five steps to creating the keyboard: entering the keyboard details, configuring
                the layout, setting extra parameters, making a bitmap, and compiling and testing the keyboard.


HEADING:        1. Introduction

TEXT:           On this page, you should enter the name of your keyboard, and decide whether it will use Unicode or be
                code-page based (Unicode is recommended).

HEADING:        2. Design Layout

TEXT:           Each key can have zero or more characters assigned to it. Each key can be assigned
                a different set of characters for each shift state. You can change the shift state
                by clicking on the Shift, Ctrl, and Alt keys.

TEXT:           There are two ways to assign characters to the keys:

BULLETLIST:     Click on a key, and then type the character's code or the character in quotes into the box.
                Go to <b>View, Character Map</b>, select the character from the grid, and drag and drop it onto the
                appropriate key.  This will set the key to output that character.<br><br>
                To add the character to a key with existing characters, hold <i>Ctrl</i> while dropping it onto the key.

TEXT:           Note that any key that does not have a character assigned to it will work as usual.

HEADING:        3. Extra Details

TEXT:           Here you can enter copyright information and other messages for the users of your keyboard to see, as well
                as comments to go in the keyboard source.

HEADING:        4. Bitmap Image

TEXT:           Here you can create a bitmap for the keyboard, or load an existing bitmap to use. This bitmap will be displayed
                when the keyboard is active.

HEADING:        5. Compile

TEXT:           After you have finished the keyboard, press Ctrl+S (or choose File, Save) to save.

TEXT:           You can compile the keyboard for testing and installation by clicking the <b>Compile</b> button,
                or selecting Keyboard, Compile Keyboard.

TEXT:           To test your keyboard, press View Source, then press F5 to start the debugger (for Keyman Developer Pro) or
                just press F9 to open the test window (for Keyman Developer Standard).

TEXT:           The Keyboard Wizard generates a .kmn Keyman Source File.  You can view the source for the keyboard 
                by clicking the <b>View Source</b> button.  When you edit the source directly, you can perform many 
                more advanced functions.  To learn how to create or edit keyboards using the source, read the <a 
                href="../tutorial/tute_a_01.html">tutorial</a>.
                
TEXT:           If you want to create a visual keyboard to accompany your keyboard, click <b>Create Visual Keyboard</b>.
                For more information about visual keyboards, see <a href="child_viskbd.html">Visual Keyboard Editor</a>.

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
