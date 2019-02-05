<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:      Comments

TEXT:         Comments must be started with a "c" character (case-insensitive), and followed 
              by a space character.  The comment continues to the end of the line and cannot be 
              <a href="_struct_longlines.html">line-extended</a>. Comments cannot be included 
              in <a href="_struct_longlines.html">line-extended</a> lines.

TUTECODE:     c This is a comment line
              + 'a' > 'b'    c This line changes "a" to "b"
              + 'c' > \
                      'd'    c A comment here is okay too


REF
); ?>
