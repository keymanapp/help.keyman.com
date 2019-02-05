<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:      Long lines and continuations

TEXT:         If you have a long line, you can wrap it to the next line by inserting a backslash (\) as
              the last character on the line.  The primary limitation is that you cannot use comments on 
              a line like this.  The backslash must not be inside quotes.

REF
); ?>
