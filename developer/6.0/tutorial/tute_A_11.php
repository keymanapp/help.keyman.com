<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:           Tutorial - Using Unicode

TITLE:          Using Unicode

BODY

SECTION:        Introducing Unicode

TEXT:           Unicode is a character encoding standard that supports most of the world's
                more common scripts, and includes support for user-defined scripts. Unicode is
                rapidly being accepted as a standard in modern applications and operating
                systems.
ENDSECTION

SECTION:        Using Unicode in a keyboard

TEXT:           Using Unicode instead of ANSI in a keyboard is very simple: you have a
                <b>begin Unicode</b> statement rather than <b>begin ANSI</b>, and you specify characters
                with U+xxxx, where xxxx is a four-digit hexadecimal number.

                If you are not familiar with the hexadecimal (base-16) numbering system, don't
                worry: you can use the Character Map in Keyman Developer to find the character
                you want, and then drag-and-drop or copy-and-paste its character code into
                your keyboard.

                Note that you must be careful to use the right character: The Unicode standard
                has several characters with the same shape as another, but a different meaning;
                an example of this is the Greek capital letter Sigma and the mathematical
                summation symbol (<img src="../img/sigma.gif">). However, an application supporting Unicode would
                treat them differently. If in doubt whether a character is the right one, you
                can look up the reference tables at
                <a href="http://www.unicode.org/" target="_new">www.unicode.org</a>.

                Note that a keyboard can contain both a <b>begin Unicode</b> and a <b>begin ANSI</b>
                statement. In this case, Keyman will determine whether the current application
                supports Unicode or not, and use the appropriate group.
ENDSECTION

SECTION:        Converting Quick French to Unicode

TEXT:           Converting the Quick French keyboard to Unicode is thus basically a matter of
                looking up the right Unicode character codes and replacing the ANSI codes with
                them. Here are the character codes:

TABLE:          "30",       "80",     "30",      "80",     "20", "30",     "80",     "30",      "80"
                "&Agrave;", "U+00C0", "&agrave;", "U+00E0", "", "&Aacute;", "U+00C1", "&aacute;", "U+00E1"
                "&Egrave;", "U+00C8", "&egrave;", "U+00E8", "", "&Eacute;", "U+00C9", "&eacute;", "U+00E9"
                "&Igrave;", "U+00CC", "&igrave;", "U+00EC", "", "&Iacute;", "U+00CD", "&iacute;", "U+00ED"
                "&Ograve;", "U+00D2", "&ograve;", "U+00F2", "", "&Oacute;", "U+00D3", "&oacute;", "U+00F3"
                "&Ugrave;", "U+00D9", "&ugrave;", "U+00F9", "", "&Uacute;", "U+00DA", "&uacute;", "U+00FA"

                "&Acirc;", "U+00C2", "&acirc;", "U+00E2", "", "&Auml;", "U+00C4", "&auml;", "U+00E4"
                "&Ecirc;", "U+00CA", "&ecirc;", "U+00EA", "", "&Euml;", "U+00CB", "&euml;", "U+00EB"
                "&Icirc;", "U+00CE", "&icirc;", "U+00EE", "", "&Iuml;", "U+00CF", "&iuml;", "U+00EF"
                "&Ocirc;", "U+00D4", "&ocirc;", "U+00F4", "", "&Ouml;", "U+00D6", "&ouml;", "U+00F6"
                "&Ucirc;", "U+00DB", "&ucirc;", "U+00FB", "", "&Uuml;", "U+00DC", "&uuml;", "U+00FC"

                "&Yacute;", "U+00DD", "&yacute;", "U+00FD", "", "&Ccedil;", "U+00C7", "&ccedil;", "U+00E7"
                "&laquo;", "U+00AB", "&raquo;", "U+00BB", "", "", "", "", ""

TEXT:           The addition of a group to handle Unicode is left as an exercise for the reader.
ENDSECTION

SECTION:        That's all, folks
TEXT:           With the topic of Unicode, the Keyman Developer tutorial is complete. You should
                now know how to create even moderately complex keyboards. For information on
                using the more advanced features of the keyboard language for complex keyboards,
                read the other sections of the Programmer's Guide.
ENDSECTION

RELATED:        "Unicode", "../reference/_struct_unicode.html"

ENDBODY

TUTENAV:    "The Finished Keyboard", "tute_A_10.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>