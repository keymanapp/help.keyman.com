<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:        outs statement

CODE:           outs(%snStore%)

TEXT:           The outs statement simply copies the store snStore into the position in which it has been 
                inserted.  Most of the time this is used only in stores but it can be used in the context
                and output as well.

TEXT:           Warning: when using outs() in the context, the characters in the outs are included in index counts.
                See the example.

EXAMPLE:        store(conskeys) "BCDFGHJKLMNPQRSTVWXYZ"
                store(vowelkeys) "AEIOU"
                store(allkeys) outs(conskeys) outs(vowelkeys)

                c using outs in the context

                outs(vowelkeys) + any(conskeys) > index(conskeys, 6)  

REF
); ?>
