<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:           Tutorial - Deadkeys

TITLE:          Deadkeys

BODY

SECTION:        Solving the Problem

TEXT:           Probably the easiest solution to the problem which we encountered on the last
                page is to design the keyboard so that the user types a quote key twice when
                they want to produce a quote, but once when they want to use it as an accent.
                However, we cannot simply use the rule:

TUTECODE:       "'" + "'" > "'"

TEXT:           This will certainly produce a single quote after it's typed twice; however it
                will still produce the same error. We need to distinguish between the output
                of this rule, when the user wants a quote, and that of a single quote press,
                when the user wants to place an accent on a vowel. To implement this behaviour,
                we use deadkeys.
ENDSECTION

SECTION:        Deadkeys

TEXT:           A deadkey is like a character that is used in the context or output but never
                appears on the screen. We use deadkeys like this:

TUTECODE:       + "'" > deadkey(quote)

                c Handle acute accents
                deadkey(quote) + any( plainvowels ) > index( acutevowels, 2 )

                c Handle a single quote
                deadkey(quote) + "'" > "'"

TEXT:           Note that for the sake of convenience, a deadkey can also be written in a
                short form:

TUTECODE:       dk(quote)     c This is identical to deadkey(quote)

TEXT:           Type the three rules above in place of the existing rule for acute accents in
                the keyboard so far. If you test the keyboard now, you will find that the error
                no longer occurs. This is because accented vowels are only produced after the
                deadkey, and no deadkey is output if the user types a quote key twice.

                Another difference is that the quote is no longer displayed before you type the
                vowel: this is because we are converting the quote to a deadkey. If necessary,
                we can still distinguish between rules in the above manner and display the
                quote, if we just add a quote before the deadkey, like this:

TUTECODE:       + "'" > "'" dk(quote)

                c Handle acute accents
                "'" dk(quote) + any( plainvowels ) > index( acutevowels, 2 )

                c Handle a single quote
                "'" dk(quote) + "'" > "'"

TEXT:           However, we will not use this for the Quick French keyboard, as it could cause
                some confusion when the user wants to type a quote, and not an accent.

                Now we can make changes so that all the other accents use deadkeys as
                well, for consistency, and add rules to output the accent character by typing
                the key twice.


                The Quick French keyboard is now complete. The full source is on the next page.
ENDSECTION

RELATED:    "Deadkey", "../reference/deadkey.html"

ENDBODY

TUTENAV:    "Testing the Keyboard", "tute_A_08.html", "The Finished Keyboard", "tute_A_10.html"

FOOTER

ENDPAGE
ENDFORMAT
);
?>