<?php include_once( "kmdist.php" );
require_once('includes/template.php');
head([
  'title' => 'Keyman Support | Type to the world in your language',
  'css' => ['Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
]);

FORMAT( <<<ENDFORMAT

PAGE:         Removing a Keyboard
TITLE:        Removing a Keyboard

BODY

SECTION:      Disabling a keyboard
TEXT:         If you just want to remove a keyboard from the keyboard selection menu, but wish to keep it available
              for use later, you should disable the keyboard rather than uninstalling it. In the
              <a href="javascript:config.hhclick();">Keyman Configuration dialog</a>,
              clear the check mark beside the name of the keyboard in the list of installed
              keyboards and select <b>OK</b>. The keyboard will no longer appear in the menu. You can
              enable the keyboard again by checking it in the list.
ENDSECTION

SECTION:      Uninstalling a keyboard
TEXT:         Uninstalling a keyboard will remove it from your system, so that you must reinstall
              it in order to use it again.  You can do this either through the Keyman Configuration dialog or
              the Control Panel Add or Remove Programs applet.

TEXT:         <b>Note:</b> If you have turned off the option <b>List keyboards in 'Add or Remove Programs' Control Panel applet</b>, then
              the second method here will not apply to you.

HOWTO:        Uninstall a keyboard with the Keyman Configuration dialog
              Start the <a href="javascript:config.hhclick();">Keyman Configuration dialog</a>.
              Select the keyboard in the list of installed keyboards, and click the Uninstall button.
              If the keyboard was installed as part of a package, you may be given the option to keep any fonts that were installed with the keyboard. If you have any documents that use these fonts, you should choose to retain them, or your documents may become unreadable.

HOWTO:        Uninstall a keyboard with Control Panel
              Open the Add/Remove Programs Properties dialog from Control Panel or <a href="javascript:addremove.hhclick();">click here</a>.
              Look for the keyboard you wish to remove in the list--its name will be prefixed with 'Keyman Keyboard'--and choose <b>Add/Remove</b>.
              If the keyboard was installed as part of a package, you may be given the option to keep any fonts that were installed with the keyboard. If you have any documents that use these fonts, you should choose to retain them, or your documents may become unreadable.
ENDSECTION

HTML:         <object id=config type="application/x-oleobject" classid="clsid:adb880a6-d8ff-11cf-9377-00aa003b7a11"
                codebase="hhctrl.ocx#Version=4,72,8252,0" width=1 height=1>
                <param name="Command" value="ShortCut">                   <!-- Run a program -->
                <param name="Item1"   value="TfrmAbout,kmshell.exe,">     <!-- Window class, exe, params -->
              </object>

HTML:         <object id=addremove type="application/x-oleobject" classid="clsid:adb880a6-d8ff-11cf-9377-00aa003b7a11"
                codebase="hhctrl.ocx#Version=4,72,8252,0" width=1 height=1>
                <param name="Command" value="ShortCut">                   <!-- Run a program -->
                <param name="Item1" value=",rundll32.exe,shell32.dll,Control_RunDLL appwiz.cpl,,1">
              </object>

RELATED:      "Installing a Keyboard",        "kbinstall.html"
              "Keyman Configuration dialog",  "../context/config_keyboards.html"

ENDBODY

PAGENAV:      "Table of Contents", "contents.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>