<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:          &amp;Message store and MESSAGE statement

CODE:             store( &Message ) "%tsMessage%"

                  MESSAGE %tsMessage%

TEXT:             This is a generic message, such as a shareware notice that you can display when the 
                  keyboard is installed.  This statement is optional.

EXAMPLE:          store( &Message ) "This keyboard is freely redistributable."


REF
); ?>
