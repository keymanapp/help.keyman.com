<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:           Licencing Keyman Runtime

TITLE:          Licencing Keyman Runtime

BODY

SECTION:        Licencing

TEXT:           You have two options for distributing the Keyman runtime:

BULLETLIST:     The Keyman runtime can be distributed free of charge, and end users register their own copies individually. This is appropriate for developers who wish to distribute just a keyboard.

BULLETLIST:     You can purchase a set number of licences or an OEM licence and distribute a pre-registered version of Keyman runtime. This method is appropriate for developers who are bundling Keyman and some keyboards with another, larger application.

TEXT:           In either situation, you must register Keyman Developer before distributing keyboards 
                created with it.  Please contact Tavultesoft Sales at <a href="mailto:sales@tavultesoft.com">sales@tavultesoft.com></a>
                for further information.

ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
