<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:      any statement

CODE:         any(%snStore%)

TEXT:         The any statement will match any character that is in the store snStore.  
              This statement is only valid on the left side of a rule; the 
              index statement is used to match again or output the character matched by the
              any statement in the output.  If an any is used in the key, it will be expanded
              out to include one rule for each character in the store.  The 
              any statement remembers the offset in the store where the match for later use with the index 
              statement.

EXAMPLE:      + any(keys) > index(output,1)

REF
); ?>
