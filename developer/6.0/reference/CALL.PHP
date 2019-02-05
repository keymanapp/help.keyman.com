<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:    call statement

CODE:       call(%snStore%)

TEXT:       The call statement calls an Input Method Extension (IMX) DLL. Functionally it
            behaves like the use statement, and can be used anywhere the use statement is valid except after the begin statement..
            
            The store given must be referencing a function in an external DLL, as below:
            
EXAMPLE:    store(DLLFunction) "myimx.dll:KeyEvent"
            + 'a' > call(DLLFunction)

TEXT:       See <a href="../imx/imxintro.html">DLL Interface for Keyman</a> for more information.

REF
); ?>
