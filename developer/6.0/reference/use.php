<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:    use statement

CODE:       use(%gnGroup%)

TEXT:       The use statement tells Keyman to switch processing to a new group; after Keyman has 
            gone through the new group, and any other nested groups, it will return to the previous
            one.  The use statement can be used with the match and nomatch rules; it will work the same way.

TEXT:       The current output is moved to the context before the new group is entered, so the new group will see the
            output from the fired rule as its context.

EXAMPLE:    any(Vowel) + any(DiacriticKey) > context use(AdjustVowels)

REF
); ?>
