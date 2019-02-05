<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: AttachToControl"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Function: AttachToControl</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw_Version.php">Prev</a> </td><th width="60%" align="center">Class: KeymanWeb</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw_FocusLastActiveElement.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw_AttachToControl">Function: AttachToControl</h4></div></div></div><p>
      Attaches KeymanWeb events to a control.  This is useful where controls are created after KeymanWeb has initialized,
      for instance in AJAX applications or other JavaScript applications.
    </p><p>
      Parameters:
      <code class="code">
        elem: the HTML element that KeymanWeb should attach events to
      </code>
    </p><p>
      Returns:
      <code class="code">
        nothing
      </code>
    </p><p>
      Version Introduced:
      <code class="code">
        1.0 build 81
      </code>
    </p><p>
      See Also:
      <code class="code">
        EnableControl, DisableControl
      </code>
    </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw_Version.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw_FocusLastActiveElement.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Property: Version </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Function: FocusLastActiveElement</td></tr></table></div>
