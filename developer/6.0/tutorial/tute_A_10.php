<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:           Tutorial - The Finished Keyboard

TITLE:          The Finished Keyboard

BODY

SECTION:        The Quick French Keyboard

TEXT:           Here is the completed keyboard:

TUTECODE:       c Simplified French Keyboard for Keyman 6.2
                c
                c This keyboard program uses a simplified set of keys
                c for typing French, especially for those who don't know the
                c standard French keyboard.
                c
                c NOTE: This keyboard was created from the Keyman keyboard
                c programming tutorial.

                VERSION 6.0                 c This keyboard is for use with Keyman 6.0 or later
                NAME "Quick French"
                BITMAP "qfrench.bmp"
                store(&mnemoniclayout) "1"

                begin Unicode > use(Main)

                group( Main ) using keys

                c Store the upper and lowercase vowels with different accents
                store( plainvowels )  'a'    'e'    'i'    'o'    'u'      'A'    'E'    'I'    'O'    'U'
                store( acutevowels )  U+00E1 U+00E9 U+00ED U+00F3 U+00FA   U+00C1 U+00C9 U+00CD U+00D3 U+00DA
                store( gravevowels )  U+00E0 U+00E8 U+00EC U+00F2 U+00F9   U+00C0 U+00C8 U+00CC U+00D2 U+00D9
                store( circumvowels ) U+00E2 U+00EA U+00EE U+00F4 U+00FB   U+00C2 U+00CA U+00CE U+00D4 U+00DB
                store( dresisvowels ) U+00E4 U+00EB U+00EF U+00F6 U+00FC   U+00C4 U+00CB U+00CF U+00D6 U+00DC

                c Output deadkeys only for the accent keys pressed
                + "'" > dk(quote)     c Quote for acute accent
                + "`" > dk(bkquote)   c Backquote for grave accent
                + "^" > dk(caret)     c Caret for circumflex
                + '"' > dk(dbquote)   c Double-quote for dieresis
                
                c Rules for accented vowels
                dk(quote)   + any( plainvowels ) > index( acutevowels, 2 )
                dk(bkquote) + any( plainvowels ) > index( gravevowels, 2 )
                dk(caret)   + any( plainvowels ) > index( circumvowels, 2 )
                dk(dbquote) + any( plainvowels ) > index( dresisvowels, 2 )

                c Rules for other characters
                dk(quote) + "y" > U+00FD  c Acute-accented Y
                dk(quote) + "Y" > U+00DD

                dk(quote) + "c" > U+00E7  c C-cedilla
                dk(quote) + "C" > U+00C7

                "<" + "<" > U+00AB        c Angled quotes
                ">" + ">" > U+00BB

                c Rules for the accent character itself (type it twice)
                dk(quote)   + "'" > "'"   c Quote
                dk(bkquote) + "`" > "`"   c Backquote
                dk(caret)   + "^" > "^"   c Caret
                dk(dbquote) + '"' > '"'   c Double-quote

                c End of keyboard

ENDSECTION

ENDBODY

TUTENAV:    "Deadkeys", "tute_A_09.html", "Back to Contents", "../main/contents.html"

FOOTER

ENDPAGE
ENDFORMAT
);
?>