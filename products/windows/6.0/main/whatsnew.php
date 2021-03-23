<?php include_once( "kmdist.php" );
require_once('includes/template.php');
head([
  'title' => 'Keyman Support | Type to the world in your language',
  'css' => ['Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
]);

FORMAT( <<<ENDFORMAT

PAGE:       What's New
TITLE:      What's New

BODY

SECTION:    Text Services Framework support
TEXT:       Keyman 6.2 supports the new Text Services Framework that is part of Microsoft Office XP.  This enables Keyman to integrate
            with Microsoft Word 2002 much better than previously.  <a href="tsf.html">Click here</a> for more information.
ENDSECTION

SECTION:    Enhanced European keyboard support
TEXT:       Keyman 5.0 required you to use a US English keyboard (QWERTY layout) for full compatibility with Keyman keyboards.  Version 6.2
            now supports any layout you wish to use, and is not dependent on US English in any way.
ENDSECTION

SECTION:    Visual keyboards
TEXT:       An on-screen and printable keyboard is now available for Keyman 6.2 keyboards.
ENDSECTION

SECTION:    Add-ins
TEXT:       Keyman now supports add-ins for other applications.  Included with Keyman 6.2 are add-ins for Word and RichEdit.  The RichEdit
            add-in does not require RichEdit 3.0.
ENDSECTION

SECTION:    Enhanced integration with Windows languages
TEXT:       It is now possible to switch Keyman keyboards on automatically when a language is selected as a non-Administrative user.
ENDSECTION

HEADING:    What was new in Keyman 5.0?

SECTION:    Unicode support
TEXT:       With the release of version 5.0, Keyman now includes full support for
            <a href="http://www.unicode.org" target="_new">Unicode</a>.
            Unicode is a character encoding standard that supports most of the world's more common scripts, and includes
            support for user-defined scripts. Keyman 5.0 keyboards now support input and output of any of the thousands of
            characters defined in Unicode, including characters outside the Basic Multilingual Plane which are
            encoded with surrogate pairs.
ENDSECTION

SECTION:    Integration with Windows
TEXT:       Keyman 5.0 integrates more tightly with the multilingual features of Windows&nbsp;9x, Me, NT, and 2000.
            Keyman 5.0 also features full shell integration, so that you can install a keyboard by simply double-clicking
            on its icon in Windows Explorer.
ENDSECTION

SECTION:    Keyman Developer
TEXT:       From version 5.0 and up, the Keyman Developer (previously TIKE) is a separate application,
            which must be downloaded and registered independently. This simplifies the deployment of Keyman on the
            majority of systems, where keyboard development is not required. See the
            <a href="http://www.tavultesoft.com/keymandev/">Keyman Developer website</a> for more information.
ENDSECTION

ENDBODY

PAGENAV:      "Table of Contents", "contents.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>