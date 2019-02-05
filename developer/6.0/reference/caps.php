<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:    Caps Lock stores and statements

CODE:       store( &CapsAlwaysOff ) "1"
            store( &CapsOnOnly ) "1"
            store( &ShiftFreesCaps ) "1"
            
            CAPS ALWAYS OFF
            CAPS ON ONLY
            SHIFT FREES CAPS

TEXT:       These are three optional header statements that Keyman recognizes, all working with Caps Lock.  The 
            first statement, "Caps Always Off", makes sure that Caps Lock cannot be turned on while the keyboard 
            is active, and it turns Caps Lock off when the keyboard is switched on.  Put this statement on its own line 
            in the header.

TEXT:       The other two statements, "Caps On Only", and "Shift Frees Caps" are usually used together.  "Caps On Only" 
            makes the Caps Lock key like a typewriter Caps Lock, where pressing it turns it on only.
            "Shift Frees Caps" tells Keyman to recognize the use of the Shift key to turn Caps Lock off.  Using these
            two together makes Keyman work like many European keyboards.  These two statements each take a single line
            in the header.

REF
); ?>
