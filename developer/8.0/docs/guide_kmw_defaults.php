<?php
  require_once('includes/template.php');

  head([
    'title' => "Changing KeymanWeb's Defaults"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Changing KeymanWeb's Defaults</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="guide_kmw_control_by_control.php">Prev</a> </td><th width="60%" align="center">KeymanWeb Guide</th><td width="20%" align="right"> <a accesskey="n" href="index_guide_imx.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="guide_kmw_defaults">Changing KeymanWeb's Defaults</h3></div></div></div><p>In this example, the web page designer specifies some additional defaults for KeymanWeb, such as the name of the
non-KeymanWeb keyboard in the keyboard list (usually "English"), and the colour of the keycaps in the visual keyboard.</p><p>Note that in general the style of the visual keyboard is controlled by CSS (see the reference documentation); however,
due to bugs in Internet Explorer's handling of CSS, the "hover" and "keydown" styles of the visual keyboard are 
limited to changing the colour.</p><p>A working example can be seen online at <a class="ulink" href="http://www.keymanweb.com/dev/defaults.php" target="_blank">www.keymanweb.com</a></p><p>
    <span class="inlinemediaobject"><img src="developer_images/kmw_defaults.png"></span>
  </p><h4><a name="id643694"></a>Code Walkthrough</h4><p>Include the following script in the HEAD of your page:</p><pre class="programlisting">
/* Set defaults for keyboard names, and visual keyboard colours */  
KeymanWeb_DefaultKeyboardName = "(KeymanWeb Off)";   
KeymanWeb_DefaultKeyboardHelp = "&lt;p&gt;KeymanWeb is disabled.  To enable KeymanWeb, select a keyboard from the list above.&lt;/p&gt;";   
KeymanWeb_ControlDownColor = "#ff8080";   
KeymanWeb_KeyDownColor = "#ffc0c0";   
KeymanWeb_KeyHoverColor = "#ffe0e0";     
  
/* SetupDocument: Called when the page finishes loading */  
function SetupDocument()
{
  /* Make sure that Keyman is initialized (we can't guarantee initialization order) */
  KeymanWeb.Init();
}
  </pre><p>Also include the following HTML code:</p><pre class="programlisting">
&lt;head&gt;
  &lt;!-- Load the KeymanWeb engine --&gt;
  &lt;script src="keymanweb.js" type="text/javascript"&gt;&lt;/script&gt;
  &lt;!-- Load the LaoKeys keyboard stub --&gt;
  &lt;script src="laokeys_load.js" type="text/javascript"&gt;&lt;/script&gt;
&lt;/head&gt;

&lt;!-- When the page has finished loading, activate the LaoKeys keyboard, see above --&gt;
&lt;body onload="SetupDocument()"&gt;
  </pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="guide_kmw_control_by_control.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="index_guide_kmw.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="index_guide_imx.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Control by Control Example </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> IMX Developers Guide</td></tr></table></div>
