<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:           Creating Keyboards

TITLE:          Creating Keyboards

BODY

SECTION:        Introduction
TEXT:           If you have never created a keyboard before, you might want to
                work through the <a href="../tutorial/tute_A_01.html">Keyman Developer Tutorial</a>.
                The tutorial takes you through the process of creating a keyboard
                using the Keyman Keyboard Language.

TEXT:           There are two ways to create a keyboard from scratch:
BULLETLIST:     Using the Keyboard Wizard
BULLETLIST:     Using the Keyman Keyboard Language
ENDSECTION

SECTION:        Using the Keyboard Wizard
TEXT:           The Keyboard Wizard gives you a simple interface to quickly create a
                keyboard using a visual representation of a computer keyboard.  You can
                drag and drop characters from a character map, and create ANSI and Unicode
                keyboard layouts.  You cannot access most of Keyman's more powerful features
                from the Keyboard Wizard, but it will be useful to get you started on your
                design.  You can convert keyboards created in the Keyboard Wizard to standard
                Keyman source files in TIKE.<HTMLONLY>  To learn more about the Keyboard Wizard,
                click <a href="../context/child_kbdwiz.html">here</a>.</HTMLONLY>
ENDSECTION

SECTION:        Using the Keyman Keyboard Language
TEXT:           The Keyman Keyboard Language (.kmn files) is what provides the flexibility that
                is needed to write keyboards with complex character management, including constraints,
                dead keys, post-entry parsing, virtual key management (accessing any key on the keyboard),
                and other Keyman features.  You can learn more about the Keyman Keyboard Language in the
                Programmer's Guide<HTMLONLY>, available <a href="guide.html">here</a></HTMLONLY>.
ENDSECTION


ENDBODY

PAGENAV:        "Table of Contents", "contents.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>
