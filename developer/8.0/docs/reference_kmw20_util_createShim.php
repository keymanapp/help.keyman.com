<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: createShim"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Function: createShim</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw20_util_createElement.php">Prev</a> </td><th width="60%" align="center">KeymanWeb Utility Module</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw20_util_getAbsolute.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw20_util_createShim">Function: createShim</h4></div></div></div><p>
    Create a 'shim' IFrame element to control display of overlapped elements. 
  </p><p>
    Parameters:
    <code class="code">
      None
    </code>
  </p><p>
    Returns:
    <code class="code">
      Object (HTML element)
    </code>
  </p><p>
    Note:
    <code class="code">
      The shim management functions are only used to support IE6 (which requires an 
      intermediate IFrame element to display overlapping window correctly).  
      They are ignored by other browsers, and may not be supported in future releases.    
    </code>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw20_util_createElement.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw20_utility.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw20_util_getAbsolute.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Function: createElement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Function: getAbsolute</td></tr></table></div>
