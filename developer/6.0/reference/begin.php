<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:        begin statement

CODE:           begin [ANSI|Unicode] > use(%gnGroup%)

TEXT:           The begin statement tells Keyman which group should be processed first when it receives a 
                keystroke.  You can specify either ANSI or Unicode starting groups in a single begin 
                statement.  If both are omitted, the ANSI option is assumed.

TEXT:           You can include two begin statements in a single keyboard file.  In this case, one must be 
                Unicode and the other ANSI.  Keyman will determine which group to use on the basis of the active 
                application.

EXAMPLE:        begin > use(main)
                begin Unicode > use(main)

HISTORY:        This line originated in SIL-CC, and a simplified version was used in Keyman for consistency.  
                The ANSI/Unicode distinction was introduced in Keyman 5.

REF
); ?>
