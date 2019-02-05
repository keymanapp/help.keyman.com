<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: SetActiveKeyboard"
  ]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Function: SetActiveKeyboard</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw_GetActiveKeyboard.php">Prev</a> </td><th width="60%" align="center">Class: KeymanWeb</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw_GetKeyboards.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw_SetActiveKeyboard">Function: SetActiveKeyboard</h4></div></div></div><p>
      Makes the current keyboard defined by internalName active.
    </p><p>
      This does not impact the enabled state of KeymanWeb. To select no KeymanWeb keyboard, pass an empty string.  If the keyboard must be loaded, this will happen asynchronously, and may return focus to the last active control after the load completes.
    </p><p>
      Parameters:
      <code class="code">
        String internalName - Internal name of keyboard to activate
      </code>
    </p><p>
      Return Value:
      <code class="code">
        none
      </code>
    </p><p>
      Version Introduced:
      <code class="code">
        1.0
      </code>
    </p><p>
      See Also:
      <code class="code">
        GetActiveKeyboard, GetKeyboards, SetDefaultKeyboardForControl
      </code>
    </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw_GetActiveKeyboard.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw_GetKeyboards.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Function: GetActiveKeyboard </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Function: GetKeyboards</td></tr></table></div>
