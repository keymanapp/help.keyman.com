<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:           Tutorial - Testing the Keyboard

TITLE:          Testing the Keyboard

BODY

SECTION:        Compiling the Keyboard

TEXT:           Before we can test the keyboard, we must compile it. Choose <b>Keyboard</b>,
                <b>Compile Keyboard</b> or press <b>F7</b> to compile the keyboard. The
                Message window will display the results of the compilation; if you have no
                typing errors, the keyboard should compile successfully.

                If there are any mistakes, an error message will be displayed in the Message
                window, which will tell you the line on which the error occurred.
ENDSECTION

SECTION:        Basic Testing

TEXT:           After compiling the keyboard successfully, we can start testing it. Choose
                <b>Keyboard</b>, <b>Start Test</b> or press <b>F9</b> to begin testing. The
                Keyboard test window will appear.

                Now we test that all the rules operate as expected. To test the rules, we type
                the keystrokes that will give us the output; for example, we can type a quote
                (') followed by one of A, E, I, O, U, or Y to test the uppercase acute-accented
                vowels. Similarly we can test the other accents, and C-cedilla (&Ccedil;) and
                the angled quotes. If the rules are correct, all this should work as we wanted.

TEXT:           Testing the rules in isolation like this will show if the rules are correct or
                not, but won't show other possible errors that might occur in everyday usage
                of the keyboard. For example, look at what happens if you type the following
                quote:

TUTECODE:       'Alors Alice demanda, "Où est ma chatte?"'

TEXT:           As you can see, it comes out incorrectly as:

TUTECODE:       Álors Alice demanda, Öù est ma chatte?"'

TEXT:           The problem occurs when we have a word in quotes that begins with a vowel: the
                keyboard will convert it to an accented vowel. We will need to come up with a
                solution to this problem.
ENDSECTION

ENDBODY

TUTENAV:    "Stores, 'any', and 'index'", "tute_A_07.html", "Deadkeys", "tute_A_09.html"

FOOTER

ENDPAGE
ENDFORMAT
);
?>