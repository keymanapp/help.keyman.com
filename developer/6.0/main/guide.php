<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:           Programmer's Guide

TITLE:          Programmer's Guide

BODY

SECTION:        Programmer's Guide

LINKSLIST:      
                "Processing rules", "../guide/rules.html"
                "Using stores", "../guide/stores.html"
                "Using virtual keys", "../guide/vkeys.html"
                "Using multiple groups", "../guide/groups.html"
                "Tutorial", "../tutorial/tute_A_01.html"
                "Advanced programming example", "../guide/advanced.html"
ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
