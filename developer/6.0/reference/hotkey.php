<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:            &amp;Hotkey store and HOTKEY statement

CODE:               store( &HotKey ) "%tsHotKey%"

                    HOTKEY "%tsHotKey%"

TEXT:               The HOTKEY statement specifies the hotkey that Keyman will use to turn the keyboard on.  
                    When this hotkey is pressed, any active keyboard will be turned off and the new keyboard will be 
                    turned on. The hotkey must be enclosed in quotes.

TEXT:               The hotkey can be any letter key, with any combination of the Shift, Control and Alt keys also pressed.
                    The specification of the HOTKEY statement follows the Microsoft standard for hotkeys in Windows.
                    Inside a double-quoted string, you can combine the letter key with special characters to identify the 
                    shift state:

VTABLE:             "150",             "150"
                    "To combine with", "Precede the letter by",
                    "Shift",           "+ (plus sign)",
                    "Ctrl",            "^ (caret sign)",
                    "Alt",             "% (percent sign)"

TEXT:               The hotkey can also be in Virtual Key format, so that you can use any key on the keyboard.  This 
                    statement is optional.

EXAMPLE:            store( &HotKey ) "^+A"                   c Ctrl+Shift+A
                    store( &HotKey ) "[Alt Shift K_PAUSE]"   c Alt+Shift+Pause

HISTORY:            The virtual key functionality was introduced in Keyman 3.1.

REF
); ?>
