<?php include_once( "kmdist.php" );
require_once('includes/template.php');
head([
  'title' => 'Keyman Support | Type to the world in your language',
  'css' => ['Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
]);

FORMAT( <<<ENDFORMAT

PAGE:         Getting Started
TITLE:        Getting Started

BODY

SECTION:      Introduction
TEXT:         Keyman interprets and translates input from the computer keyboard according to a
              set of rules called a keyboard. These rules are stored in a keyboard
              file, which a user must download and install in order to type in the language
              defined by the keyboard.

TEXT:         You must have Keyman running to use a Keyman keyboard.

TEXT:         <b>Note:</b> You can have Keyman start with Windows so that you have your keyboards
              accessible all the time by selecting the <b>Start Keyman with Windows</b> option in
              the <a href="javascript:config.hhclick();">Keyman Configuration</a> Options page.
ENDSECTION

SECTION:      How a keyboard is distributed
TEXT:         Keyman keyboards can be distributed either as a keyboard file (.kmx) alone, or
              as a keyboard package (.kmp), which contains a keyboard file and may also
              contain fonts, documentation, and other related files.
ICONTABLE:    "144",                                                                                        "144"
              "<img src='../img/kmxicon.gif' alt='(image: kmx file)' width=32 height=32><br>Keyboard file", "<img src='../img/kmpicon.gif' alt='(image: kmp file)' width=32 height=32><br>Keyboard package"
ENDSECTION

SECTION:      Where to obtain a keyboard
TEXT:         Tavultesoft maintains a <a href="http://www.tavultesoft.com/keyman/downloads/keyboards/" target="_new">list of keyboards</a>
              available for Keyman 6.2, in which you can search for
              a keyboard for a specific language or script.

              You can install a keyboard directly from the site or download it and install it from your computer.  For more information,
              read the <a href="kbinstall.html">keyboard installation</a> help topic.
ENDSECTION

SECTION:      Keyboards from previous versions
TEXT:         Keyman 6.2 can load keyboards from Keyman 5.0 and later.  Keyboard files from version 4.02 or earlier versions of
              Keyman cannot be used with version 6.2.  If you have such a keyboard that you would like to use with Keyman 5.0, you
              should try to contact its author to see if they have the keyboard available
              for Keyman 5.0.

              <a href="developer.html">Keyman Developer</a> is required to recompile earlier
              keyboard files into Keyman 6.2 format.
ENDSECTION

ENDBODY

PAGENAV:      "Table of Contents", "contents.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>