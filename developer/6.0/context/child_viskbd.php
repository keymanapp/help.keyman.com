<?php include_once( "kmdev.php" );
FORMAT( <<<ENDFORMAT
PAGE:           Visual Keyboard Editor

BODY

SECTION:        Visual Keyboard Editor

TEXT:           The Visual Keyboard Editor allows you to create a layout of a keyboard for use as an on-screen reference.  This
                keyboard layout can also be printed or included in HTML or other documentation.  The editor allows you to export the
                file to HTML, PNG or BMP formats.

TEXT:           Note that the visual keyboard functionality is designed for positional layouts.  With 
                <a href="../reference/mnemonic.html">mnemonic layouts</a>, the position of the characters on the keycaps will move according
                to the user's actual keyboard.

HEADING:        1. Introduction

TEXT:           On this page, you should enter the name of your Keyman keyboard that this visual keyboard is for.  Use the filename
                of the keyboard, not its display name, and do not include either path or extension.  For example, if your keyboard is
                <b>c:\My Documents\Keyboards\Hindi.kmx</b>, then use the text <b>Hindi</b>.

                At this point, you can also select a .kmx file to import into the Visual Keyboard Editor.  The editor will use the 
                keyboard to generate the base characters for a layout.

                Keyman Developer Professional users can import a .xml file that describes the visual keyboard.  The DTD for visual keyboards is
                available at http://www.tavultesoft.com/keymandev/visualkeyboard.dtd.

HEADING:        2. Options

TEXT:           The following options are available for visual keyboards:

BULLETLIST:     <b>Distinguish between left and right Ctrl/Alt (implies AltGr):</b> If selected, the visual keyboard editor will allow you to have different characters displayed depending on whether left or right Ctrl/Alt are depressed.
                <b>Include 102nd key used on European keyboards:</b> If selected, displays the 102nd key (K_oE2 in .kmn files) to the right of the left-hand shift key.
                <b>Display underlying layout characters:</b> Switches on the display of the default characters on the key caps.
                <b>Associate with underlying layout:</b> If selected, then the visual keyboard will only be used if the current underlying layout is active.  This feature is not currently supported in Keyman.

HEADING:        3. Layout Keyboard

TEXT:           In this screen, you should type the characters you wish to have appear on the key caps.  Note that you should use the 
                actual character, and you can use any ANSI or Unicode character, even if designing an Code Page/Custom layout.  You will
                find the character map useful for inserting characters.

                You can also use bitmap images for the keycaps.  This can often help in clarity for complex fonts.

                Don't forget to configure both ANSI and Unicode layouts for the keyboard.

HEADING:        4. Finish

TEXT:           At this point, you should save the visual keyboard.  It is appropriate to include the visual keyboard in a package with the
                keyboard that it is associated with; if you do this, it will be automatically installed for the end user.

                You can also export the keyboard to other file formats (HTML, BMP, or PNG), for use in documentation.

                Keyman Developer Professional users can also export the structure of the keyboard to XML format for automated processing.

ENDSECTION
ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
