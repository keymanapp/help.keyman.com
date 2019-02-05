<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:           Registering Keyman Developer

TITLE:          Registering Keyman Developer

BODY

SECTION:        Registering Keyman Developer

TEXT:           Payment of registration fee is required for use of Tavultesoft Keyman Developer.  You may evaluate
                Keyman Developer for 30 days before registering, but you may
                not distribute any files created with Keyman Developer, or use
                any keyboards created with an unregistered version of Keyman
                Developer after this 30 day period unless you register.

ENDSECTION

SECTION:        Registration Costs
TEXT:           Keyman Developer 6.2 comes in two editions: standard and professional. The Standard edition costs
                US$69. The Professional edition costs US$149 and includes several features not present in the Standard
                edition, including a debugger, support for projects, regression testing, custom images in packages,
                input method extensions, and unicode character names. Note that upgrade, educational, or other discounts may apply.
                
ENDSECTION

SECTION:        How to pay
TEXT:           The easiest way to register is via the registration wizard. Choose <b>Help, Register</b>, and follow the
                prompts onscreen to choose the edition you wish to purchase and other options. This will take you to our
                online store, where you can pay by credit card in US Dollars, Euros, and some other currencies.

TEXT:           You can also register Keyman Developer online at
                <a href="http://www.tavultesoft.com/keymandev/register/">http://www.tavultesoft.com/keymandev/register/</a>.
                
                For alternate forms
                of payment, or large orders, please contact Tavultesoft at
                <a href="mailto:sales@tavultesoft.com">sales@tavultesoft.com</a>.
ENDSECTION

SECTION:      Entering your registration code
TEXT:         After registering, you will receive a registration code from Tavultesoft. You must enter this code into the
              registration dialog. You can access the registration dialog by going to <b>Help</b>,
              then clicking <b>Register</b>, and going to step 4.

              Enter your registration details (Name, Organisation and Registration Code) into the appropriate
              text fields, and select <b>Ok</b>. Keyman Developer will then be registered.
              
              Note that if you purchased a standard edition registration, some of the Professional features that were available
              during evaluation will no longer be active.

ENDSECTION

ENDBODY

PAGENAV:        "Back to Contents", "contents.html"

FOOTER

ENDPAGE
ENDFORMAT
);
?>
