<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:        context statement

CODE:           context

                context(%i%)

TEXT:           The context statement reproduces the context stored from the rule match, or
                a single character of it, into the output.  Use the context statement as
                much as possible as it is significantly faster than using the index statement.
                                 
TEXT:           A single character from the context can be output (on the right-hand side of
                a rule) or matched (on the left-hand side of a rule) using context(i), which
                produces the ith character of the stored context.

EXAMPLE:        any(cons) "W" + any(key) > context index(keyout,3)
                
                "contex" + "t" > context(2) context(6)     c outputs "ox"

TEXT:           Note that although the context(n) statement can be used in the left-hand side
                of a rule, the context statement cannot.

HISTORY:        Version 6.0 was the first version to allow context(n) on the left-hand side of a rule.
                The context(n) construct was introduced in version 6.0.
REF
); ?>
