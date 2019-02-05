<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:         Programmer's Guide - Rules

TITLE:        Rules

BODY

SECTION:      Rules

TEXT:         A rule is the basic part of a Keyman keyboard.  Each rule defines what a keystroke will output, 
              when certain characters are already displayed on the screen.  A rule is also used to pre-process
              and post-process the characters being output to the screen.

ENDSECTION

SECTION:      Using Rules

TEXT:         A rule is made up of three parts:

CODELINE:     %context% + %keystroke% > %output%

TEXT:         The <i>context</i> refers to what is already displayed on the screen.  A rule will only be fired
              if the context and the keystroke both match.  The <i>output</i> will replace the context matched on
              the left hand side of the rule.

TEXT:         In advanced <a href="groups.html">groups</a>, the <i>keystroke</i> section of the rule may be omitted
              for processing on the context and output.

TEXT:         Some of the important functions that can be used in rules are <b>context</b>, <b>nul</b> and <b>beep</b>.

ENDSECTION

SECTION:      context

TEXT:         The <b>context</b> keyword will transfer the <i>context</i> of the rule into the <i>output</i>, for example:

CODELINE:     "abc" + "d" > context "D"

TEXT:         will, when "abc" is on the screen, and "d" is pressed, replace "abc" with "abcD".

              You can also put a single character from the context into the output using context(n):
              
CODELINE:     "abc" + "d" > "D" context(2)

              This will output "Db" when "abcd" is typed.

ENDSECTION

SECTION:      nul

TEXT:         <b>nul</b> is used in the output of a rule to give the rule no output.  For instance, the backslash key may
              be invalid in the keyboard you are creating, so the following rule will mean it will never have any output:

CODELINE:     + '\' > nul

ENDSECTION

SECTION:      beep

TEXT:         <b>beep</b> is the same as <b>nul</b>, except that the computer will emit a beep sound at the same time to
              alert the user to the error.  You
              can use this, for instance, when the user types the same diacritic twice in a row:

CODELINE:     'à' + '`' > context beep

TEXT:         The <b>context</b> statement is required here so that the rule does not delete the "à" character.

ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
); ?>
