<html>
<head>

<?php

require_once('includes/__kmwheader.php');

$kmwbuild = setup_kmw();
$cdn_path = get_cdn_path($kmwbuild);
$resources = get_kmw_resources();

if(isset($debug) && isset($dev_path)) {
  echo "<script src = '$dev_path/kmwuitoggle.js'></script>\n";
} else {
  echo "<script src='$cdn_path/kmwuitoggle.js'></script>\n";
}

?>

<script type='text/javascript' src='js/unified_loader.js'></script>

<script type="text/javascript">
  function SetupDocument()
  {
    kmw.init({
        root: './',  // Note - if drawing the latest version of KeymanWeb from the CDN, this will
                     // default to the source folder on our servers.
        ui: 'toggle',
        resources: '<?=$resources?>' <?php /* Allows us to have proper resource loading from a dev environment.*/ ?>
    });

    kmw.DisableControl(document.f.address);
    kmw.SetDefaultKeyboardForControl(document.f.subject, '');
    kmw.SetDefaultKeyboardForControl(document.f.text, 'Keyboard_laokeys');
  }

  window.addEventListener( 'load' , SetupDocument );
</script>
</head>
<body>
<form name='f' action='.' method='post'>

<p>Email to <span class='note'>(KeymanWeb not enabled)</span><br /><input type='text' name='address' size="40" placeholder="id = address"/></p>

<p>Subject <span class='note'>(Defaults to 'English' or 'off')</span><br /><input type='text' name='subject' size="40" placeholder="id = subject"/></p>

<p>Message body <span class='note'>(Defaults to 'LaoKeys')</span><br /><textarea name='text' cols='40' rows='10' placeholder="id = text"></textarea></p>

</form>

</body>
</html>