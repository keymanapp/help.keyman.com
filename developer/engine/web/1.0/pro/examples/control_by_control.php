<?php
  $pagetitle = 'Control by Control Example';
  $pagename = $pagetitle;
  $IncludeKeymanWeb = false;
  $ondocumentload='SetupDocument();';
  
  require_once('header.php');
  require_once('./devheader.php');

  echo <<<END
<script type="text/javascript">
  function SetupDocument()
  {
    KeymanWeb.Init();
    KeymanWeb.DisableControl(document.f.address);
    KeymanWeb.SetDefaultKeyboardForControl(document.f.subject, '');
    KeymanWeb.SetDefaultKeyboardForControl(document.f.text, 'Keyboard_laokeys');
    KeymanWeb.DisableControl(document.getElementById("code1"));
    KeymanWeb.DisableControl(document.getElementById("code2"));
  }
</script>

<p>In this example, a simulated webmail form, the default and permissible keyboard for each control is managed 
by the web page.  We use the automatic mode for simplicity of demonstration.</p>

<form name='f' action='.' method='post'>

<p>Email to <span class='note'>(KeymanWeb not enabled)</span><br /><input type='text' name='address' size="40" /></p>

<p>Subject <span class='note'>(Defaults to 'English' or 'off')</span><br /><input type='text' name='subject' size="40" /></p>

<p>Message body <span class='note'>(Defaults to 'Lao Unicode')</span><br /><textarea name='text' cols='40' rows='10'></textarea></p>

</form>

<h2>Code Walkthrough</h2>

<p>Include the following script in the HEAD of your page:</p>
END;
  echo codebox(<<<END
/* SetupDocument: Called when the page finishes loading */
function SetupDocument()
{
  /* Make sure that Keyman is initialized (we can't guarantee initialization order) */
  KeymanWeb.Init();
  /* Disable KeymanWeb interaction on the 'Email to' TEXT control */
  KeymanWeb.DisableControl(document.f.address);
  /* Set the default keyboard for the 'Subject' TEXT control to 'off' (i.e. default browser keyboard) */
  KeymanWeb.SetDefaultKeyboardForControl(document.f.subject, '');
  /* Set the default keyboard for the 'Message body' TEXTAREA to the LaoKeys keyboard */
  KeymanWeb.SetDefaultKeyboardForControl(document.f.text, 'Keyboard_laokeys');
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

<!-- When the page has finished loading, advise KeymanWeb of control settings, see above -->
<body onload="SetupDocument()">
END
  );
  
  echo "<p><a href='../'>Return to API index</a></p>";

  require_once('footer.php');
?>