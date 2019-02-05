<?php include_once( "kmdist.php" );
require_once('includes/template.php');
head([
  'title' => 'Keyman Support | Type to the world in your language',
  'css' => ['Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
]);

FORMAT( <<<ENDFORMAT

PAGE:         Using Keyman in different versions of Windows
TITLE:        Using Keyman in different versions of Windows

BODY

SECTION:      Introduction
TEXT:         Older versions of Windows have had limited support for non-European scripts.  Each version of Windows has its own set of
              limitations and things to watch out for.

HOWTO:        Discover which version of Windows you have
              Hold down the Windows key, and press Pause.
              If you do not have a Windows key on your keyboard, start Control Panel and select System.
              The dialog that appears will tell you which version of Windows you have.
ENDSECTION

SECTION:      Windows 95, 98 and Me
BULLETLIST:   These versions of Windows do not support Unicode input directly.
              Keyman makes Unicode input possible with a limited set of applications, including, among others: Word 97, Word 2000, Word 2002, WordPad (and other programs that use RichEdit), UltraEdit, EmEditor.
              Check the <a href="http://www.tavultesoft.com/keyman/support/FAQ002.php">Tavultesoft website</a> for an up-to-date list of applications that support Unicode input with Keyman.
              Windows 95, 98 and Me do not support <a href="glossary.html#smp">Unicode supplementary plane characters</a>.
              Keyman requires Internet Explorer 4.0 or later on Windows 95 to run.

ENDSECTION

SECTION:      Windows NT 4
BULLETLIST:   Keyman requires Service Pack 6 or later on Windows NT 4.
              Windows NT 4 does not support <a href="glossary.html#smp">Unicode supplementary plane characters</a>.
ENDSECTION

SECTION:      Windows 2000, Windows XP (Home and Pro)
BULLETLIST:   Keyman has no special requirements on these operating systems.
              These operating systems do not display <a href="glossary.html#smp">Unicode supplementary plane characters</a> by default.
              Display of many Unicode scripts is dependent on a Microsoft technology known as <a href="glossary.html#uniscribe">Uniscribe</a>.

HOWTO:        Switch on Unicode supplementary plane character display in Windows 2000 and Windows XP
              Start <a href="javascript:config.hhclick();">Keyman Configuration</a>, and select the <b>Options</b> tab.
              Select the checkbox <b>Turn on Unicode supplementary character display</b>.
              Close Keyman Configuration (it will prompt you to restart Windows).

HTML:         <object id=config type="application/x-oleobject" classid="clsid:adb880a6-d8ff-11cf-9377-00aa003b7a11"
                codebase="hhctrl.ocx#Version=4,72,8252,0" width=1 height=1>
                <param name="Command" value="ShortCut">                   <!-- Run a program -->
                <param name="Item1"   value="TfrmAbout,kmshell.exe,">     <!-- Window class, exe, params -->
              </object>

ENDSECTION

ENDBODY

PAGENAV:      "Table of Contents", "contents.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>
