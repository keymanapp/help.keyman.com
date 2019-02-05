<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:           Tutorial - Planning the Keyboard

TITLE:          Planning the Keyboard

BODY

SECTION:        Choosing the characters
TEXT:           First of all, we need to decide which characters we want the keyboard to
                produce. Next, we must find out the codes used to represent them, using
                a program such as Character Map, or with the Character Map in Keyman Developer
                (go to <b>View</b>, <b>Character Map</b>).

                French uses the same 26 letters as English, with some additions. As our
                keyboard is based on English, we only need to work with these additional
                letters. Note that for completeness, we will design our keyboard to produce
                a few other accented vowels that are not used in French. Also, we want our
                keyboard to include the angled quotes &laquo; and &raquo;.

                These characters, with both uppercase and lowercase forms, are listed in the
                table below along with their Unicode codes.

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

TEXT:           Note that you must be careful to use the right character: The Unicode standard
                has several characters with the same shape as another, but a different meaning;
                an example of this is the Greek capital letter Sigma and the mathematical
                summation symbol (<img src="../img/sigma.gif">). However, an application supporting Unicode would
                treat them differently. If in doubt whether a character is the right one, you
                can look up the reference tables at
                <a href="http://www.unicode.org/" target="_blank">www.unicode.org</a>.

ENDSECTION

SECTION:        Designing the layout
TEXT:           After choosing the characters we want our keyboard to use, we must decide
                how we want the user to be able to enter them. For some languages, you
                might replace each letter on the English keyboard with a letter from the
                language. In this case, however, most of the letters are accented vowels,
                we will use two keystrokes for each: one for the accent, and one for the
                vowel.

VTABLE:         "120",                     "380"
                "Character",               "Keystrokes"
                "&Agrave;, &agrave;, ...", "back-quote (`), then the vowel key."
                "&Aacute;, &aacute;, ...", "quote ('), then the vowel key."
                "&Acirc;, &acirc;, ...",   "caret (^), then the vowel key."
                "&Auml;, &auml;, ...",     "double-quote (&quot;), then the vowel key."
                "&Ccedil;, &ccedil;",      "quote ('), then lower- or uppercase C."
                "&laquo;, &raquo;",        "two less-than (&lt;&lt;) or greater-than (&gt;&gt;) symbols."

TEXT:           Now that we have decided which character to use and how the user can enter
                them, we can start to write the keyboard.
ENDSECTION

ENDBODY

TUTENAV:    "Introduction", "tute_A_01.html", "Writing the Header", "tute_A_03.html"

FOOTER

ENDPAGE
ENDFORMAT
);
?>