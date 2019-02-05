<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: addHotKey"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Function: addHotKey</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw20_core_addEventListener.php">Prev</a> </td><th width="60%" align="center">KeymanWeb Core Module</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw20_core_attachToControl.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw20_core_addHotKey">Function: addHotKey</h4></div></div></div><p>
    Add hot key handler to array of document-level hotkeys triggered by key-up event.
  </p><p>
    Parameters:
    <code class="code">
      Integer (keyCode), Integer (shiftState), function (handler)
    </code>
  </p><p>
    Returns:
    <code class="code">
      Nothing
    </code>
  </p><p>
    Note:
    <code class="code">
      shiftState is a bitwise combination of SHIFT (0x10), CTRL (0x20) and ALT (0x40).  
      Left/right modifier key distinctions are not supported for hotkey handling.
    </code>      
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw20_core_addEventListener.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw20_core.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw20_core_attachToControl.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Function: addEventListener </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Function: attachToControl</td></tr></table></div>
