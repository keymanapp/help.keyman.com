<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:      Unicode and ANSI

TEXT:         The <a href="begin.html">begin</a> statement defines where processing begins when a key is pressed.
              Keyman first determines whether the active application can accept Unicode input, and then selects 
              the Unicode or ANSI begin statement accordingly.

TEXT:         Keyman supports the full Unicode character set (U+0001 - U+10FFFF).  Characters below U+0020 are 
              not recommended, although U+000D may be useful as a carriage return in some circumstances.  Characters
              should be specified in UTF-32.

TEXT:         Surrogate characters should not be used, and the compiler will warn accordingly.  Instead the appropriate
              UTF-32 codepoint should be used, and Keyman will translate the character internally into a surrogate pair
              so that the application can use it, if it is compliant.

TEXT:         Unicode characters can be specified in all of the methods referred to in the
              <a href="_struct_strings.html">strings</a> topic, but the U+xxxx method is recommended for clarity.

REF
); ?>
