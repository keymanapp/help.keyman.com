<?php include_once( "kmdist.php" );
require_once('includes/template.php');
head([
  'title' => 'Keyman Support | Type to the world in your language',
  'css' => ['Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
]);

FORMAT( <<<ENDFORMAT

PAGE:         Introducing Keyman
TITLE:        Introducing Keyman

BODY

SECTION:      Welcome to Keyman
TEXT:         Keyman is a keyboard management utility that makes it practical to input many different
              languages in almost any Windows application.  Keyman fully supports 
              <a href="http://www.unicode.org/" target="_new">Unicode</a>, as well as legacy codepage-based 
              applications.

TEXT:         Keyman includes features such as an on-screen keyboard, phonetic and visual-order input
              methods, and seamless integration with the Windows XP Language Bar.  A full list of
              features in Keyman 6 is available <a href="whatsnew.html">here</a>.

TEXT:         The companion packages Keyman Developer and Keyman Developer Professional give you the
              tools to create your own professional keyboard layouts for Windows.
              <a href="developer.html">Click here</a> to read more about Keyman Developer and Keyman 
              Developer Professional.
ENDSECTION

SECTION:      Supported Platforms
TEXT:         Keyman 6.2 supports the following operating systems:
BULLETLIST:   Microsoft Windows 95
              Microsoft Windows 98
              Microsoft Windows Me
              Microsoft Windows NT 4.0 (SP6 and later)
              Microsoft Windows 2000
              Microsoft Windows XP
              Microsoft Windows Server 2003
TEXT:         There are differences in the way Keyman works in some of these operating systems. 
              <a href="platform.html">Click here</a> to read more information about using Keyman on 
              your operating system.
ENDSECTION

ENDBODY

PAGENAV:      "Table of Contents", "contents.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>