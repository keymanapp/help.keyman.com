<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:      Header keywords

TEXT:           Header keywords are being replaced by system stores.  However, all these
                header keywords will continue to be available in future versions of Keyman.  New features will only be
                accessible through system stores.

DESCLINKSTABLE: "100",        "350",            "0"
                "bitmap",     "bitmap.html",    "An image that appears in the language menu"
                "bitmaps",    "bitmap.html",    "Obsolete (was reference to two images, for Keyman 3.2 keyboards)"
                "caps",       "caps.html",      "Manages CAPS LOCK behaviour"
                "copyright",  "copyright.html", "A copyright message for the keyboard"
                "hotkey",     "hotkey.html",    "A default activation hotkey"
                "language",   "language.html",  "Obsolete (was the Windows system language for the keyboard)"
                "layout",     "layout.html",    "Obsolete (was the Windows system layout for the keyboard)"
                "message",    "message.html",   "A message that appears when the keyboard is installed"
                "name",       "name.html",      "The name of the keyboard"
                "version",    "version.html",   "The Keyman keyboard version"

ENDSECTION

SECTION:        System stores

DESCLINKSTABLE: "100",          "350",              "0"
                "&amp;bitmap",      "bitmap.html",      "An image that appears in the language menu"
                "&amp;caps",        "caps.html",        "Manages CAPS LOCK behaviour"
                "&amp;copyright",   "copyright.html",   "A copyright message for the keyboard"
                "&amp;ethnologuecode","ethnologue.html","SIL Ethnologue language code for the keyboard"
                "&amp;hotkey",      "hotkey.html",      "A default activation hotkey"
                "&amp;language",    "language.html",    "Obsolete (was the Windows system language for the keyboard)"
                "&amp;message",     "message.html",     "A message that appears when the keyboard is installed"
                "&amp;mnemoniclayout","mnemonic.html",  "Sets the keyboard to be mnemonic or positional"
                "&amp;name",        "name.html",        "The name of the keyboard"
                <!-- "&amp;oldcharposmatching","oldcharposmatching.html","Enables version 5.0 index() matching" -->
                "&amp;version",     "version.html",     "The Keyman keyboard version"


REF
//"&amp;includecodes","includecodes.html","Include list of named character constants"
); ?>
