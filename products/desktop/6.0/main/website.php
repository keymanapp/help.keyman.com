<?php include_once( "kmdist.php" );
require_once('includes/template.php');
head([
  'title' => 'Keyman Support | Type to the world in your language',
  'css' => ['Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
]);

FORMAT( <<<ENDFORMAT

WEBSITEPAGE:  The Keyman Website

BODY

SECTION:    The Keyman website
TEXT:       The Keyman website should have opened in new window. If it has not, you can access the website from
            <a href="http://www.tavultesoft.com/keyman/" target="_new">here</a>.
ENDSECTION

ENDBODY

PAGENAV:      "Table of Contents", "contents.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>