<?php
  require_once('includes/template.php');

  head([
    'title' => "On-Screen Keyboard Class Names"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">On-Screen Keyboard Class Names</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw20_osk_userLocated.php">Prev</a> </td><th width="60%" align="center">On-Screen Keyboard Module</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw20_utility.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_kmw20_osk_classes">On-Screen Keyboard Class Names</h4></div></div></div><p>
    The appearance of the <span class="emphasis"><em>KeymanWeb</em></span> On-Screen keyboard can be customized 
    by a web designer by redefining (or adding to) the default styles 
    used by <span class="emphasis"><em>KeymanWeb</em></span>.  Styles recognized by the OSK all have the 
    class name prefix <span class="emphasis"><em>"KeymanWeb_VK_"</em></span>, 
    and are divided into in two groups, classes associated with OSK keys, 
    and classes associated with other OSK elements.
  </p><p>
    Class names for styles associated with keys are indicated in the following table:
  </p><div class="informaltable"><table border="1"><colgroup><col><col align="center"><col align="center"></colgroup><thead><tr><th align="left">Element type</th><th align="center">General appearance</th><th align="center">Additional styles</th></tr></thead><tbody><tr><td align="left"><span class="emphasis"><em>Character output keys</em></span></td><td align="center">KeymanWeb_VK_1</td><td align="center">KeymanWeb_VK_Char</td></tr><tr><td align="left"><span class="emphasis"><em>Base letter</em></span></td><td align="center">KeymanWeb_VK_3</td><td align="center">KeymanWeb_VK_Key</td></tr><tr><td align="left"><span class="emphasis"><em>Spacer</em></span></td><td align="center">KeymanWeb_VK_4</td><td align="center">KeymanWeb_VK_Spacer</td></tr><tr><td align="left"><span class="emphasis"><em>Control key</em></span></td><td align="center">KeymanWeb_VK_5</td><td align="center">KeymanWeb_VK_Control</td></tr><tr><td align="left"><span class="emphasis"><em>CapsLock</em></span></td><td align="center">KeymanWeb_VK_0</td><td align="center">KeymanWeb_VK_Cap</td></tr></tbody></table></div><p>
    Other recognized class names are:
  </p><div class="informaltable"><table border="1"><colgroup><col><col></colgroup><tbody><tr><td align="left"><span class="emphasis"><em>KeymanWeb_VK_Title</em></span></td><td align="left">General style for OSK title bar</td></tr><tr><td align="left"><span class="emphasis"><em>KeymanWeb_VK_TitleActions</em></span></td><td align="left">General style for buttons on OSK title bar</td></tr><tr><td align="left"><span class="emphasis"><em>KeymanWeb_VK_Help</em></span></td><td align="left">Style for Help icon in OSK title bar</td></tr><tr><td align="left"><span class="emphasis"><em>KeymanWeb_VK_Pin</em></span></td><td align="left">Style for title bar 'pin' (restore OSK to default position)</td></tr><tr><td align="left"><span class="emphasis"><em>KeymanWeb_VK_Close</em></span></td><td align="left">Style for Close button in OSK title bar</td></tr><tr><td align="left"><span class="emphasis"><em>KeymanWeb_VK_Resize</em></span></td><td align="left">Style for resize control (lower right corner of OSK)</td></tr></tbody></table></div><p>
    An additional class, <span class="emphasis"><em>KeymanWeb_VK_Char_&lt;keyboardName&gt;</em></span>, 
    can also be defined if a developer requires OSK keys to change appearance when a 
    particular keyboard is selected.  Two further styles <span class="emphasis"><em>KeymanWeb_VK_Right</em></span> 
    and <span class="emphasis"><em>KeymanWeb_VK_RightStatic</em></span> allow the UI designer to control 
    the appearance of the right OSK border.  
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw20_osk_userLocated.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw20_osk.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw20_utility.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Function: userLocated </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> KeymanWeb Utility Module</td></tr></table></div>
