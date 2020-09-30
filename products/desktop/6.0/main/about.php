<?php include_once( "kmdist.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT

PAGE:         About Tavultesoft
TITLE:        About Tavultesoft

BODY

SECTION:      About Tavultesoft

TEXT:         Tavultesoft is an Australian software company based in Hobart, Tasmania.  Our current staff are:

TEXT:         <b>Myself, Marc Durdin</b>: Primary developer and owner of Tavultesoft.  I have a degree in
              Computing from the University of Tasmania.

TEXT:         <b>David Turner</b>: Marketing manager.

ENDSECTION

SECTION:      History

TEXT:         Marc Durdin: In 1990, I lived with my parents in a small village on the North coast of Papua New Guinea,
              called Tavulte,
              for a short time.  The name of our company is derived from this, and is pronounced Ta-vul-te-soft.  My
              family later moved to Laos, and I developed the first version of Keyman as a part of Lao Script for Windows,
              to enable us to type in Lao.  Keyman and Lao Script for Windows later became separate products, with myself
              focusing on Keyman, and my father working on Lao Script for Windows.

              Keyman started to spread to other languages when friends in Thailand saw it and wanted to use it for other
              languages.  It is now used all over the world.<br><br>

ENDSECTION

ENDBODY

PAGENAV:      "Table of Contents", "contents.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>
