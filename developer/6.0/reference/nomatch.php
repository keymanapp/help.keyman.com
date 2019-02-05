<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:          nomatch rule

CODE:             nomatch > %esString%

TEXT:             nomatch is similar to match, but instead of the rule being used when a rule was matched,
                  it will be used when a rule isn't matched in the group. A nomatch rule can include use,
                  return, beep and normal characters.

                  Caveat: nomatch will not be fired in a "using keys" group if the current keystroke does 
                  not produce a character in normal use (e.g. modified keys, function keys).  This is by
                  design, and was originally intended to ensure that function keys, and modified keys 
                  such as Ctrl+X, were passed through to the underlying application.

TEXT:             esString: The extended string to output, including the statements mentioned above.

EXAMPLE:          nomatch > beep

REF
); ?>
