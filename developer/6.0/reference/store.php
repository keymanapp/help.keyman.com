<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:      store statement

CODE:         store(%snStore%) %xsData%

TEXT:         The store statement lets you store a string of characters or keys in a buffer which can then 
              be referenced with any and index.  Proper use of store can reduce many keyboards down to a
              few rules.  A store is terminated at the end of the line (or continuation lines).  Stores
              can contain either Unicode or ANSI characters, but a single store cannot contain both.
              Stores can also contain virtual keys and deadkeys, and outs() statements.

EXAMPLE:      store(keys) "ABCDEFG"

HISTORY:      Starting in version 6.0, deadkeys and virtual keys are allowed within stores.  Version 5.0 and earlier
              did not allow these.

REF
); ?>
