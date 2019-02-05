<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT

PAGE:           Keywords by Type

BODY

SECTION:        Keywords by type

HEADING:        Header keywords

TEXT:           Header keywords are being replaced by system stores.  However, all these
                header keywords will continue to be available in future versions of Keyman.  New features will only be
                accessible through system stores.

DESCLINKSTABLE: "100",        "350",            "0"
                "bitmap",     "bitmap.html",    "An image that appears in the language menu"
                "bitmaps",    "bitmap.html",    "Obsolete (was reference to two images, for Keyman 3.2 keyboards)"
                "caps",       "caps.html",      "Manages CAPS LOCK behaviour"
                "copyright",  "copyright.html", "A copyright message for the keyboard"
                "&amp;ethnologuecode","ethnologue.html","The SIL Ethnologue code for the language"
                "hotkey",     "hotkey.html",    "A default activation hotkey"
                "language",   "language.html",  "Specifies the system language to install"
                "layout",     "layout.html",    "Obsolete (was the Windows system layout for the keyboard)"
                "message",    "message.html",   "A message that appears when the keyboard is installed"
                "&amp;mnemoniclayout","mnemonic.html","Sets a keyboard to be mnemonic or positional"
                "name",       "name.html",      "The name of the keyboard"
                "version",    "version.html",   "The Keyman keyboard version"

HEADING:        Rule keywords

DESCLINKSTABLE: "100",        "350",            "0"
                "any",        "any.html",       "Matches on an array of characters"
                "beep",       "beep.html",      "Generates a beep on the speaker"
                "call",       "call.html",      "Calls an Input Method Extension DLL"
                "context",    "context.html",   "Outputs the context part of a rule"
                "deadkey",    "deadkey.html",   "Matches and generates deadkeys"
                "index",      "index.html",     "Outputs from an array of characters"
                "nul",        "nul_.html",      "Forces no output on a rule"
                "outs",       "outs.html",      "Outputs an array of characters"
                "return",     "return.html",    "Stops processing of the current keystroke"
                "use",        "use.html",       "Starts processing in another group"

HEADING:        Structural keywords

DESCLINKSTABLE: "100",        "350",            "0"
                "begin",      "begin.html",     "Defines the starting group for the keyboard layout"
                "group",      "group.html",     "Starts a new group of rules"
                "match",      "match.html",     "A system rule that is fired when another rule is matched"
                "nomatch",    "nomatch.html",   "A system rule that is fired when no rule is matched"
                "store",      "store.html",     "Defines an array of characters"

RELATED:        "Keywords by name",   "_keywordsbyname.html"
                "Language reference", "_struct.html"

ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
