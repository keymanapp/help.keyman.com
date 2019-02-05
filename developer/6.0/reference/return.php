<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:        return statement 

CODE:           return

TEXT:           return will tell Keyman to stop processing rules and wait for the next keystroke to 
                come.  Keyman will not return to process other groups that called the one with the 
                return statement.

EXAMPLE:        nomatch > return

REF
); ?>
