<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: isCJK"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Function: isCJK</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw20_core_init.php">Prev</a> </td><th width="60%" align="center">KeymanWeb Core Module</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw20_core_removeEventListener.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw20_core_isCJK">Function: isCJK</h4></div></div></div><p>
    Test if a given keyboard or keyboard stub (or the current keyboard) is for Chinese, Japanese, or Korean. 
  </p><p>
    Parameters:
    <code class="code">
      Object reference (keyboard or none)
    </code>
  </p><p>
    Returns:
    <code class="code">
      boolean (true/false)
    </code>
  </p><p>
    Note:
    <code class="code">
      East Asian keyboards (and some others) may use an IME with a "pick list" of characters, requiring special handling.
    </code>
   </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw20_core_init.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw20_core.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw20_core_removeEventListener.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Function: init </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Function: removeEventListener</td></tr></table></div>
