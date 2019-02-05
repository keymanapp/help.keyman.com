<?php
  $pagetitle = 'Debugger';
  $script = 'tibetan_direct_unicode.js';
  $ondocumentload='SetupDocument';
  $header_extra_code = <<<END
<script type="text/javascript">

var KWControl = null;

function SetupDocument()
{
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
  //KeymanWeb.ShowDebug();
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
END;
  require_once('kmwdevheader.php');
?>


<p>In this example, the web page designer has opted for their own user interface instead of the KeymanWeb
interface.  The keyboards in the selector are populated from the KeymanWeb list of keyboards.</p>

<form name='f' action='.' method='post'>

<p><input type='text' id='multilingual' name='multilingual' size="40" /></p>

<p>Keyboard: <select id='KWControl' onchange='KWControlChange()'><option value=''>English</option></select>
<img src='form_help.jpg' style="vertical-align: bottom; cursor: hand" onclick='KWHelpClick()' /></p>

</form>

<?php require_once('kmwdevfooter.php'); ?>