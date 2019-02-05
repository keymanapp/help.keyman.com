<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:      Using Groups

TEXT:         Groups provide a facility for grouping related rules, similar to functions 
              in other programming languages.  When used effectively, groups can reduce the
              size and complexity of your keyboards significantly.

TEXT:         Groups can match on context only, or on context and keystroke.  The context-only groups
              can be very useful for pre- and post-processing rules, such as reordering stacked
              diacritics.

TEXT:         The examples below show the two types of groups.

TUTECODE:     group(mygroup)                   c context only
                'a' > 'b'

              group(mygroup) using keys        c context and keystroke
                'a' + 'a' > 'c'

TEXT:         The <a href="use.html">use</a> statement allows you move into another group when a rule
              is matched.  All output from the current group preceding the <b>use</b> statement is
              processed into the context before the subsequent group is entered (although it is not
              sent to the application until processing finishes for the current keystroke).
              For example:

TUTECODE:     c This example prohibits two vowels in a row

              begin > use(precheck)

              group(precheck)
                any(vowel) > context use(vowelstate)                                                             
                nomatch > use(nostate)

              group(vowelstate) using keys
                + any(vowel) > beep
                nomatch > use(nostate)

              group(nostate) using keys
                + any(cons) > index(cons, 1)

TEXT:         Several important things to note from this example:

TEXT:         The first rule (any(vowel) > context use(vowelstate)) uses the 
              <a href="context.html">context</a> keyword to copy the matched context to the output, so that
              Keyman can move it back into the context for use with the vowelstate group.  If you do not do this,
              the context will be dropped before vowelstate is used, and the character will be deleted from the
              screen.

TEXT:         If the final group processed is a context and keystroke group ("using keys"), and there is not a 
              nomatch rule, and the keystroke is not matched in the group, the keystroke will be output 
              to the screen, regardless of whether or not it was matched in earlier groups.

TEXT:         The following statements and special rules are used with groups:

DESCLINKSTABLE: "100",        "350",            "0"
                "begin",      "begin.html",     "Defines the starting group for the keyboard layout"
                "group",      "group.html",     "Starts a new group of rules"
                "match",      "match.html",     "A system rule that is fired when another rule is matched"
                "nomatch",    "nomatch.html",   "A system rule that is fired when no rule is matched"
                "return",     "return.html",    "Stops processing of the current keystroke"
                "use",        "use.html",       "Starts processing in another group"

REF
); ?>
