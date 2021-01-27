<?php include_once( "kmdist.php" );
require_once('includes/template.php');
head([
  'title' => 'Keyman Support | Type to the world in your language',
  'css' => ['Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
]);

FORMAT( <<<ENDFORMAT

PAGE:         Frequently Asked Questions
TITLE:        Frequently Asked Questions

BODY

SECTION:      Frequently Asked Questions

TEXT:         <a href="#1">FAQ001: Why doesn't Microsoft Word display my script correctly?</a><br>
              <a href="#2">FAQ002: Why can't I see my keyboard in the Language Bar?</a><br>

HEADING:      <a name="1">FAQ001: Why doesn't Microsoft Word display my script correctly?</a>

TEXT:         Microsoft Word does not turn on its display of a given script unless the correct language is selected.  Select
              the language from Control Panel (install it if necessary).  If one is not available, use a related 
              language/script.

              This is especially an issue with Indic and Far East scripts.

HEADING:      <a name="2">FAQ002: Why can't I see my keyboard in the Language Bar?</a>

TEXT:         There can be two reasons for this.  First, ANSI keyboards cannot be used in the 
              Text Services Framework.  Encourage the developer of the keyboard to release a Unicode version 
              of the keyboard.

              The other reason may be that the Keyman Text Services Framework add-in is not installed.  The add-in is
              called kmtip.kmp, and is included in the Keyman program directory.  You can install it from the Keyman
              Configuration Add-ins page.

ENDSECTION

ENDBODY
              
PAGENAV:      "Table of Contents", "contents.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>