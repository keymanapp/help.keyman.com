<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:      &amp;Name store and NAME statement

CODE:         store( &Name ) "%tsKeyboardName%"

              NAME %tsKeyboardName%

TEXT:         The NAME statement lets you give a more descriptive name to your keyboard than just the 
              file name.  If NAME isn't specified in the keyboard file, Keyman will use the filename
              of the keyboard, excluding the extension, so the NAME statement is optional.

TEXT          If a name is specified in the keyboard file, care should be taken to ensure that you give
              it an easily recognisiable and unique name.  For example, rather than call your keyboard
              "Dutch", which would confuse users who have the Windows' Dutch keyboard already installed,
              you should call your keyboard "My Dutch" or "Modified Dutch".

REF
); ?>
