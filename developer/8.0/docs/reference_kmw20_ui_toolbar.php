<?php
  require_once('includes/template.php');

  head([
    'title' => "'Toolbar' Interface"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">'Toolbar' Interface</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw20_ui_float.php">Prev</a> </td><th width="60%" align="center">Desktop User Interfaces</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw20_initialization.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw20_ui_toolbar">'Toolbar' Interface</h4></div></div></div><p>
    For pages for must support a large number of languages from many regions,
    we recommend using our "toolbar" user interface, which displays a drop-down map
    allowing users to first choose the region from the map or by name,
    then select input language by country.  A second drop-down list is displayed
    (as shown here) if more than one keyboard is available for the selected language.
   </p><p>
    The "toolbar" user interface is attached to any DIV element on the page (by giving that element the
    <span class="emphasis"><em>id='KeymanWebControl'</em></span>), and remains fixed in position with respect to that element,
    but the On-Screen Keyboard moves to each focused input element, unless fixed in position by the user.
  </p><span class="inlinemediaobject"><img src="developer/engine/web/2.0/reference/ui/images/ui_toolbar.png"></span></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw20_ui_float.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw20_ui.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw20_initialization.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">'Float' Interface </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> KeymanWeb 2.0 Initialization Options</td></tr></table></div>
