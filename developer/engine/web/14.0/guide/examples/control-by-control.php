<?php

require_once('includes/template.php');
require_once('includes/__iframeheader.php');

head([
  'title' => "Control-by-Control Example"
]);

require_once('includes/__kmwheader.php');
require_once('includes/__docheader.php');

$kmwbuild = get_kmwbuild();
$cdn_path = get_cdn_path($kmwbuild);

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
  var kmw = keyman;

  function SetupDocument() {
    kmw.init({
      root: './',  // Note - if drawing the latest version of KeymanWeb from the CDN, this will
                   // default to the source folder on our servers.
      ui: 'toggle',
      resources: './'
    }).then(function() {
      // Load the keyboards of your choice here.
      loadKeyboards();

      /* Disable KeymanWeb interaction on the 'Email to' TEXT control */
      kmw.disableControl(document.f.address);
      /* Set the default keyboard for the 'Subject' TEXT control to 'off' (i.e. default browser keyboard) */
      /* As KeymanWeb relies on the on-screen keyboard to change languages for touch-based devices, this will
       * not work for them and will default to the first language added to KeymanWeb after initialization. */
      kmw.setKeyboardForControl(document.f.subject, '', '');
      /* Set the default keyboard for the 'Message body' TEXTAREA to the LaoKeys keyboard */
      kmw.setKeyboardForControl(document.f.text, 'Keyboard_laokeys', 'lo');
    });
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
  call can re-enable KeymanWeb for this control should it fit the page's design.  Alternatively, this can be done by 
  instead adding the class <code>'kmw-disabled'</code> to the control.  This will
permanently block KeymanWeb from handling its input.</p>
<p>The <code>loadKeyboards()</code> function used by this page may be found <a href="js/unified_loader.js">here</a>.</p>

<h2>API References</h2>

<p>On disabling controls:  <a href="../../reference/core/disableControl"><code><?="keyman.disableControl()"?></code></a>.</p>
<p>On setting the keyboard for a single control:
  <a href="../../reference/core/setKeyboardForControl"><code><?="keyman.setKeyboardForControl()"?></code></a>.</p>

<hr>

<p><a href='./'>Return to Example index</a></p>
