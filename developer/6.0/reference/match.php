<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:        match rule

CODE:           match > %esString%

TEXT:           In each group, if Keyman finds a match rule, it will use it when a rule in the group
                was matched.  A match rule can include use, return, beep and normal characters.

TEXT:           esString: The extended string to output, including the statements mentioned above.

EXAMPLE:        match > use(AdjustVowels)


REF
); ?>
