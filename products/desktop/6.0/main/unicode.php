<?php include_once( "kmdist.php" );
require_once('includes/template.php');
head([
  'title' => 'Keyman Support | Type to the world in your language',
  'css' => ['Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
]);

FORMAT( <<<ENDFORMAT

PAGE:         Using Unicode Keyboards
TITLE:        Using Unicode Keyboards

BODY

SECTION:      Introduction
TEXT:         Unicode is a character encoding standard that supports most of the world's more common scripts, and includes
              support for user-defined scripts.  Many older applications do not fully support Unicode, so keyboards that
              are Unicode-based may not work properly in them.

TEXT:         Keyman keyboards can use either Unicode or the older codepage-based formats.  Codepage formats usually only
              support one or at most two writing systems (or scripts).  This means, for instance, that in a database you can
              only use a single language in a given field.  Some applications may let you use only a single language in the
              whole document, when using codepage formats.

TEXT:         Windows 95, 98 and Me also only include limited support for Unicode.  A number of applications have introduced support
              for Unicode input using Keyman on these operating systems.  Check the Tavultesoft website for an up-to-date list.

ENDSECTION

SECTION:      Workarounds

TEXT:         Make sure that you have installed the RichEdit addin (look in Keyman Configuration, Addins tab) as this allows Unicode
              input in a large number of older applications.

TEXT:         If you are working on Windows 95, 98 or Me, the WordLink addin will allow you to type Unicode into Microsoft Word.

TEXT:         You may find that you can use a Unicode keyboard to enter into another, newer, application, and then use the clipboard to
              copy and paste text into the older application.

ENDSECTION

ENDBODY

PAGENAV:      "Table of Contents", "contents.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>