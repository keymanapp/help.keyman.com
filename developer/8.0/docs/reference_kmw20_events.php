<?php
  require_once('includes/template.php');

  head([
    'title' => "KeymanWeb 2.0 Events"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">KeymanWeb 2.0 Events</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_kmw20_initialization.php">Prev</a> </td><th width="60%" align="center">KeymanWeb 2.0</th><td width="20%" align="right"> <a accesskey="n" href="reference_kmw20_keyboard_properties.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="reference_kmw20_events">KeymanWeb 2.0 Events</h3></div></div></div><p>
    A number of <span class="emphasis"><em>KeymanWeb</em></span> events are exposed to allow the designer 
    of a user interface to control the appearance and behavior of user interface elements.  
    Standard event-processing requires all arguments to be passed as an array (object) 
    with named member variables. 
  </p><div class="informaltable"><table border="1"><colgroup><col><col><col></colgroup><thead><tr><th align="left">Event name</th><th align="left">Named arguments</th><th align="left">Description</th></tr></thead><tbody><tr><td align="left"><span class="emphasis"><em>kmw.controlfocused</em></span></td><td align="left">target,activeControl</td><td align="left">input element receives focus</td></tr><tr><td align="left"><span class="emphasis"><em>kmw.controlblurred</em></span></td><td align="left">target,event,isActivating</td><td align="left">input element loses focus</td></tr><tr><td align="left"><span class="emphasis"><em>kmw.keyboardregistered</em></span></td><td align="left">internalName,language,keyboardName,languageCode</td><td align="left">keyboard 'stub' processed (for listing as available keyboard)</td></tr><tr><td align="left"><span class="emphasis"><em>kmw.keyboardloaded</em></span></td><td align="left">internalName</td><td align="left">keyboard code loaded</td></tr><tr><td align="left"><span class="emphasis"><em>kmw.beforekeyboardchange</em></span></td><td align="left">internalName,languageCode</td><td align="left">keyboard input language about to change</td></tr><tr><td align="left"><span class="emphasis"><em>kmw.keyboardchange</em></span></td><td align="left">internalName,languageCode</td><td align="left">keyboard input language changed</td></tr><tr><td align="left"><span class="emphasis"><em>kmw.loaduserinterface</em></span></td><td align="left">(None)</td><td align="left">allow ui initialization</td></tr><tr><td align="left"><span class="emphasis"><em>kmw.unloaduserinterface</em></span></td><td align="left">(None)</td><td align="left">allow ui clean-up</td></tr><tr><td align="left"><span class="emphasis"><em>osk.show</em></span></td><td align="left">x,t,userLocated</td><td align="left">OSK displayed</td></tr><tr><td align="left"><span class="emphasis"><em>osk.hide</em></span></td><td align="left">HiddenByUser</td><td align="left">OSK hidden</td></tr><tr><td align="left"><span class="emphasis"><em>osk.resizemove</em></span></td><td align="left">(None)</td><td align="left">OSK resized or moved on desktop</td></tr></tbody></table></div><p>
    Object events are handled in user code by passing the handler entry to the object, 
    using <span class="emphasis"><em>addEventListener()</em></span>.
  </p><p>
    So to define a user function to handle the <span class="emphasis"><em>KeymanWeb</em></span> core 
    <span class="emphasis"><em>kmw.keyboardchange</em></span> event, include:
  </p><pre class="programlisting">
keymanweb.addEventListener('keyboardchange',
  function(p)
  {
    ui.updateMenu(p['internalName'],p['languageCode']);
  });
  </pre><p>
    or a user function to modify the user interface when the on-screen keyboard is displayed:
  </p><pre class="programlisting">
osk.addEventListener('show',
  function(p)
  {
    ui.updateUI(p['x'],p['y'],p['userLocated']);
  });
  </pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_kmw20_initialization.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_kmw20_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_kmw20_keyboard_properties.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">KeymanWeb 2.0 Initialization Options </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> KeymanWeb Keyboard Properties</td></tr></table></div>
