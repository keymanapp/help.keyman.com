<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT

PAGE:           Keywords by Name

BODY

SECTION:        Keywords by name

DESCLINKSTABLE: "100",        "350",            "0"
                "any",        "any.html",       "Matches on an array of characters"
                "beep",       "beep.html",      "Generates a beep on the speaker"
                "begin",      "begin.html",     "Defines the starting group for the keyboard layout"
                "bitmap",     "bitmap.html",    "An image that appears in the language menu"
                "bitmaps",    "bitmap.html",    "Obsolete (was reference to two images, for Keyman 3.2 keyboards)"
                "call",       "call.html",      "Calls an Input Method Extension DLL"
                "caps",       "caps.html",      "Manages CAPS LOCK behaviour"
                "context",    "context.html",   "Outputs the context part of a rule"
                "copyright",  "copyright.html", "A copyright message for the keyboard"
                "deadkey",    "deadkey.html",   "Matches and generates deadkeys"
                "&amp;ethnologuecode","ethnologue.html","The SIL Ethnologue code for the language"
                "group",      "group.html",     "Starts a new group of rules"
                "hotkey",     "hotkey.html",    "A default activation hotkey"
                "index",      "index.html",     "Outputs from an array of characters"
                "language",   "language.html",  "Specifies the system language to install"
                "layout",     "layout.html",    "Obsolete (was the Windows system layout for the keyboard)"
                "match",      "match.html",     "A system rule that is fired when another rule is matched"
                "message",    "message.html",   "A message that appears when the keyboard is installed"
                "&amp;mnemoniclayout","mnemonic.html","Sets a keyboard to be mnemonic or positional"
                "name",       "name.html",      "The name of the keyboard"
                "nomatch",    "nomatch.html",   "A system rule that is fired when no rule is matched"
                "nul",        "nul_.html",      "Forces no output on a rule"
                "outs",       "outs.html",      "Outputs an array of characters"
                "return",     "return.html",    "Stops processing of the current keystroke"
                "store",      "store.html",     "Defines an array of characters"
                "use",        "use.html",       "Starts processing in another group"
                "version",    "version.html",   "The Keyman keyboard version"

RELATED:        "Keywords by type",   "_keywordsbytype.html"
                "Language reference", "_struct.html"

ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
