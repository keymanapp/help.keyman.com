<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: borderRadius"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Function: borderRadius</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw20_util_attachDOMEvent.php">Prev</a> </td><th width="60%" align="center">KeymanWeb Utility Module</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw20_util_boxShadow.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw20_util_borderRadius">Function: borderRadius</h4></div></div></div><p>
    Build browser-independent border radius style string segment.
  </p><p>
    Parameters:
    <code class="code">
      Integer (top right), Integer (bottom right), Integer (bottom left), Integer (top left)
    </code>
  </p><p>
    Returns:
    <code class="code">
      string (CSS string segment for rounded window style)
    </code>
  </p><p>
    Note:
    <code class="code">
      Supports IE 8+, Firefox, Chrome, Safari browsers.  
    </code>      
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw20_util_attachDOMEvent.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw20_utility.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw20_util_boxShadow.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Function: attachDOMEvent </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Function: boxShadow</td></tr></table></div>
