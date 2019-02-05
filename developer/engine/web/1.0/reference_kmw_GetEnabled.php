<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: GetEnabled"
  ]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Function: GetEnabled</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw.php">Prev</a> </td><th width="60%" align="center">Class: KeymanWeb</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw_SetEnabled.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw_GetEnabled">Function: GetEnabled</h4></div></div></div><p>
      Returns nonzero if KeymanWeb is enabled.  When KeymanWeb is instantiated, its default state is enabled.
    </p><p>
      GetEnabled returns the overriding enabled state for KeymanWeb.  If GetEnabled returns 0, KeymanWeb will not
      operate on any controls anywhere on the page.  If GetEnabled returns non-zero, it means that KeymanWeb
      will operate on those controls for which it has not been otherwise disabled.
    </p><p>
      When KeymanWeb is disabled, its automatic user interface will not display.
    </p><p>
      Parameters:
      <code class="code">
        none
      </code>
    </p><p>
      Returns:
      <code class="code">
        zero or nonzero, indicating whether or KeymanWeb is enabled.
      </code>
    </p><p>
      Version Introduced:
      <code class="code">
        1.0
      </code>
    </p><p>
      See Also:
      <code class="code">
        SetEnabled, EnableControl, DisableControl
      </code>
    </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw_SetEnabled.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Class: KeymanWeb </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Function: SetEnabled</td></tr></table></div>
