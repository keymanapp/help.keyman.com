<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: createElement"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Function: createElement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw20_util_boxShadow.php">Prev</a> </td><th width="60%" align="center">KeymanWeb Utility Module</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw20_util_createShim.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw20_util_createElement">Function: createElement</h4></div></div></div><p>
    Create an unselectable HTML element for the <span class="emphasis"><em>KeymanWeb</em></span> On-Screen keyboard and User Interfaces.
  </p><p>
    Parameters:
    <code class="code">
      string (object type)
    </code>
  </p><p>
    Returns:
    <code class="code">
      Object (HTML element)
    </code>
  </p><p>
    Note:
    <code class="code">
      Elements created with this function do not capture the focus. Use <span class="emphasis"><em>document.createElement</em></span> 
      to create normally selectable elements.
    </code>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw20_util_boxShadow.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw20_utility.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw20_util_createShim.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Function: boxShadow </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Function: createShim</td></tr></table></div>
