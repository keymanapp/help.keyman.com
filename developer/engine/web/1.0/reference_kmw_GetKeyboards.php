<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: GetKeyboards"
  ]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Function: GetKeyboards</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw_SetActiveKeyboard.php">Prev</a> </td><th width="60%" align="center">Class: KeymanWeb</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw_GetMode.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw_GetKeyboards">Function: GetKeyboards</h4></div></div></div><p>
      Returns an Array of KeyboardInfo Objects detailing all the keyboards currently available to KeymanWeb.
    </p><p>
      The keyboards may or may not currently be loaded - this version of KeymanWeb does not make the loaded state of the keyboard available.
    </p><p>
      Parameters:
      <code class="code">
        none
      </code>
    </p><p>
      Return Value:
      <code class="code">
        Array of KeyboardInfo Objects
      </code>
    </p><p>
      Version Introduced:
      <code class="code">
        1.0
      </code>
    </p><p>
      See also:
      <code class="code">
        GetActiveKeyboard, SetActiveKeyboard
      </code>
    </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw_SetActiveKeyboard.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw_GetMode.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Function: SetActiveKeyboard </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Function: GetMode</td></tr></table></div>
