<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:        &amp;Version store and VERSION statement

CODE:           store( &Version ) "%KeymanVersion%"

                VERSION %KeymanVersion%

TEXT:           The VERSION statement was added to Keyman 3.0 to allow later versions to easily 
                distinguish what version of Keyman the keyboard was written for and handle it as 
                such.  The VERSION statement is required. For new keyboards, use 6.0 as the version
                number.

                Keyman 6.0 will compile Keyman 5.0 keyboards without modification, but you must specify 
                version 6.0 for keyboards that make use of version 6.0 features.

REF
); ?>
