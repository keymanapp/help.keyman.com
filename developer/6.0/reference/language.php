<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:      LANGUAGE statement

CODE:         LANGUAGE %nLang%, %nSubLang%

TEXT:           The LANGUAGE statement in Keyman 6.0 specifies the system language that a keyboard should be associated with.
                If the specified language is available on the user's system, Keyman will install it and associate
                it with the system shadow keyboard for the Keyman keyboard. The Keyman keyboard will then be activated
                whenever the language is selected using Windows' language selector in the taskbar.
                
                To install a keyboard with the LANGUAGE option under Windows NT, Windows 2000, or Windows XP, the
                current user must have administrative privileges.
                
                One situation where the LANGUAGE keyword is indispensable is in writing a Keyman keyboard for
                a right-to-left language. If you specify a right-to-left language with the LANGUAGE keyword, then
                the keyboard will work as expected; otherwise it will produce left-to-right output.
                
REF
); ?>
