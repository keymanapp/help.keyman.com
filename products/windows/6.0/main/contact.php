<?php include_once( "kmdist.php" );
require_once('includes/template.php');
head([
  'title' => 'Keyman Support | Type to the world in your language',
  'css' => ['Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
]);

FORMAT( <<<ENDFORMAT

PAGE:         Contacting Tavultesoft
TITLE:        Contacting Tavultesoft

BODY

SECTION:      Before contacting us
TEXT:         When asking a question about Keyman, or reporting a problem you have found, it will help us to
              answer your query if you can provide us with the following information:

BULLETLIST:   Your registration information, if you are a registered user.
              The version of Keyman you are using. You can find this by right-clicking the Keyman icon in the taskbar and choosing <b>About...</b><HTMLONLY>, or by clicking <a name="doabout" onclick="about.hhclick();" href="#doabout">here</a></HTMLONLY>.
              Your operating system version, and service pack details (if applicable). This can be found in <b>Control Panel</b>, <b>System</b>, under the <b>General</b> tab. <HTMLONLY><a name="dosystem" onclick="system.hhclick();" href="#dosystem">Click here</a> to open System Properties.</HTMLONLY>
              The application you were using Keyman with and its version number (go to <b>Help</b>, <b>About</b> in the application to find this).
              Particulars of any keyboard files you were using when you experienced the problem.
ENDSECTION

SECTION:      How to contact us
TEXT:         You can contact us by web, post or fax.  Web contact is preferred.
ENDSECTION
HTABLE:       "132",            "264"
              "Website",        "<a href='http://www.tavultesoft.com/' target='_new'>www.tavultesoft.com</a>"
              "Postal address", "Tavultesoft<br>PO Box 550<br>Sandy Bay&nbsp; TAS 7006<br>Australia"
              "Fax",            "03 9923 6047 (in Australia)<br>+61 3 9923 6047 (international)"

HTML:         <object id=about type="application/x-oleobject" classid="clsid:adb880a6-d8ff-11cf-9377-00aa003b7a11"
                codebase="hhctrl.ocx#Version=4,72,8252,0" width=1 height=1>
                <param name="Command" value="ShortCut">                   <!-- Run a program -->
                <param name="Item1"   value="TfrmAbout,kmshell.exe,-a">   <!-- Window class, exe, params -->
              </object>

HTML:         <object id=system type="application/x-oleobject" classid="clsid:adb880a6-d8ff-11cf-9377-00aa003b7a11"
                codebase="hhctrl.ocx#Version=4,72,8252,0" width=1 height=1>
                <param name="Command" value="ShortCut">                   <!-- Run a program -->
                <param name="Item1"   value="System,sysdm.cpl,">   <!-- Window class, exe, params -->
              </object>

ENDBODY

PAGENAV:      "Table of Contents", "contents.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>
