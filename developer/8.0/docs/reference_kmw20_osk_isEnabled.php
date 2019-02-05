<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: isEnabled"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Function: isEnabled</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw20_osk_hide.php">Prev</a> </td><th width="60%" align="center">On-Screen Keyboard Module</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw20_osk_isVisible.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw20_osk_isEnabled">Function: isEnabled</h4></div></div></div><p>
    Return the user-defined OSK visibility as set by prior calls to <code class="code">show</code> or <code class="code">hide</code>. 
  </p><p>
    Parameters:
    <code class="code">
      None
    </code>
  </p><p>
    Returns:
    <code class="code">
      boolean (true/false)
    </code>
  </p><p>
    Note:
    <code class="code">
      Actual OSK visibility will also depend on whether or not the target is focused (see isVisible).
    </code>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw20_osk_hide.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw20_osk.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw20_osk_isVisible.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Function: hide </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Function: isVisible</td></tr></table></div>
