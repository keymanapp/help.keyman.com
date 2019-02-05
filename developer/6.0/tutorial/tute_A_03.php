<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:           Tutorial - Writing the Header

TITLE:          Writing the Header

BODY

SECTION:        Overview of a keyboard file
TEXT:           A keyboard file is divided into two sections: the header and the rules.
                The header section defines the name of the keyboard, its bitmap, and other
                general settings. The rules are used to define how the keyboard responds
                to keystrokes from the user, and are divided into groups. We will start by
                writing the header.
ENDSECTION

SECTION:        The keyboard header
TEXT:           The keyboard header is the first part of a keyboard; it consists of statements
                that help Keyman identify the keyboard and set default options for it.  Each
                statement in the header must be on a separate line and is usually written
                with capital letters, although that is not required.
                Keeping the statements in the header in upper case helps you identify them
                easily, and keeps them consistent with keyboard programs other people might
                write.

                We will begin to write the keyboard. If Keyman Developer is not already
                running, start it now. It will open with a blank keyboard file ready
                for us.

                Type or paste the following code into the keyboard file. This is the header
                of our keyboard file.

TUTECODE:       c Simplified French Keyboard for Keyman 6.2
                c
                c This keyboard program uses a simplified set of keys
                c for typing French, especially for those who don't know the
                c standard French keyboard.
                c
                c NOTE: This keyboard was created from the Keyman keyboard
                c programming tutorial.

                VERSION 6.0                 c This keyboard is for use with Keyman 6.0 or later
                NAME "Quick French"
                BITMAP "qfrench.bmp"
                store(&MnemonicLayout) "1"        c This keyboard uses a mnemonic layout.

                begin Unicode > use(Main)

TEXT:           An explanation of the various parts of the header follows on the next page.

ENDSECTION

ENDBODY

TUTENAV:    "Planning the Keyboard", "tute_A_02.html", "The Keyboard Header", "tute_A_04.html"

FOOTER

ENDPAGE
ENDFORMAT
);
?>