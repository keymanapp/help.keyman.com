<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:         Programmer's Guide - Stores

TITLE:        Stores

BODY

SECTION:      Stores

TEXT:         Stores are a method of grouping multiple characters together, in order to deal
              with them all in a similar way. The most common use of stores is to reduce the
              number of rules required in a keyboard by allowing a single rule to match
              multiple characters through the use of stores and the <b>any</b> statement. An
              example of this is given in the <a href="../tutorial/tute_A_07.html">tutorial</a>.
              
              <a href="../reference/_struct_headers.html">System stores</a> are stores with a name beginning with &, 
              which have a special purpose, usually defining properties or behaviour of the keyboard.
              
              Stores with only a single character are usually used to define
              <a href="../reference/_struct_constants.html">named constants</a>.

ENDSECTION

SECTION:      Creating Stores

TEXT:         Stores are created with the <b>store</b> statement:

CODELINE:     store( %storename% ) %storecontents%

TEXT:         Where <i>storename</i> is an identifier you give to the store, and <i>storecontents</i>
              is the store's contents, expressed as a string or a sequence of Unicode or ANSI
              character constants. Virtual keys and deadkeys can also be used in stores.

              All stores must be given unique identifiers, and are visible throughout the
              keyboard file. A store statement can be placed anywhere in a keyboard source
              file, and its visibility is unaffected.

ENDSECTION

SECTION:      Using Stores

TEXT:         Stores are most often used with the <b>any</b> and <b>index</b> keywords. The
              <b>any</b> keyword is used in the context or key section of the rule, and will
              match any character in the specified store, remembering its index.

CODELINE:     any( %store% )

TEXT:         The <b>index</b> statement is used to look up a character in a store at the index
              where a specified <b>any</b> statement matched a character. The <b>any</b>
              statement used to obtain the index is referenced by its position in the context
              and key, a 1-based number.

CODELINE:     index( %store%, %position% )

TEXT:         Note that an <b>index</b> statement may reference an <b>any</b> statement which
              uses a different store: the only requirement is that the stores used by each have
              the same length.

TEXT:         Example:

CODELINE:     any(vowel) + '^' > index(vowel_circum, 1)

ENDSECTION

SECTION:      Outputting Stores

TEXT:         The <b>outs</b> statement can be used to output the contents of a store. This
              can be used in another store, or in the context or output of a rule.

CODELINE:     outs( %storename% ) 

TEXT:         The <b>IPAMenu.kmn</b> sample keyboard gives an example of the use of stores and
              <b>outs</b> to create a menu-based keyboard for entry of characters from the
              International Phonetic Alphabet.

ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
); ?>
