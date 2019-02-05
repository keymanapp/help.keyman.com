<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:      Named Constants

TEXT:         Named constants allow you to use a descriptive name for a character, instead of its code.  To define a named constant,
              use <code>store(<i>name</i>) <i>code</i></code>.  When you wish to refer to the code, use <code>$<i>name</i></code>.

TEXT:         The dollar referencing can only be used with named constants.  You cannot use it for stores that have more than one character
              in them.

TUTECODE:     store(CCedilla) U+00E7
              + [RALT K_C] > \$CCedilla

REF
); ?>
