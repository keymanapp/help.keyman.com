<?php
  $pagetitle = 'Full Manual Control Example';
  $pagename = $pagetitle;
  $IncludeKeymanWeb = false;
  $ondocumentload='SetupDocument();';
  
  require_once('header.php');
  require_once('./devheader.php');

  echo <<<END
<script type='text/javascript' src='js/unified_loader.js'></script>
<script type="text/javascript">

var KWControl = null;

function SetupDocument()
{
  KeymanWeb.Init();
  KeymanWeb.SetMode('manual');
  KWControl = document.getElementById('KWControl');
  var kbds = KeymanWeb.GetKeyboards();
  for(var kbd in kbds)
  {
    var opt = document.createElement('OPTION');
    opt.value = kbds[kbd].InternalName;
    opt.innerHTML = kbds[kbd].Name;
    KWControl.appendChild(opt);    
  }
  document.f.multilingual.focus();
  KeymanWeb.DisableControl(document.getElementById("code1"));
  KeymanWeb.DisableControl(document.getElementById("code2"));
  KeymanWeb.DisableControl(document.getElementById("code3"));
}

function KWControlChange()
{
  KeymanWeb.SetActiveKeyboard(KWControl.value);
  document.f.multilingual.focus();
}

function KWHelpClick()
{
  if(KeymanWeb.IsHelpVisible()) KeymanWeb.HideHelp();
  else KeymanWeb.ShowHelp(KeymanWeb.GetAbsoluteX(KWControl), KeymanWeb.GetAbsoluteY(KWControl) + KWControl.offsetHeight + 2);
}
</script>

<p>In this example, the web page designer has opted for their own user interface instead of the KeymanWeb
interface.  The keyboards in the selector are populated from the KeymanWeb list of keyboards.</p>

<form name='f' action='.' method='post'>

<p><input type='text' id='multilingual' name='multilingual' size="40" /></p>

<p>Keyboard: <select id='KWControl' onchange='KWControlChange()'><option value=''>English</option></select>
<img src='form_help.jpg' style="vertical-align: bottom; cursor: hand" onclick='KWHelpClick()' /></p>

</form>

<h2>Code Walkthrough</h2>

<p>Include the following script in the HEAD of your page:</p>
END;
  echo codebox(<<<END
var KWControl = null;

/* SetupDocument: Called when the page finishes loading */
function SetupDocument()
{
  /* Make sure that Keyman is initialized (we can't guarantee initialization order) */
  KeymanWeb.Init();
  /* Change the UI control mode of KeymanWeb to manual (default automatic) */
  KeymanWeb.SetMode('manual');
  KWControl = document.getElementById('KWControl');
  /* Retrieve the list of keyboards available from KeymanWeb and populate the selector using the DOM */
  var kbds = KeymanWeb.GetKeyboards();
  for(var kbd in kbds)
  {
    var opt = document.createElement('OPTION');
    opt.value = kbds[kbd].InternalName;
    opt.innerHTML = kbds[kbd].Name;
    KWControl.appendChild(opt);    
  }
  /* Focus onto the multilingual field in the form */
  document.f.multilingual.focus();
}

/* KWControlChange: Called when user selects an item in the KWControl SELECT */
function KWControlChange()
{
  /* Select the keyboard in KeymanWeb */
  KeymanWeb.SetActiveKeyboard(KWControl.value);
  /* Focus onto the multilingual field in the form */
  document.f.multilingual.focus();
}

/* KWHelpClick: Called when user clicks the help icon */
function KWHelpClick()
{
  /* Toggle display of help below the KWControl SELECT */
  if(KeymanWeb.IsHelpVisible()) KeymanWeb.HideHelp();
  else KeymanWeb.ShowHelp(KeymanWeb.GetAbsoluteX(KWControl), KeymanWeb.GetAbsoluteY(KWControl) + KWControl.offsetHeight + 2);
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

<!-- When the page has finished loading, populate the keyboard selector, see above -->
<body onload="SetupDocument()">
END
  );

  echo "<p>And finally, include the keyboard SELECT and the clickable help img:</p>";
  
  echo codebox(<<<END
<!-- Display the KWControl selector with different keyboards listed -->
<p>Keyboard: <select id='KWControl' onchange='KWControlChange()'><option value=''>English</option></select>
<img src='form_help.jpg' style='vertical-align: bottom' onclick='KWHelpClick()' /></p>
END
  );

  echo "<p><a href='control_by_control.php'>On to Control by Control Example</a></p>";

  require_once('footer.php');
?>