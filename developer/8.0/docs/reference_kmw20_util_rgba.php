<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: rgba"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Function: rgba</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw20_util_loadCookie.php">Prev</a> </td><th width="60%" align="center">KeymanWeb Utility Module</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw20_util_saveCookie.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw20_util_rgba">Function: rgba</h4></div></div></div><p>
    Browser-independent alpha-channel management.
  </p><p>
    Parameters:
    <code class="code">
      Object reference (HTML element), number (red), number (green), number (blue), number (opacity)
    </code>
  </p><p>
    Returns:
    <code class="code">
      string (background color CSS value)
    </code>
  </p><p>
    Note:
    <code class="code">
      This function returns the required string value for setting background 
      transparency, and applies an appropriate a filter to the element for IE6.
    </code>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw20_util_loadCookie.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw20_utility.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw20_util_saveCookie.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Function: loadCookie </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Function: saveCookie</td></tr></table></div>
