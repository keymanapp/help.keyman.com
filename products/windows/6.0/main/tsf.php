<?php include_once( "kmdist.php" );
require_once('includes/template.php');
head([
  'title' => 'Keyman Support | Type to the world in your language',
  'css' => ['Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
]);

FORMAT( <<<ENDFORMAT

PAGE:         Keyman and the Text Services Framework
TITLE:        Keyman and the Text Services Framework

BODY

SECTION:      What is the Text Services Framework?
TEXT:         The Text Services Framework, or TSF, is a set of components for new applications that support advanced input and text
              processing.  It supports features such as keyboard drivers, handwriting recognition, speech recognition, as well as
              spell checking and other text processing functions.

TEXT:         The <a href="glossary.html#languagebar">Language Bar</a> is the core user interface for TSF.  From the Language Bar, you
              can select the input language, and control keyboard input, handwriting recognition and speech recognition.

IMAGE:        "The Language Bar", "../img/langbar1.png"

TEXT:         The most important advantage of using TSF with Keyman is that Keyman can read the current "context" from the application.
              The "context" is the characters on the screen around the insertion point.  Previous versions of Keyman remembered the
              context while inputting text, but as soon as an arrow key was pressed, or the mouse clicked, Keyman would forget the context.
              This means that existing text can be edited in a much more intuitive manner when using TSF.

ENDSECTION

SECTION:      What applications support TSF?
TEXT:         At the time of release of Keyman 6, only one application is known to fully support TSF -- Microsoft Word 2002.  Although
              other Office XP applications appear to support TSF, they only include partial support, so Keyman will not work with them.
ENDSECTION

SECTION:      Using Keyman with the TSF
TEXT:         When Keyman is installed, it will also install a <a href="glossary.html#addin">Keyman add-in</a> that is registered as a
              <i>text service</i>.  This service will be listed as a "Keyboard layout/IME" in the TSF configuration dialog with the name
              "Tavultesoft Keyman".  When the Keyman text service is installed, it will become available for every language on your system.

TEXT:         The Keyman text service only supports Unicode keyboards.  To use older keyboards, you should use the Keyman icon in the
              system notification area to select your keyboard.

HOWTO:        Select a Keyman keyboard with the Language Bar (Word 2002 and other TSF-enabled applications)
              Select the language you wish to type in from the Language Bar.<br><img align=center src="../img/langbar1.png"><br><br>
              Select <b>Tavultesoft Keyman</b> from the list of input methods for the language.<br><img align=center src="../img/langbar2.png"><br><br>
              Select the Keyman keyboard from the Keyman menu in the Language Bar.<br><img align=center src="../img/langbar3.png">

TEXT:         Note that when you have the Keyman text service enabled, the Keyman icon is not available in the system notification area.

ENDSECTION

ENDBODY

PAGENAV:      "Table of Contents", "contents.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>