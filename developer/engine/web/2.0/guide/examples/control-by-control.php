<?php

require_once('includes/template.php');
require_once('includes/__iframeheader.php');

head([
  'title' => "Control-by-Control Example"
]);

require_once('includes/__kmwheader.php');

$kmwbuild = get_kmwbuild();
$cdn_path = get_cdn_path($kmwbuild);
$resources = get_kmw_resources();


?>

<h1>Control-by-Control Example</h1>
<p>In this example, a simulated webmail form, the default and permissible keyboard for each control is managed 
by the web page.  We use the automatic mode for simplicity of demonstration.  We also link to the CDN for KeymanWeb in
this example.</p>

<?php embed_with_iframe("__control-by-control.php", 525); ?>

<h2>Code Walkthrough</h2>

<p>Include the following script in the HEAD of your page:</p>
<?php
  echo codebox(<<<END
<script type="text/javascript">
  var kmw = tavultesoft.keymanweb;

  function SetupDocument()
  {
    kmw.init({
        root: './',  // Note - if drawing the latest version of KeymanWeb from the CDN, this will
                     // default to the source folder on our servers.
        ui: 'toggle',
        resources: './'
    });
    
    /* Disable KeymanWeb interaction on the 'Email to' TEXT control */
    kmw.DisableControl(document.f.address);
    /* Set the default keyboard for the 'Subject' TEXT control to 'off' (i.e. default browser keyboard) */   
    kmw.SetDefaultKeyboardForControl(document.f.subject, '');
    /* Set the default keyboard for the 'Message body' TEXTAREA to the LaoKeys keyboard */
    kmw.SetDefaultKeyboardForControl(document.f.text, 'Keyboard_laokeys');
  }

  window.addEventListener( 'load' , SetupDocument );
</script>
END
  );
  echo "<p>Also include the following HTML code:</p>";

  echo codebox(<<<END
<head>
    <!-- Load the KeymanWeb engine -->
    <script src="$cdn_path/keymanweb.js" type="text/javascript"></script>
    <script src="$cdn_path/kmwuitoggle.js" type="text/javascript"></script>
    <!-- // Also be sure to load your keyboards.  Note that stubs will not work with this
         // example without detailing paths precisely in the init() call's parameter.-->
</head>


<!-- When the page has finished loading, advise KeymanWeb of control settings, see above -->
<body onload="SetupDocument()">
END
  );
?>

<p>Note that in this example we disabled the first element (<code>document.f.address</code>) by API call.  A later API
  call can re-enable KeymanWeb for this control should it fit the page's design.</p>
<p> Alternatively, this can be done by instead adding the class <code>'kmw-disabled'</code> to the control.  This will
permanently block KeymanWeb from handling its input.</p>
  
<p><a href='./'>Return to Example index</a></p>
