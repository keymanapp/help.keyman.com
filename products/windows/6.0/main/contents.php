<?php include_once( "kmdist.php" );
require_once('includes/template.php');
head([
  'title' => 'Keyman Support | Type to the world in your language',
  'css' => ['Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
]);
FORMAT( <<<ENDFORMAT

PAGE:       Tavultesoft Keyman 6.2

TITLE:      Tavultesoft Keyman 6.2

BODY

SECTION:    Introducing Keyman
LINKSLIST:  "Introducing Keyman",       "intro.html",
            "What's New",               "whatsnew.html",
            "Registering Keyman",       "register.html",
            "About Tavultesoft",        "about.html",
            "Contacting Tavultesoft",   "contact.html"
ENDSECTION

SECTION:    Using Keyman

LINKSLIST:  "Getting Started",          "using.html",
            "Installing a Keyboard",    "kbinstall.html",
            "Using a Keyboard",         "kbusing.html",
            "Removing a Keyboard",      "kbremove.html",
ENDSECTION

SECTION:    Reference

LINKSLIST:  "Using Keyman in different versions of Windows", "platform.html",
            "Text Services Framework",  "tsf.html",
            "System Shadow Keyboards",  "shadow.html",
            "Glossary",                 "glossary.html",
            "Frequently Asked Questions", "faq.html"
ENDSECTION

SECTION:    Other Topics
LINKSLIST:  "Uninstalling Keyman",      "uninstall.html",
            "Keyman Developer",         "developer.html"
ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>