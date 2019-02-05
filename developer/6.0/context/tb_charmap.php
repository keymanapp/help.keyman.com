<?php include_once( "kmdev.php" );
FORMAT( <<<ENDFORMAT
PAGE:           Character Map

BODY

SECTION:        Character Map

TEXT:           The Character Map displays characters from a font to allow easy insertion of
                non-typable characters into a keyboard source file. You can view the character
                map with the View, Character Map option or by pressing Ctrl+Shift+C.
                
TEXT:           When you select a character in the character map, its Unicode name is
                shown at the bottom of the character map. You can also see all the Unicode-defined
                properties of the character by right-clicking and choosing "Character Properties"
                from the menu.

NULL:           ================================================

HEADING:        Inserting characters

TEXT:           You can insert a character from the character map into a file in three ways:
                by its code, by name, or as a character.
                
TEXT:           To insert a character by its code, double-click on it or press Enter. The code
                will be inserted at the current cursor position. You can also drag a character
                with the mouse and drop it in a file to insert it's code.
                
TEXT:           To insert a character by its Unicode name, double-click on the the name at the
                bottom of the character map window, or press Shift-Enter.
                
TEXT:           To insert a character from the character map as a character, press Ctrl+Enter.
                The character will be inserted at the current cursor position.
                
TEXT:           These options are also available by clicking the right-mouse button on a character,
                and choosing "Insert" from the popup menu.

NULL:           ================================================

HEADING:        Viewing different fonts and character sets

TEXT:           You can change the font used in the character map by right-clicking and choosing
                "Font..." from the menu. Note that the font size and style settings have no effect.

TEXT:           You can also choose to have the character map display characters in the same font
                as is used for quoted strings in keyboard files: Right-click on the character map
                and choose "Use quoted-text font" from the menu.

TEXT:           You can change the range of characters displayed in the character map by
                right-clicking and selecting an option from the "Character Set" list.
                The choices available include the ANSI range, the complete Unicode range, and
                the various Unicode subranges and planes. Note that only characters available
                in the current font will be shown.

NULL:           ================================================

HEADING:        Finding specific characters

TEXT:           You can search for a character by its code or number, by right-clicking and
                choosing "Goto..." or by pressing Ctrl+G. If the character is present in the
                current font in the currently displayed range, it will be selected.
                
TEXT:           You can also locate the character correspinding to a name or code in a file
                in the character map by right-clicking the name or code and choosing "Show
                Character". This will happen automatically if you enable "Find character under
                cursor automatically" in the Character Map Options dialog.

ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
