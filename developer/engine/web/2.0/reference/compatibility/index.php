<?php
  require_once('includes/template.php');

  head([
    'title' => "KeymanWeb Compatibility Functions"
  ]);

  require_once('includes/__docheader.php');
?>


<h1 class="title" id="compatibility">Compatibility Functions</h1>

<p>
    The following <span class="emphasis"><em>KeymanWeb</em></span> core functions have been retained for compatibility 
    with existing custom keyboards, but should not be used in any new keyboards or 
    user interfaces.  Equivalent new function calls are indicated.
</p>
  
  <dl>
	<dt><a href='GetLastActiveElement'><code>GetLastActiveElement</code> Function</a></dt>
	<dd><a href="../core/getLastActiveElement"><code><?="$kmw.getLastActiveElement()"?></code></a></dd>
  </dl> 
  
  <dl>
	<dt><a href='FocusLastActiveElement'><code>FocusLastActiveElement</code> Function</a></dt>
	<dd><a href="../core/focusLastActiveElement"><code><?="$kmw.focusLastActiveElement()"?></code></a></dd>
  </dl> 
  
  <dl>
	<dt><a href='HideHelp'><code>HideHelp</code> Function</a></dt>
	<dd><a href="../osk/hide"><code><?="$kmw.osk.hide()"?></code></a></dd>
  </dl> 
  
  <dl>
	<dt><a href='ShowHelp'><code>ShowHelp</code> Function</a></dt>
	<dd><a href="../osk/setPos"><code><?="$kmw.osk.setPos()"?></code></a>, <a href="../osk/show"><code><?="$kmw.osk.show()"?></code></a></dd>
  </dl> 
  
  <dl>
	<dt><a href='ShowPinnedHelp'><code>ShowPinnedHelp</code> Function</a></dt>
	<dd><a href="../osk/setRect"><code><?="$kmw.osk.setRect()"?></code></a>, <a href="../osk/show"><code><?="$kmw.osk.show()"?></code></a></dd>
  </dl> 