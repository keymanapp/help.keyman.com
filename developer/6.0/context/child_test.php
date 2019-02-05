<?php include_once( "kmdev.php" );
FORMAT( <<<ENDFORMAT
PAGE:         Test Window

BODY

SECTION:      Test Window

TEXT:         The test window lets you test your keyboard before you install it.  You can test a keyboard 
              with the <b>Keyboard|Start Test</b> menu item, or by pressing F9. Note that for Keyman Developer
              Professional, the Test window must be specifically enabled in Tools, Options, Debugger, Enable Test Window.
              With Keyman Developer Professional it is recommended that you use the debugger instead.

TEXT:         Once the test window is open, you can switch the keyboard between ANSI and Unicode mode with the
              radio buttons in the test toolbar.  You can also switch on debugging mode (which is probably too
              verbose at present for general use) and switch the keyboard on and off with the <b>Keyboard Active</b>
              checkbox.

TEXT:         You can see the character codes for the current or selected characters in the status bar, which can be
              useful when debugging your keyboard.

ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
