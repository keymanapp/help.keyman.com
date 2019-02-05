<?php include_once( "kmdist.php" );
require_once('includes/template.php');
head([
  'title' => 'Keyman Support | Type to the world in your language',
  'css' => ['Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
]);

FORMAT( <<<ENDFORMAT

PAGE:         Registering Keyman
TITLE:        Registering Keyman

EXTLINKSCRIPT

BODY

SECTION:      Who must register?
TEXT:         You may use Keyman for an evaluation period 30 days before either registering or
              removing Keyman from your computer. See the
              <a href="javascript: licence.hhclick();">license agreement</a>
              for more information.
              Additionally, registered customers will receive notification of updates (if requested),
              and benefit from better support.

TEXT:         You are entitled to use the Free Home Use Edition on your own equipment at home only.  Any
              other use requires registration.

ENDSECTION

SECTION:      Pricing
TEXT:         Check <a href="http://www.tavultesoft.com/keyman/register/">the Keyman web site</a>
              at any time for up-to-date pricing.

              For information about educational pricing and site licenses, please <a href="contact.html">contact us</a>.
ENDSECTION

SECTION:      Payment Methods
TEXT:         The recommended payment method is by credit card over the Internet. You can also order by phone, fax, or
              mail. See <a href="http://www.tavultesoft.com/keyman/register/">the Keyman web site</a> for details.
ENDSECTION

SECTION:      How to Register
TEXT:         Keyman 6.2 includes a Purchase wizard to make purchasing Keyman simple.  Click the Purchase button in the Keyman startup screen
              or from Keyman Configuration

SECTION:      Entering your registration code
TEXT:         After registering, you will receive a registration code by email from Tavultesoft. You must enter this code into the
              registration dialog, avaliable from the About dialog in Keyman Configuration.

ENDSECTION

HTML:         <object id=licence type="application/x-oleobject" classid="clsid:adb880a6-d8ff-11cf-9377-00aa003b7a11"
                codebase="hhctrl.ocx#Version=4,72,8252,0" width=1 height=1>
                <param name="Command" value="ShortCut">                   <!-- Run a program -->
                <param name="Item1"   value=",klicence.htm,">             <!-- Window class, exe, params -->
              </object>

RELATED:      "Registration dialog", "../context/register.html"

ENDBODY

PAGENAV:      "Table of Contents", "contents.html", "", ""

FOOTER

ENDPAGE
ENDFORMAT
);
?>
