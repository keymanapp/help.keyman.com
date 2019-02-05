<?php
  require_once('includes/template.php');

  head([
    'title' => "Function: getKeyboards"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Function: getKeyboards</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw20_core_getActiveLanguage.php">Prev</a> </td><th width="60%" align="center">KeymanWeb Core Module</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw20_core_getLastActiveElement.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw20_core_getKeyboards">Function: getKeyboards</h4></div></div></div><p>
    Get details of currently installed keyboards.
  </p><p>
    Parameters:
    <code class="code">
      None
    </code>
  </p><p>
    Returns:
    <code class="code">
      Array (installed keyboard objects)
    </code>
  </p><p>
    Note:
    <code class="code">
      Each object in the array has name, internalName, languageName, 
      languageCode, regionName, regionCode, countryName, countryCode 
      and keyboardID members. Keyboard mapping code is not returned.    
    </code>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw20_core_getActiveLanguage.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw20_core.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw20_core_getLastActiveElement.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Function: getActiveLanguage </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Function: getLastActiveElement</td></tr></table></div>
