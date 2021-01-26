<?php include_once( "kmdist.php" );
require_once('includes/template.php');
head([
  'title' => 'Keyman Support | Type to the world in your language',
  'css' => ['Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
]);

FORMAT( <<<ENDFORMAT

PAGE:         Installing a Keyboard
TITLE:        Installing a Keyboard

BODY

SECTION:      Installing a keyboard from the Tavultesoft website
TEXT:         The <a href="http://www.tavultesoft.com/keyman/downloads/keyboards/" target="_new">Tavultesoft website</a>
              has a list of Keyman keyboards for many languages.  You can install a keyboard from this webpage simply by
              clicking on it.  Or, you can save the keyboard to your hard disk and follow the steps below to install it
              from your computer.
ENDSECTION

SECTION:      Installing a keyboard from your computer
TEXT:         The simplest way to install a keyboard or keyboard package is to open
              it from Windows Explorer. You can also install a keyboard from the
              <a href="javascript:config.hhclick();">Keyman Configuration dialog</a>,
              by clicking the <b>Install</b> button in the Keyboards tab, and selecting the keyboard in the resulting dialog.
ENDSECTION

SECTION:      The install process
TEXT:         After you have selected a keyboard for installation, Keyman will present
              you with a dialog (see Image 1, below) that displays some details about the
              keyboard.  If you wish to display additional details about the keyboard,
              click the Advanced button.

TEXT:         <center><img src='../img/form_install.png'><br>Image 1: Keyboard install dialog box</center>

TEXT:         Keyboards are available in a single keyboard form (.kmx file) or in a package form (.kmp file).  A package can
              include fonts, documentation and multiple keyboards.  Many keyboards available on the Tavultesoft website are
              in the form of packages.
ENDSECTION

SECTION:      Using Keyman keyboards in place of Windows keyboards
TEXT:         Windows has a list of languages you can install on your computer.  When you select one of these languages,
              Windows chooses a default keyboard for that language.  Keyman lets you use a Keyman keyboard
              instead of the Windows default keyboard for any language.

//:           Each of these
              languages has a Windows keyboard that will be used when you select associated with it.

TEXT:         In Keyman 6, there are two methods of using Keyman keyboards in place of Windows
              keyboards.

HOWTO:        Use a Keyman keyboard in place of a Windows keyboard (Recommended method)
              Start <a href="javascript:config.hhclick();">Keyman Configuration</a>.
              Select the Languages tab.
              In the table that appears, select the language for which you wish to always use a Keyman keyboard.
              Click in the last column or press F2 to select the Keyman keyboard.
              Click the OK button to save your selection.

HOWTO:        Use a Keyman keyboard in place of a Windows keyboard (System shadow keyboard method)
              For details on the advanced "System shadow keyboard" method, <a href="shadow.html">click here</a>.

TEXT:         Once you have associated your Keyman keyboard with a language, you can
              switch between languages using the Left-Alt+Shift combination; the language
              in effect at the moment will be displayed in the <a href="glossary.html#languageindicator">language indicator</a>
              in the system tray (or in the <a href="glossary.html#languagebar">Language Bar</a> in Windows XP).
              Keyman will automatically select the keyboard you associated with any particular language.

ENDSECTION

HTML:         <object id=config type="application/x-oleobject" classid="clsid:adb880a6-d8ff-11cf-9377-00aa003b7a11"
                codebase="hhctrl.ocx#Version=4,72,8252,0" width=1 height=1>
                <param name="Command" value="ShortCut">                   <!-- Run a program -->
                <param name="Item1"   value="TfrmMain,kmshell.exe,">     <!-- Window class, exe, params -->
              </object>

RELATED:      "Using Keyman keyboards",                 "kbusing.html"
              "Removing Keyman keyboards",              "kbremove.html"
              "Keyman Configuration dialog",            "../context/config_keyboards.html"
              "Keyboard and package install options",   "../context/view_install.html"

ENDBODY

PAGENAV:      "Table of Contents", "contents.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>