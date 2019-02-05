<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: SetEnabled"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Function: SetEnabled</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw_GetEnabled.php">Prev</a> </td><th width="60%" align="center">Class: KeymanWeb</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw_GetActiveKeyboard.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw_SetEnabled">Function: SetEnabled</h4></div></div></div><p>
      SetEnabled sets the overriding enabled state for KeymanWeb.
    </p><p>
      If passed false, KeymanWeb will not operate on any controls anywhere on the page.  If passed true,
      it means that KeymanWeb will operate on those controls for which it has not been otherwise disabled.
    </p><p>
      When KeymanWeb is disabled, its automatic user interface will not display.
    </p><p>
      Parameters:
      <code class="code">
        Boolean value -
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
        GetEnabled, EnableControl, DisableControl
      </code>
    </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw_GetEnabled.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw_GetActiveKeyboard.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Function: GetEnabled </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Function: GetActiveKeyboard</td></tr></table></div>
