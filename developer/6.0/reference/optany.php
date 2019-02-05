<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:        optany statement

CODE:           optany(%snStore%)

TEXT:           The optany statement will match any character that is in the store snStore, or
                nothing. This statement is only valid on the left side of a rule, not in the key
                or in the right-hand-side. The index statement is used to match again or output
                the character (if any) matched by the optany statement in the output.

EXAMPLE:        optany(chars) + 'a' > index(output,1) 'b'

REF
); ?>
