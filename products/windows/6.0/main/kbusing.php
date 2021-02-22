<?php include_once( "kmdist.php" );
require_once('includes/template.php');
head([
  'title' => 'Keyman Support | Type to the world in your language',
  'css' => ['Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
]);

FORMAT( <<<ENDFORMAT

PAGE:         Using a Keyboard
TITLE:        Using a Keyboard

BODY

SECTION:      Activating the keyboard
TEXT:         Before you can type with a keyboard, you must activate it. Because each application can have a different
              keyboard selected, you must make sure the correct application is active before activating a keyboard.

TEXT:         Keyman 6.2 can automatically switch on a Keyman keyboard whenever a particular language is selected.  Details on
              how to do this are in the <a href="kbinstall.html">keyboard install help page</a>.  In this situation,
              switching on a Keyman keyboard is as simple as selecting the language with the Windows
              <a href="glossary.html#languageindicator">language indicator</a> or the
              <a href="glossary.html#languagebar">Language Bar</a> in Windows XP.

TEXT:         With Word 2002 and other recent applications, Keyman supports an important new integration model through
              the <a href="glossary.html#TSF">Text Services Framework</a> (TSF).  You can use the TSF for any Unicode Keyman
              keyboards.  To use the TSF with Keyman, activate keyboards through the Language Bar.  For more information
              on the TSF, read <a href="tsf.html">this topic</a>.

HOWTO:        Select a Keyman keyboard with the Language Bar (Word 2002 and other TSF-enabled applications)
              Select the language you wish to type in from the Language Bar.<br><img src="../img/langbar1.png"><br><br>
              Select <b>Tavultesoft Keyman</b> from the list of input methods for the language.<br><img src="../img/langbar2.png"><br><br>
              Select the Keyman keyboard from the Keyman menu in the Language Bar.<br><img src="../img/langbar3.png">

HOWTO:        Select a Keyman keyboard with the Keyman keyboard selector (all other applications)
              There are two possible icons in the task tray: the Windows language selector, and the Keyman keyboard selector.
              First, choose the language you wish to use.
              Click on the keyboard indicator in the taskbar status area, and select the keyboard you want from the menu.<br><img src="../img/traymenu.gif"><br><br>

ENDSECTION

SECTION:      Selecting a font
TEXT:         Depending on the application and the keyboard you are using, it may be necessary to select an appropriate
              font that can display the characters used by the keyboard.

              If the output from the active keyboard is a series of rectangles, or gibberish characters, make sure you are
              using a font that is compatible with the keyboard.

IMAGE:        "Gibberish output with an incompatible font selected", "../img/badfont"

TEXT:         In Microsoft Word, you can also have problems with fonts if you have the wrong language selected.  Read
              <a href="faq.html#1">FAQ001</a> for instructions on how to avoid this.

ENDSECTION

SECTION:      More about Unicode Keyboards
TEXT:         More information on using Unicode keyboards is available <a href="unicode.html">here</a>.

ENDSECTION

ENDBODY

PAGENAV:      "Table of Contents", "contents.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>