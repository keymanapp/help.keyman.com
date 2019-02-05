<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:         Contacting Tavultesoft
TITLE:        Contacting Tavultesoft

BODY

SECTION:      Before contacting us
TEXT:         When asking a question about Keyman Developer, or reporting a problem you have found, it will help us to
              answer your query if you can provide us with the following information:

BULLETLIST:   Your registration information, if you are a registered user. Registered users of Keyman Developer will have priority over non-registered users with support questions.
              The version of Keyman Developer you are using. You can find this by choosing About from the Help menu.
              Your operating system version, and service pack details (if applicable). This can be found in Control Panel, System, under the General tab.
              Particulars of any keyboard files you were using when you experienced the problem.
ENDSECTION

SECTION:      How to contact us
TEXT:         You can contact us by web, post or fax. Web is preferred, as it is cheaper, and faster.

HTABLE:       "132",            "264"
              "Website",        "<a href='http://www.tavultesoft.com/' target='_new'>www.tavultesoft.com</a>"
              "Postal address", "Tavultesoft<br>PO Box 550<br>Sandy Bay&nbsp; TAS 7006<br>AUSTRALIA"
              "Fax",            "03 9923 6047 (in Australia)<br>+61 3 9923 6047 (international)"

ENDSECTION

ENDBODY

PAGENAV:      "Table of Contents", "contents.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>
