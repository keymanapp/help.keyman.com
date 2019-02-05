<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:      Formal Definition of Keyman Keyboard Language

TEXT:           <font color="red">This document is incomplete</font>

TUTECODE:     

              letter = [a-zA-Z]
              digit = [0-9]
              namepunct = [_&.#]
              systemstoreid = $

              storename = systemstoreid?(letter|digit|namepunct)+
              groupname = (letter|digit|namepuct)+
              deadkeyname = (letter|digit)+

              keyboard = lines

              lines = line line*

              
              
              

REF
); ?>
