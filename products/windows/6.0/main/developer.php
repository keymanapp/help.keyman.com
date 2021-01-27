<?php include_once( "kmdist.php" );
require_once('includes/template.php');
head([
  'title' => 'Keyman Support | Type to the world in your language',
  'css' => ['Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
]);

FORMAT( <<<ENDFORMAT

PAGE:         Keyman Developer
TITLE:        Keyman Developer

BODY

SECTION:      What is Keyman Developer?
TEXT:         Keyman Developer is a program with which you can create keyboards for use with Keyman.
              Some of the major features Keyman Developer includes are:

BULLETLIST:   Creation of Keyman 6.2 keyboards and packages
              Keyboard wizard for quick construction of simple keyboards
              Integrated keyboard testing and debugging facilities
              Visual keyboard editor
              Keyboard design tutorials and help
              Powerful keyboard design programming language

TEXT:         Although earlier versions of Keyman included most of the functionality of Keyman Developer, with
              version 5.0 it was made into a separate application, which both simplifies Keyman deployment and reduces
              the size of Keyman.

TEXT:         With version 6.0, Keyman Developer became available in two editions: Standard and Professional.
ENDSECTION

SECTION:      How can I obtain Keyman Developer?
TEXT:         Keyman Developer is a shareware product, and can be downloaded from
              <a href="http://www.tavultesoft.com/keymandev/">the Keyman Developer website</a> for evaluation. After
              a trial period of 30 days, you must either register Keyman Developer or remove it from your computer.
              See the documentation accompanying Keyman Developer for details about registering it.
ENDSECTION

ENDBODY

PAGENAV:      "Table of Contents", "contents.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>