<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:           Tutorial - Rules with Context

TITLE:          Rules with Context

BODY

SECTION:        Rules with Context

TEXT:           Very often we want a keyboard to produce different output based on more than just the last
                keystroke. For example, in the Quick French keyboard, we want the key "e" to produce one of
                "&egrave;", "&eacute;", "&euml;", "&ecirc;", or just "e", depending on what was typed
                immediately before it. To do this we must make our rules look at the context.

                The context is the output from previous rules; that is, the characters that are displayed
                on the screen. We can make a rule work with only certain context by putting this before
                the plus sign in the rule:

TUTECODE:       "^" + "e" > "ê"

TEXT:           With this rule, whenever an 'e' is typed, if it was preceded by a caret (^), the output will be '&ecirc;'.
                It is important to remember that the context consists of <i>output from previous rules</i>, not
                the previous keystrokes. To emphasize this point, consider the four rules below:

TUTECODE:       + "a" > "b"
                + "b" > "c"
                "b" + "c" > "d"
                "c" + "d" > "e"

TEXT:           With these rules, typing "bc" would produce the output "cc", and not "d", as you might expect. This is
                because the key "b" is converted by the second rule into the output "c", while the third rule
                expects a context of "b", and not "c"; we would have to type "ac" to get "d".

                However, if a key has no matching rule, the output will be the same as the key: so the output "e"
                will be produced for the inputs "cd" and "bd".
ENDSECTION

SECTION:        Continuing the Quick French keyboard

TEXT:           Now we know how to create context-dependent rules, we can continue making the Quick French keyboard.
                Let's start with the rules for acute-accented characters, using the ANSI codes from the table we
                prepared earlier:

TUTECODE:       c lowercase characters with acute accent
                "'" + "a" > U+00E1
                "'" + "e" > U+00E9
                "'" + "i" > U+00ED
                "'" + "o" > U+00F3
                "'" + "u" > U+00FA
                "'" + "y" > U+00FD

                c uppercase characters with acute accent
                "'" + "A" > U+00C1
                "'" + "E" > U+00C9
                "'" + "I" > U+00CD
                "'" + "O" > U+00D3
                "'" + "U" > U+00DA
                "'" + "Y" > U+00DD

TEXT:           We can also create similar rules for the other thirty-odd accented characters.
                
                As you can see, even for a simple keyboard like this we quickly end up with a large number
                of rules, which makes for clumsiness. We can make things simpler using stores, and the <b>any</b> and
                <b>index</b> statements.

ENDSECTION

ENDBODY

TUTENAV:    "The Keyboard Body", "tute_A_05.html", "Stores, 'any', and 'index'", "tute_A_07.html"

FOOTER

ENDPAGE
ENDFORMAT
);
?>