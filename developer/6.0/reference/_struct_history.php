<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:      Keyboard File History

TEXT:           <font color="red">This document is incomplete</font>

TEXT:         The following header entries have become obsolete since Keyman 5.0:

DESCLINKSTABLE: "100",        "350",            "0"
                "bitmaps",    "bitmap.html",    "Obsolete (was reference to two images, for Keyman 3.2 keyboards)"
                "language",   "language.html",  "Obsolete* (was the Windows system language for the keyboard)"
                "layout",     "layout.html",    "Obsolete (was the Windows system layout for the keyboard)"

TEXT:         *In Keyman 6.0, the LANGUAGE header has been reintroduced, but with a different meaning. See
              <a href="language.html">The LANGUAGE Header</a> for more information.

TEXT:         In Keyman 4.0, the "+" character became required, and usage became stricter to follow the standard now: the
              plus character must separate context from keystroke in a rule.

TEXT:         Other keyboard file history information will be added here as it becomes available.

REF
); ?>
