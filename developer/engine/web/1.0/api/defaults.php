<?php
  $pagetitle = 'Changing KeymanWeb\'s Defaults';
  $script = 'unified_loader.js';
  $js_preinit = '
KeymanWeb_DefaultKeyboardName = "(KeymanWeb Off)";
KeymanWeb_DefaultKeyboardHelp = "<p>KeymanWeb is disabled.  To enable KeymanWeb, select a keyboard from the list above.</p>";
KeymanWeb_ControlDownColor = "#ff8080";
KeymanWeb_KeyDownColor = "#ffc0c0";
KeymanWeb_KeyHoverColor = "#ffe0e0";  
';
  $header_extra_code = <<<END
<script type="text/javascript">

var KWControl = null;

function SetupDocument()
{
  KeymanWeb.Init();
  KWControl = document.getElementById('KWControl');
  KeymanWeb.SetMode('manual');
}

function KWControlClick()
{
  if(KeymanWeb.IsInterfaceVisible()) KeymanWeb.HideInterface();
  else KeymanWeb.ShowInterface(KeymanWeb.GetAbsoluteX(KWControl) + KWControl.offsetWidth - 1, KeymanWeb.GetAbsoluteY(KWControl));
}
</script>
END;
  $ondocumentload='SetupDocument';
  require_once('kmwdevheader.php');
?>

<p>In this example, the web page designer specifies some additional defaults for KeymanWeb, such as the name of the
non-KeymanWeb keyboard in the keyboard list (usually "English"), and the colour of the keycaps in the visual keyboard.</p>

<p>Note that in general the style of the visual keyboard is controlled by CSS (see the reference documentation); however,
due to bugs in Internet Explorer's handling of CSS, the "hover" and "keydown" styles of the visual keyboard are 
limited to changing the colour.</p>

<form action='.' method='post'>

<p><input type='text' id='multilingual' name='multilingual' size="40" /></p>
<p><textarea cols='40' rows='5'></textarea></p>

<img style="border: solid 1px black; padding: 2px 2px 3px 2px" src='js/kmicon.png' alt='KeymanWeb' onclick='KWControlClick()' id='KWControl' />

</form>

<h2>Code Walkthrough</h2>

<p>Include the following script in the HEAD of your page:</p>

<textarea name='code' class='js'>

/* Set defaults for keyboard names, and visual keyboard colours */
KeymanWeb_DefaultKeyboardName = "(KeymanWeb Off)";
KeymanWeb_DefaultKeyboardHelp = "<p>KeymanWeb is disabled.  To enable KeymanWeb, select a keyboard from the list above.</p>";
KeymanWeb_ControlDownColor = "#ff8080";
KeymanWeb_KeyDownColor = "#ffc0c0";
KeymanWeb_KeyHoverColor = "#ffe0e0";  

/* SetupDocument: Called when the page finishes loading */
function SetupDocument()
{
  /* Make sure that Keyman is initialized (we can't guarantee initialization order) */
  KeymanWeb.Init();
}
</textarea>

<p>Also include the following HTML code:</p>

<textarea name='code' class='html'>

<head>
    <!-- Load the KeymanWeb engine -->
    <script src="keymanweb.js" type="text/javascript"></script>
    <!-- Load the LaoKeys keyboard stub -->
    <script src="laokeys_load.js" type="text/javascript"></script>
</head>

<!-- When the page has finished loading, activate the LaoKeys keyboard, see above -->
<body onload="SetupDocument()">
</textarea>

<?php require_once('kmwdevfooter.php'); ?>