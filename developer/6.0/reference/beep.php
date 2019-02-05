<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:        beep statement

CODE:           beep

TEXT:           The beep statement produces a beep with the system speaker when the rule is matched.  If you 
                have a sound driver installed, beep will produce the sound specified by "Asterisk" in the 
                Sounds option in Control Panel.  When using the beep statement, remember that it can delete
                all that was matched on the left side of the rule if you don't precede it with context or
                appropriate characters.  The beep statement is only valid in the output.  The example
                given below will, if it receives a key that is in the key group, and the context ends
                with a cons character, ignore the key and leave the context alone.

EXAMPLE:        any(cons) + any(key) > context beep

REF
); ?>
