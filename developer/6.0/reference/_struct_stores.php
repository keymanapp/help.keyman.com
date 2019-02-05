<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:      Using Stores

TEXT:         Stores provide a facility to match a character against an array of characters.  They can also be used to 
              give mnemonic names to strings.  Keyman 5.0 introduced the concept of <a href="_struct_headers.html">system
              stores</a> that replace the header statements used in earlier versions of Keyman.

TEXT:         The most common use of stores is to reduce the number of rules required in a keyboard by matching multiple
              characters rather than a single character in a rule.  This is accomplished with the <a href="any.html">any</a>
              and <a href="index.html">index</a> statements.  The any statement, on the left hand side of a rule, will
              match any character in a given store, while the index statement, on the right hand side of the same rule,
              will return the character at the corresponding position in another store.  For example,

TUTECODE:     store(lowercase) "aeiou"
              store(uppercase) "AEIOU"

              + any(lowercase) > index(uppercase, 1)    c translate vowels to upper case

TEXT:         Starting with version 6.0 of Keyman, <a href="deadkey.html">deadkeys</a> and 
              <a href="_struct_vkeys.html">virtual keys</a> are permitted in store statements.

TEXT:         The following statements are used with stores:

DESCLINKSTABLE: "100",        "350",            "0"
                "any",        "any.html",       "Matches on an array of characters"
                "index",      "index.html",     "Outputs from an array of characters"
                "outs",       "outs.html",      "Outputs an array of characters"
                "store",      "store.html",     "Defines an array of characters"

REF
); ?>
