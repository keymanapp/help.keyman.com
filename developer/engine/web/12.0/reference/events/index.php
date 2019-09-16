<?php
  require_once('includes/template.php');

  head([
    'title' => "KeymanWeb 12.0 Events"
  ]);
?>

<h1 class="title" id="events">Events</h1>

  <p>
    A number of KeymanWeb events are exposed to allow the designer 
    of a user interface to control the appearance and behavior of user interface elements.  
    Standard event-processing requires all arguments to be passed as an array (object) 
    with named member variables. 
  </p>
  
  <dl>
  <dt><a href='kmw.controlfocused'><code>kmw.controlfocused</code></a></dt>
  <dd>Called when input element receives focus.</dd>
  </dl>

  <dl>
  <dt><a href='kmw.controlblurred'><code>kmw.controlblurred</code></a></dt>
  <dd>Called when input element loses focus.</dd>
  </dl>

  <dl>
  <dt><a href='kmw.keyboardregistered'><code>kmw.keyboardregistered</code></a></dt>
  <dd>Called when keyboard 'stub' processed (for listing as available keyboard).</dd>
  </dl>

  <dl>
  <dt><a href='kmw.keyboardloaded'><code>kmw.keyboardloaded</code></a></dt>
  <dd>Called when keyboard code loaded.</dd>
  </dl>

  <dl>
  <dt><a href='kmw.beforekeyboardchange'><code>kmw.beforekeyboardchange</code></a></dt>
  <dd>Called when keyboard input language about to change.</dd>
  </dl>

  <dl>
  <dt><a href='kmw.keyboardchange'><code>kmw.keyboardchange</code></a></dt>
  <dd>Called when keyboard input language changed.</dd>
  </dl>

  <dl>
  <dt><a href='kmw.loaduserinterface'><code>kmw.loaduserinterface</code></a></dt>
  <dd>Called when allow ui initialization.</dd>
  </dl>

  <dl>
  <dt><a href='kmw.unloaduserinterface'><code>kmw.unloaduserinterface</code></a></dt>
  <dd>Called when allow ui clean-up.</dd>
  </dl>

  <dl>
  <dt><a href='osk.show'><code>osk.show</code></a></dt>
  <dd>Called when OSK displayed.</dd>
  </dl>

  <dl>
  <dt><a href='osk.hide'><code>osk.hide</code></a></dt>
  <dd>Called when OSK hidden.</dd>
  </dl>  

  <dl>
  <dt><a href='osk.resizemove'><code>osk.resizemove</code></a></dt>
  <dd>Called when OSK resized or moved on desktop.</dd>
  </dl>  

  <dl>
  <dt><a href='osk.helpclick'><code>osk.helpclick</code></a></dt>
  <dd>Called when allows the UI to present a help page.</dd>
  </dl>  

  <dl>
  <dt><a href='osk.configclick'><code>osk.configclick</code></a></dt>
  <dd>Called when allows the UI to present KeymanWeb configuration options.</dd>
  </dl>  
  
  <p>
    Object events are handled in user code by passing the handler entry to the object, 
    using <span class="emphasis"><em>addEventListener()</em></span>.
  </p><p>
    So to define a user function to handle the KeymanWeb core 
    kmw.keyboardchange event, include:
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
  </pre></div>