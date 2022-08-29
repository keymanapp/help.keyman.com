<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:        &mnemoniclayout system store

TEXT:           Keyman 6.0 supports two different types of keyboards: positional and mnemonic
                keyboards.
                
                The layout of a positional keyboard is based on the scan codes sent by the keyboard,
                which are related to the actual key location on the keyboard. This means that if you
                press any particular key, the output will be the same regardless of the underlying
                physical keyboard or the keyboard layout selected in Control Panel.
                
                With a mnemonic keyboard, Keyman will instead examine the character output by the current
                Windows keyboard layout. For example, with English, French, and German Windows keyboard layouts,
                pressing "z" will produce the same output, even though the "z" key is in different positions
                on all three layouts.

                Virtual keys do change their behaviour somewhat in a mnemonic layout.  For the "white" character
                keys (i.e. numbers, alphabet, and punctuation keys on the primary section of the keyboard), 
                'virtual character keys' are used instead of regular virtual keys.  See the section on 
                <a href="_struct_vkeys.html">virtual keys and virtual character keys</a> for details.

TEXT:           All keyboards are positional by default. To make a keyboard mnemonic, use:

CODELINE:       store(&mnemoniclayout) "1"

TEXT:           Note that positional keyboards are based on a US English layout: any positional keyboard that
                tries to match keystrokes with characters or virtual keys (except [K_oE2]) not present on a US English layout
                will not function correctly. If you are creating a positional keyboard, and you do not use a US English
                layout normally, we suggest you install another language in Control Panel and assign the US English layout
                to it, so that you can easily switch to it to write your keyboard.  You can also view  
                <a href="_english.html">a reference diagram of the US English keyboard layout</a> in this help file.
              

REF
); ?>
