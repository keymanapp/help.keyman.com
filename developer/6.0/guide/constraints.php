<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:         Programmer's Guide - Constraints

TITLE:        Constraints

BODY

SECTION:      Constraints

TEXT:         Constraints are rules that restrict certain combinations from being typed.
              Constraints can be made with any rules, even <b>match</b> or <b>nomatch</b>
              rules.

              Typical constraints would reject isolated keystrokes, keystrokes following a
              certain context, or certain context and keystroke combinations.
ENDSECTION

SECTION:      Rejecting keystrokes

TEXT:         To make a keystroke produce no output, you use the <b>nul</b> keyword. For
              example, we could use the following rule to prevent the user from typing "Q":

TUTECODE:     + "Q" > nul

TEXT:         In some cases, you might want to let the user know that they typed an illegal
              key; for this you would use the <b>beep</b> statement. The <b>beep</b> statement,
              like the <b>nul</b> statement, produces no output, but it plays the sound
              assigned to "Default Beep" in the Sounds Control Panel.

TUTECODE:     + "Q" > beep

TEXT:         One difference between the <b>nul</b> and <b>beep</b> statements is that the
              <b>nul</b> statement is only valid as the whole output, while the <b>beep</b>
              statement can be used as just a part of the output.

ENDSECTION

SECTION:      Rejecting keystrokes after a context

TEXT:         In order to reject a keystroke following a certain context, you make the rule
              output just the context. Logically, you use the <b>context</b> statement for
              this:

TUTECODE:     "ba" + "d" > context

TEXT:         This would have the effect of ignoring the "d": the output would be the context,
              so to the user it would appear as though they had never typed the "d".
              You can also use the <b>beep</b> statement here to aurally alert the user that
              they typed a bad word.

TUTECODE:     "ba" + "d" > context beep

ENDSECTION

SECTION:      Rejecting both context and keystroke

TEXT:         In certain special situations, you might wish to reject both the context and the
              keystroke. You can use the <b>nul</b> statement to achieve this aim:

TUTECODE:     "eras" + "e" > nul

TEXT:         This would effectively erase the context and the key. A synonym for the <b>nul</b>
              keyword that might be used in its place in such a situation is <b>clearcontext</b>.
              As in both situations above, you can also use the <b>beep</b> statement here to
              alert the user with a warning beep:

TUTECODE:     "eras" + "e" > beep

ENDSECTION

SECTION:      Typical usage of constraints

TEXT:         For a typical keyboard, you might use a constraint in a <b>nomatch</b> rule, to
              prevent the user from typing anything that is not matched by another rule.

              Alternatively, you might want to restrict a few certain combinations: in this
              case you might put specific constraint rules in the first group of a keyboard,
              and use a nomatch rule to process all other (allowed) input with another group.
              The separation of legal and illegal input into separate groups will make the
              keyboard's operation clearer.
ENDSECTION


RELATED:      "context", "../reference/context.html"
              "beep",    "../reference/beep.html"
              "nul",     "../reference/nul_.html"
              "match",   "../reference/match.html"
              "nomatch", "../reference/nomatch.html"

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
); ?>
