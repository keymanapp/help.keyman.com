<?php
  require_once('includes/template.php');

  head([
    'title' => "Class: KeyboardInfo"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Class: KeyboardInfo</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw_GetLastActiveElement.php">Prev</a> </td><th width="60%" align="center">KeymanWeb 1.0</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw__keyboarddesign.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="reference_kmw_KeyboardInfo">Class: KeyboardInfo</h3></div></div></div><p>
    The KeyboardInfo class is returned in an Array by KeymanWeb.GetKeyboards and details information about one keyboard available to KeymanWeb.
  </p><h4><a name="id634425"></a>
    Property: Name
  </h4><p>
    Display name of the keyboard, to be used in user interface.
  </p><p>
    Type:
    <code class="code">
      String
    </code>
  </p><p>
    Access:
    <code class="code">
      Read only
    </code>
  </p><p>
    Version Introduced:
    <code class="code">
      1.0
    </code>
  </p><h4><a name="id633163"></a>
    Property: InternalName
  </h4><p>
    Internal name of the keyboard, to be used whenever referring to keyboards in KeymanWeb API
    functions.  The internal name of the keyboard
    is usually "Keyboard_"+filename of the keyboard, not including the file extension of the keyboard.
  </p><p>
    Type:
    <code class="code">
      String
    </code>
  </p><p>
    Access:
    <code class="code">
      Read only
    </code>
  </p><p>
    Version Introduced:
    <code class="code">
      1.0
    </code>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw_GetLastActiveElement.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw__keyboarddesign.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Function: GetLastActiveElement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Keyboard Design</td></tr></table></div>
