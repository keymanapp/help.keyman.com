<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:        &amp;Copyright store and COPYRIGHT statement

CODE:           store( &Copyright ) "%tsCopyrightMessage%"

                COPYRIGHT "%tsCopyrightMessage%"

TEXT:           Keyman keyboards have a provision to display a copyright message when they are installed.  
                This statement is optional.  The message should be enclosed in quotes.

EXAMPLE:        store( &Copyright ) "Copyright ­©2001 Joe Bloggs"

HISTORY:        This statement was introduced in Keyman 4.

REF
); ?>
