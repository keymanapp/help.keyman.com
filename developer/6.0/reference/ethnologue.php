<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:        &EthnologueCode system store

TEXT:           The optional EthnologueCode system store specifies the language the keyboard
                is made for by use of an SIL Ethnologue three-letter language code. This
                information is intended for use by third-party applications.
                
TEXT:           For a list of codes, or more information about Ethnologue, see
                <a href="http://www.ethnologue.com/" target="_blank">www.ethnologue.com</a>.

EXAMPLE:        store(&ETHNOLOGUECODE) "ICE"    c Icelandic

REF
); ?>
