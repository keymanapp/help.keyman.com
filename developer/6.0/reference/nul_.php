<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:          nul statement

CODE:             nul

TEXT:             The nul statement will delete the context and key on the left hand side of the rule from the 
                  output; it is equivalent to having an empty output (which is not allowed).  The nul statement
                  probably will not be used often, because there are not many times you would want to delete the
                  context and keystroke.  The nul command must be the only character or command on the right
                  hand side of the rule.

                  nul can be used in the context in one special situation.  It is used at the start of the 
                  context to tell Keyman to find a match only if the 'nul' statement is before the start of the
                  context buffer.  For example, you may use this to test if the user is typing a character at the
                  start of a paragraph, and use a different character in this situation.

                  Be careful when using nul in the context.  Unless the user is using a Text Services Framework 
                  aware application, context will be empty after cursor movement, menu access, or many other
                  situations.  This means that the nul keyword may match in such situations, where you are not 
                  expecting it, for example in the middle of a word.

                  In a Text Services Framework application, the nul keyword will match at the start of a text buffer,
                  and nowhere else.  For example, in Word 2002, it will match at the start of the document, after a 
                  page, column or section break, at the start of a header or footer, at the start of a table cell and
                  other similar situations.

EXAMPLE:          any(cons) + any(key) > nul      c delete consonant and current keystroke
                  nul + 'a' > 'A'                 c match 'a' only if context buffer is empty

REF
); ?>
