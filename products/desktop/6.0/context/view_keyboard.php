<?php include_once( "kmdist.php" );
FORMAT( <<<ENDFORMAT

PAGE:         Install Keyboard - Keyboard Tab

BODY

SECTION:      Keyboard tab
TEXT:         Displays the name and other information about the keyboard.

HEADING:      Encodings
TEXT:         Lists the encodings standards supported by the keyboard. ANSI keyboards are intended for use with
              Windows 9x and for legacy applications that cannot handle Unicode. Keyboards with Unicode encoding
              are for use with Unicode-aware applications, or for Windows NT, Windows 2000 and later operating systems.

HEADING:      Based on
TEXT:         Specifies the keyboard layout on which the keyboard is based. 
COMMENT:      This may be based on a physical keyboard layout such as US English (QWERTYUIOP), or on a logical layout...??

HEADING:      Language ID
TEXT:         Specifies the language ID (if any) associated with the keyboard. If a keyboard has no language ID, then it
              is probably for a language for which Windows has no in-built support.

HEADING:      Copyright
TEXT:         Gives copyright information about the keyboard.

HEADING:      Message
TEXT:         Displays any additional information about the keyboard.

RELATED:      "Package Details tab",  "view_package.html"
              "Fonts tab",            "view_fonts.html"
              "Included Files tab",   "view_files.html"


ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
