<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: hideShim"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Function: hideShim</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw20_util_getOption.php">Prev</a> </td><th width="60%" align="center">KeymanWeb Utility Module</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw20_util_loadCookie.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw20_util_hideShim">Function: hideShim</h4></div></div></div><p>
    Hides the 'shim' IFrame element.
  </p><p>
    Parameters:
    <code class="code">
      Object reference ('shim' IFrame element)
    </code>
  </p><p>
    Returns:
    <code class="code">
      Nothing
    </code>
  </p><p>
    Note:
    <code class="code">
      The shim management functions are only used to support IE6 (which requires an 
      intermediate IFrame element to display overlapping window correctly).  
      They are ignored by other browsers, and may not be supported in future releases.    
    </code>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw20_util_getOption.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw20_utility.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw20_util_loadCookie.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Function: getOption </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Function: loadCookie</td></tr></table></div>
