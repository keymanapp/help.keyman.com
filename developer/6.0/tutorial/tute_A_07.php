<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:           Tutorial - Stores, 'any', and 'index'

TITLE:          Stores, 'any', and 'index'

BODY

SECTION:        Stores, 'any', and 'index'

TEXT:           When we have many similar rules, as in the last example on the previous page, we can group them
                together into one rule by using stores. A store is a set of characters that are grouped under a
                single name. Stores are used in rules with the <b>any</b> and <b>index</b> statements. We create a store
                with a <b>store</b> statement:

TUTECODE:       store(vowels) "aeiou"

TEXT:           This creates a store called "vowels", which contains the five lowercase vowels. Note that we could
                also have written the content of the store using ANSI or Unicode character codes, in the same way
                as the output.

                The <b>any</b> statement is used to match a character from a specific store. For example, the following rule
                will replace any vowel with a period, when used with the store above:

TUTECODE:       + any(vowels) > "."

TEXT:           The <b>any</b> statement can be used in the context or in the key part of a rule. It cannot be used in
                the output.

                The second statement that is used with stores is the <b>index</b> statement. It is used only in the output
                of a rule, and will output the character from a particular store at the same position as the character
                matched by a specified <b>any</b> statement. This is best shown with an example; this rule will convert all
                input to uppercase:

TUTECODE:       store(lowercase) "abcdefghijklmnopqrstuvwxyz"
                store(uppercase) "ABCDEFGHIJKLMNOPQRSTUVWXYZ"

                + any(lowercase) > index(uppercase,1)

TEXT:           When a letter, such as "j" is typed, the <b>any</b> statement finds its position in the "lowercase" store; the
                <b>index</b> statement then gets this index from the <b>any</b> statement, and outputs the character at the same
                position in the "uppercase" store, in this case "J".

                The <b>index</b> statement has two parts: the store from which it takes the output character, and the number
                of the <b>any</b> statement that it gets the character position from. This number is found by counting the
                characters in the context and key parts of the rule up to the any statement. Again, a few examples may
                help to illustrate this:

TUTECODE:       "a" + any(somestore) > index(otherstore,2)         c The 'any' statement
                                                                   c is character #2
                "ab" any(somestore) + "c" > index(otherstore,3)    c The 'any' statement
                                                                   c is character #3

                c Here the 'index' statement references the second 'any' statement used,
                c which is character #4
                d065 any(somestore) "B" + any(otherstore) > index(thirdstore,4)

                c You can have multiple 'index' statements in the output, which can
                c reference the same or different 'any's
                any(store1) + any(store2) > index(store1,2) index(store2,1) index(store3,2)
ENDSECTION

SECTION:        Using stores in the Quick French keyboard

TEXT:           We can now reduce the number of rules needed for the Quick French keyboard by using stores. We will make
                five stores: one for the unaccented vowels, and one each for vowels with acute accents, grave accents,
                circumflexes, and diereses. For clarity, the <b>group</b> statement is repeated below:

TUTECODE:       group(Main) using keys

                store( plainvowels )  'a'    'e'    'i'    'o'    'u'      'A'    'E'    'I'    'O'    'U'
                store( acutevowels )  U+00E1 U+00E9 U+00ED U+00F3 U+00FA   U+00C1 U+00C9 U+00CD U+00D3 U+00DA
                store( gravevowels )  U+00E0 U+00E8 U+00EC U+00F2 U+00F9   U+00C0 U+00C8 U+00CC U+00D2 U+00D9
                store( circumvowels ) U+00E2 U+00EA U+00EE U+00F4 U+00FB   U+00C2 U+00CA U+00CE U+00D4 U+00DB
                store( dresisvowels ) U+00E4 U+00EB U+00EF U+00F6 U+00FC   U+00C4 U+00CB U+00CF U+00D6 U+00DC

                "'" + any( plainvowels ) > index( acutevowels, 2 )
                "`" + any( plainvowels ) > index( gravevowels, 2 )
                "^" + any( plainvowels ) > index( circumvowels, 2 )
                '"' + any( plainvowels ) > index( dresisvowels, 2 )

TEXT:           This is far clearer than the long list of rules that we used earlier. Obviously we should add one or two
                more ordinary rules to produce upper- and lower-case '&ccedil;', '&yacute', and also the angled quotes
                '&laquo;' and '&raquo;'. Then we will have almost finished the keyboard:

TUTECODE:       "'" + "y" > U+00FD    c Acute-accented Y
                "'" + "Y" > U+00DD

                "'" + "c" > U+00E7    c C-cedilla
                "'" + "C" > U+00C7

                "<" + "<" > U+00AB    c Angled quotes
                ">" + ">" > U+00BB

TEXT:           All we need to do now is to test the keyboard.

ENDSECTION

RELATED:    "Store", "../reference/store.html"
            "Index", "../reference/index.html"
            "Any",   "../reference/any.html"

ENDBODY

TUTENAV:    "Rules with Context", "tute_A_06.html", "Testing the Keyboard", "tute_A_08.html"

FOOTER

ENDPAGE
ENDFORMAT
);
?>