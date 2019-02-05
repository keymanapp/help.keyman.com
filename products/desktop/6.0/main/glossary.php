<?php include_once( "kmdist.php" );
require_once('includes/template.php');
head([
  'title' => 'Keyman Support | Type to the world in your language',
  'css' => ['Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
]);

FORMAT( <<<ENDFORMAT

PAGE:         Glossary
TITLE:        Glossary

BODY

SECTION:      Glossary

TEXT:         This page contains a list of a few of the terms referred to in the Keyman documentation.

TEXT:         <b><a name="addin">Add-in</a>:</b> Keyman 6.2 supports these small support programs that provide
              enhanced input for an application.  A common enhancement is to support Unicode input in 
              Windows 95,98 and Me for an application.

TEXT:         <b><a name="languagebar">language bar</a>:</b> Office XP and Windows XP introduced this new method
              of selecting languages and input methods.  The language bar will commonly be found either at the
              right of the task bar or at the top right hand corner of the screen.  More information is available
              on the <a href="tsf.html">Text Services Framework page</a>.

TEXT:         <b><a name="languageindicator">language indicator</a>:</b> The language indicator is an icon
              on the taskbar from which you can choose the active input language.  In Windows XP and Office XP,
              this has been replaced with the Language Bar.

TEXT:         <b><a name="smp">Supplementary plane characters</a>:</b> The original version of Unicode supported
              about 65000 characters.  This was soon found to be a limitation and an extra one million characters
              were added in the supplementary planes.  However, these supplementary plane characters are only
              currently supported in a few applications.

TEXT:         <b><a name="TSF">Text Services Framework (TSF)</a>:</b> The new method of handling text input through
              keyboard, handwriting and speech, introduced in Office XP and Windows XP.  More detail is available 
              <a href="tsf.html">here</a>.
              
TEXT:         <b><a name="uniscribe">Uniscribe</a>:</b> The Microsoft display processor that takes the 
              characters stored in a document and displays them on the screen.  It handles such things as 
              right-to-left display, diacritics,joining and separating characters (in scripts such as Arabic, 
              or Devanagri), and visual reordering.  Uniscribe and Keyman together make up a complete input and
              display solution.  It is not currently possible to extend Uniscribe to support new languages -- only
              Microsoft can do this.  Because of this, an open-source project called 
              <a href="http://graphite.sil.org/index.htm">Graphite</a> has been started as an alternative to Uniscribe.

ENDSECTION

ENDBODY
              
PAGENAV:      "Table of Contents", "contents.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>