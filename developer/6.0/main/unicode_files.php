<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:           Unicode and Other Files

TITLE:          Unicode and Other Files

BODY

SECTION:        Unicode and Other Files

TEXT:           With Keyman Developer 6.2, you can now edit text files containing Unicode
                characters encoded as UTF-8 and UTF-16. One major consequence to this is
                that keyboard source files can now contain Unicode characters, instead of
                having to use U+xxxx codes to represent them (although the U+xxxx codes
                are still supported, and perhaps better in some circumstances).
                
TEXT:           You can convert a file between the standard ANSI encoding, UTF-8, and UTF-16
                using the file format dropdown list on the toolbar. Note that any Unicode
                characters in the file will be lost if it is converted to ANSI.
                
TEXT:           Keyman Developer 6.2 also adds the ability to create and edit XML and HTML
                documents, with syntax highlighting to easily distinguish the different parts
                of the files. This is intended primarily for editing HTML Readme files for
                keyboards, but is not limited to that. Note that XML and HTML documents can also
                be saved as UTF-8 or UTF-16.

ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
