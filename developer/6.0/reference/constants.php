<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:        Named code constants

TEXT:           Keyman 6.0 adds support for single-character stores, or constants, with
                user-defined names. You can assign a name to a character with a store, and
                use the name later (prefixed with a $ sign) in place of the character.
                
EXAMPLE:        store( g_circumflex )   U+011D     c Define the constant

                ...

                "g" + "^" > \$g_circumflex         c Use the constant

TEXT:           Note that only stores containing a single character can be used in this way.

TEXT:           Keyman 6.0 also predefines the Unicode character names as constants. While
                these are often too long to be practical, they can be conveniently used instead
                of the code when defining your own constants.
                
EXAMPLE:        store( g_circumflex )   \$LATIN_SMALL_LETTER_G_WITH_CIRCUMFLEX

REF
); ?>
