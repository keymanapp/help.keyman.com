<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:          group statement

CODE:             group(%gnGroup%) [using keys]

TEXT:             group tells Keyman that a new group has started.  There are two sorts of groups: key processing 
                  groups, and context processing groups.  Key processing groups can include 
                  context checking, but context processing groups cannot include key checking.  Keyman will 
                  use first the group specified in the begin statement, and move from there onto other groups.  The 
                  keystroke received by Keyman is the same for all groups with key processing.

TEXT:             To tell Keyman that the group should include key processing, you should include the 
                  using keys section of the statement; it that is left out, Keyman assumes the group checks the 
                  context only.  The keystroke will remain the same during processing; you can have many groups
                  that each use using keys, and the keystroke will be the same for all of them.   If you leave
                  out using keys, you have to also leave out the '+' and the keystroke.

TEXT:             gnGroup: The name of the new group.

EXAMPLE:          group(main) using keys
                  group(syllablecheck)


REF
); ?>
