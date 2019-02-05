<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:        deadkey statement

CODE:           deadkey(%name%)

                dk(%name%)

TEXT:           The deadkey or dk statement lets you program a deadkey in your keyboard.  The
                deadkey will be processed by Keyman as if it were a normal character, but it
                is not output onto the screen, but stored internally in the context.  Any
                keyboard can have around 65,000 unique deadkeys.

TEXT:           Keyman 5.0 and later support named deadkeys. The use of numbered deadkeys is
                still supported, though not recommended; named deadkeys make the keyboard source
                much more readable.

EXAMPLE:        + '`' > dk(backquote)
                dk(backquote) + 'e' > 'è'

TEXT:           Any deadkeys inserted by another rule immediately before or after the character to the left 
                of the insertion point will be deleted when backspace is pressed, unless backspace is overridden
                with a keyboard rule.  This can be illustrated with the following implicit rule (* indicates 0 
                or more deadkeys; 'char' is any character):

CODELINE:       dk()* any(char) dk()* + [K_BKSP] > nul

REF
); ?>
