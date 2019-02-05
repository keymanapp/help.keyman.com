<?php
  $pagetitle = 'Manual Control Example';
  $pagename = $pagetitle;
  $IncludeKeymanWeb = false;
  $ondocumentload='SetupDocument();';
  
  require_once('header.php');
  require_once('./devheader.php');
?>

<script type='text/javascript' src='js/unified_loader.js'></script>
<script type="text/javascript">

var KWControl = null;

function SetupDocument()
{
  KeymanWeb.Init();
  KWControl = document.getElementById('KWControl');
  KeymanWeb.SetMode('manual');
  KeymanWeb.SetActiveKeyboard('Keyboard_laokeys');
  KeymanWeb.DisableControl(document.getElementById("code1"));
  KeymanWeb.DisableControl(document.getElementById("code2"));
  KeymanWeb.DisableControl(document.getElementById("code3"));
}

function KWControlClick()
{
  if(KeymanWeb.IsInterfaceVisible()) KeymanWeb.HideInterface();
  else KeymanWeb.ShowInterface(KeymanWeb.GetAbsoluteX(KWControl) + KWControl.offsetWidth - 1, KeymanWeb.GetAbsoluteY(KWControl));
}
</script>

<p>In this example, the web page designer specifies the location and activation of the user interface for
the KeymanWeb.  They have also specified that the LaoKeys keyboard should be activated by default.
This example continues to use the KeymanWeb default interface.</p>

<form action='.' method='post'>

<p><input type='text' id='multilingual' name='multilingual' size="40" /></p>
<p><textarea cols='40' rows='5'></textarea></p>

<img style="border: solid 1px black; padding: 2px 2px 3px 2px" src='js/kmicon.png' alt='KeymanWeb' onclick='KWControlClick()' id='KWControl' />

</form>

<h2>Code Walkthrough</h2>

<p>Include the following script in the HEAD of your page:</p>

<?php echo codebox(<<<END
/* SetupDocument: Called when the page finishes loading */
function SetupDocument()
{
  /* Make sure that Keyman is initialized (we can't guarantee initialization order) */
  KeymanWeb.Init();

  KWControl = document.getElementById('KWControl');
  /* Change the UI control mode of KeymanWeb to manual (default automatic) */
  KeymanWeb.SetMode('manual');
  /* Select the LaoKeys keyboard */
  KeymanWeb.SetActiveKeyboard('Keyboard_laokeys');
}

/* KWControlClick: Called when user clicks on the KWControl IMG */
function KWControlClick()
{
  /* Toggle display of the default KeymanWeb interface to the right of the KWControl IMG */
  var KWControl = document.getElementById('KWControl');
  if(KeymanWeb.IsInterfaceVisible()) KeymanWeb.HideInterface();
  else KeymanWeb.ShowInterface(
        KeymanWeb.GetAbsoluteX(KWControl) + KWControl.offsetWidth - 1, 
        KeymanWeb.GetAbsoluteY(KWControl));
     /* 
       Note the use of KeymanWeb.GetAbsoluteX and GetAbsoluteY - helper 
       functions for getting browser-independent X and Y offsetLeft and offsetTop
     */
}
END
  );
  
echo "<p>Also include the following HTML code:</p>";

echo codebox(<<<END
<head>
    <!-- Load the KeymanWeb engine -->
    <script type="text/javascript">KeymanWeb_Key='your_key_here';</script>
    <script src="keymanweb.js" type="text/javascript"></script>
    <!-- Load the LaoKeys keyboard stub -->
    <script src="laokeys_load.js" type="text/javascript"></script>
</head>

<!-- When the page has finished loading, activate the LaoKeys keyboard, see above -->
<body onload="SetupDocument()">
END
  );

  echo "<p>And finally, include the control img for KeymanWeb:</p>";
  
  echo codebox(<<<END
<!-- Display the KeymanWeb icon for the user to click on -->
<img style="border: solid 1px black; padding: 2px 2px 3px 2px" src='kmicon.png' alt='KeymanWeb' onclick='KWControlClick()' id='KWControl' />
END
  );

  echo "<p><a href='full_manual_control.php'>On to Full Manual Control Example</a></p>";
  
  require_once('footer.php');
?>