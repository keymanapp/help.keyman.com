<?php /*
  Name:             tute_A_05
  Copyright:        Copyright (C) 2005 Tavultesoft Pty Ltd.
  Documentation:    
  Description:      
  Create Date:      18 Mar 2008

  Modified Date:    18 Mar 2008
  Authors:          mcdurdin
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          18 Mar 2008 - mcdurdin - Fixup $
*/
 include_once( "kmdev.php" );
FORMAT( <<<ENDFORMAT
PAGE:           Tutorial - The Keyboard Body

TITLE:          The Keyboard Body

BODY

SECTION:        The Keyboard Body

TEXT:           The body of the keyboard is the most important part: it determines the behaviour
                of the keyboard. The body consists of groups, which in turn contain one or
                more rules which define the responses of the keyboard to certain keystrokes.
ENDSECTION

SECTION:        Groups
TEXT:           There are two types of groups: one that processes the keys pressed and the
                context, and one that processes the context only. For most purposes, the latter
                type of group will be unnecessary. A group begins with a Group statement, and
                ends either at the start of another group, or at the end of the keyboard file.
                
                We will only use one group in the Quick French keyboard, called Main. We mark
                the start of it with the group statement below. Add this line to the keyboard.

TUTECODE:       group(Main) using keys

TEXT:           "Using keys" tells Keyman that this group will process keystrokes.
ENDSECTION

SECTION         Basic Rules
TEXT:           A rule tells Keyman the output to produce for a certain input. A rule consists
                of three parts: the context, the key, and the output.

                The context specifies the conditions under which a rule will act. If the most
                recent output matches the context of a rule, the rule will be processed.
                The key specifies which keystroke the rule will act upon. 
                The output is the characters that are produced by a rule.

HEADING:        Simple rules
TEXT:           The simplest rules in Keyman consist of just a key and output, as below. (The
                examples in this section are just for illustration, and do not form part of the
                Quick French keyboard).

TUTECODE:       + "a" > "ä"

TEXT:           In this rule, the key is "a", and the output is "&auml;". A simple rule begins with
                a plus sign, followed by the key, a greater-than symbol (suggesting "becomes"),
                and finally the output. As you might guess, this rule will change a lowercase
                'a' entered by the user into '&auml;'.

                The key and output can be written as a character in single
                or double quotes (as above), or as its Unicode character code, or using a named
                constant. The rule above could have been written in any of the following ways:

TUTECODE:       + 'a' > 'ä'

                + U+0061 > U+00E4

                store(ADIERESIS) 'ä'
                + 'a' > \$ADIERESIS

TEXT:           You can also write the key in one form and the context in another.

HEADING:        Rules with longer output
TEXT:           The output of a rule is not limited to a single character. You could, for
                example, write a rule such as the following:

TUTECODE:       + "f" > "ph"

TEXT:           This would change any f's typed into 'ph'. If the output of a rule consists of
                more than one character, you can write the characters in different ways if
                necessary, with a space separating each part. You can specify multiple
                characters in quotes, but if you use the Unicode codes to write the characters,
                you must separate each with a space:

TUTECODE:       + "f" > U+0070 U+0068

                + "f" > U+0070 "h"

TEXT:           This rule is functionally identical to the one further above.

ENDSECTION

RELATED:    "Groups", "../reference/_struct_groups.html"

ENDBODY

TUTENAV:    "The Keyboard Header", "tute_A_04.html", "Rules with Context", "tute_A_06.html"

FOOTER

ENDPAGE
ENDFORMAT
);
?>
