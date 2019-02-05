<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: addEventListener"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Function: addEventListener</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw20_core_activatingUI.php">Prev</a> </td><th width="60%" align="center">KeymanWeb Core Module</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw20_core_addHotKey.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw20_core_addEventListener">Function: addEventListener</h4></div></div></div><p>
    Adds an event listener for user-handling of keymanweb events.
  </p><p>
    Parameters:
    <code class="code">
      Event object, function
    </code>
  </p><p>
    Returns:
    <code class="code">
      boolean (true/false)
    </code>
  </p><p>
    Note:
    <code class="code">
      Standard HTML element events for the <span class="emphasis"><em>KeymanWeb</em></span> element 
      (focus, blur, keydown, keypress, etc.) may be intercepted 
      and used to modify the user interface as necessary. 
      User-defined event handlers should normally return true 
      to allow other event handling to be processed normally.
    </code>      
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw20_core_activatingUI.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw20_core.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw20_core_addHotKey.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Function: activatingUI </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Function: addHotKey</td></tr></table></div>
