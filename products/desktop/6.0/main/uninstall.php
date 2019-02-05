<?php include_once( "kmdist.php" );
require_once('includes/template.php');
head([
  'title' => 'Keyman Support | Type to the world in your language',
  'css' => ['Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
]);

FORMAT( <<<ENDFORMAT

PAGE:         Uninstalling Keyman
TITLE:        Uninstalling Keyman

BODY

SECTION:      Uninstalling Keyman
TEXT:         We hope you will never need to uninstall Keyman!  If you have had any problems with Keyman,
              please contact technical support at <a href="http://www.tavultesoft.com/">www.tavultesoft.com</a>
              as we are always happy to help.

TEXT:         Uninstalling Keyman will remove all keyboards that have been installed. However,
              you will be given the option of removing or retaining any fonts that may have
              been installed with Keyman Keyboards. If you have any documents that use these
              fonts, you should choose not to uninstall the fonts, or your documents may
              become unreadable.

HOWTO:        Uninstall Keyman (Windows 2000 or Windows XP)
              Open the <b>Add or Remove Programs</b> applet from Control Panel or <a href="javascript:addremovexp.hhclick();">click here</a>.
              From the list, select <b>Tavultesoft Keyman</b>, and click <b>Change/Remove</b>.
              Follow the prompts to uninstall Keyman.

HOWTO:        Uninstall Keyman (other versions of Windows)
              Open the <b>Add or Remove Programs</b> applet from Control Panel or <a href="javascript:addremove.hhclick();">click here</a>.
              From the list, select <b>Tavultesoft Keyman</b>, and click <b>Add/Remove</b>.
              Follow the prompts to uninstall Keyman.

ENDSECTION

HTML:         <object id=addremove type="application/x-oleobject" classid="clsid:adb880a6-d8ff-11cf-9377-00aa003b7a11"
                codebase="hhctrl.ocx#Version=4,72,8252,0" width=1 height=1>
                <param name="Command" value="ShortCut">                   <!-- Run a program -->
                <param name="Item1" value=",rundll32.exe,shell32.dll,Control_RunDLL appwiz.cpl,,1">
              </object>

HTML:         <object id=addremovexp type="application/x-oleobject" classid="clsid:adb880a6-d8ff-11cf-9377-00aa003b7a11"
                codebase="hhctrl.ocx#Version=4,72,8252,0" width=1 height=1>
                <param name="Command" value="ShortCut">                   <!-- Run a program -->
                <param name="Item1" value=",rundll32.exe,shell32.dll,Control_RunDLL appwiz.cpl">
              </object>

ENDBODY

PAGENAV:      "Table of Contents", "contents.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>