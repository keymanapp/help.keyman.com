<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:          LAYOUT statement

CODE:             LAYOUT %nID%

TEXT:      	This statement is obsolete in Keyman 5 and 6.  It is kept for backward compatibility only and will be ignored.

REF
); ?>
