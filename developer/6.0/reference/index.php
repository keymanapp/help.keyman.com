<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:          index statement

CODE:             index(%snStore%,%nOffset%)

TEXT:             The index statement gets the offset of the character from the left side of the rule 
                  at offset nOffset.  The offset refers to the position, including other characters,
                  to the any statement which has saved the offset which it found the character in.  
                  The index will output the character at that offset from the store snStore.  If used
                  carefully, the index and any combination can be very powerful.  In previous versions
                  of Keyman, the index statement was only valid in the output; it can now be used also
                  in the context (but not the key section), as long as the source it refers to is before
                  it.

TEXT:             snStore: The store to output from
                  nOffset: The offset in the input to retrieve the any information from.

EXAMPLE:          any(cons) "W" + any(key) > index(keyout,3) "w" index(cons,1)

HISTORY:          As of version 6.0, the index() statement can also be used in the left-hand
                  side of a rule.

REF
); ?>
