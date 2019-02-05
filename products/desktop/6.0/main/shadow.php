<?php include_once( "kmdist.php" );
require_once('includes/template.php');
head([
  'title' => 'Keyman Support | Type to the world in your language',
  'css' => ['Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
]);

FORMAT( <<<ENDFORMAT

PAGE:         Using System Shadow Keyboards
TITLE:        Using System Shadow Keyboards

BODY

SECTION:      Consideration

TEXT:         System shadow keyboards were introduced in Keyman 5 as a method of easily associating a keyboard with a language.
              With Keyman 6.2, there is a new option that is cleaner and simpler.  Unless you need to use system shadow keyboards,
              you should follow the steps listed in <a href="kbinstall.html">the keyboard install help</a>.

ENDSECTION

SECTION:      Using System Shadow Keyboards

TEXT:         For example, if you have a customized keyboard for French, you could use it in place of
              the standard French keyboard that Windows installs.  Or, if you have a keyboard for a
              language not supported by Windows, you can associate the keyboard with some
              language that you don't use.  Let's say you have a keyboard for
              Anglo-Saxon; you could associate this with Afrikaans or Finnish, assuming
              that you don't normally use either of those.

TEXT:         When you install a keyboard into Keyman, a Windows keyboard with the same
              name is also installed into the Windows Control Panel.  You can associate
              this keyboard with any language you like.

HOWTO:        To associate a keyboard with a language (Windows 95, 98, Me)
              Choose Start/Settings/Control Panel
              Double-click on Keyboard and select the Language tab.
              If you wish to associate the Keyman keyboard with a language already on your system, highlight that language, click Properties, highlight the name of the Keyman keyboard, and click OK.
              If you wish to associate the Keyman keyboard with a language not yet installed on your computer, click Add, choose the language you want, and click OK.  Then click on Properties and select the Keyman keyboard.
              Make sure that the "Enable indicator on Taskbar" and "Left-Alt+Shift" boxes are checked, and click OK to close the Keyboard dialog.  (You may get a message asking you to insert the original Windows CD-ROM, so have it ready.)

HOWTO:        To associate a keyboard with a language (Windows NT 4, 2000)
              Choose Start/Settings/Control Panel
              Double-click on Keyboard and select the Language tab.
              If you wish to associate the Keyman keyboard with a language already on your system, highlight that language, click Properties, highlight the name of the Keyman keyboard, and click OK.
              If you wish to associate the Keyman keyboard with a language not yet installed on your computer, click Add, choose the language you want from the list of languages, and the Keyman keyboard from the list of keyboards, and click OK.
              Make sure that the "Enable indicator on Taskbar" and "Left-Alt+Shift" boxes are checked, and click OK to close the Keyboard dialog.  (You may get a message asking you to insert the original Windows CD-ROM, so have it ready.)

HOWTO:        To associate a keyboard with a language (Windows XP)
              Choose Start/Control Panel
              Select Date, Time, Language, and Regional Options (if not in Classic View)
              Select Regional and Language Options, select the Languages tab, and click Details
              Click Add to add a keyboard, select the input language, and select the Keyman keyboard from the list of Keyboard layouts/IMEs.

ENDSECTION

ENDBODY

PAGENAV:      "Table of Contents", "contents.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>