<?php

require_once('includes/template.php');
require_once('includes/__iframeheader.php');

head([
  'title' => "Manual Mode Example"
]);

require_once('includes/__docheader.php');

?>

<h1>Manual On-Screen Keyboard Control</h1>

<p>In this example, the web page designer specifies when KeymanWeb's on-screen keyboard may be displayed on non-mobile
  devices.  They have also specified that the LaoKeys keyboard should be activated by default.
This example continues to use the KeymanWeb default interface.</p>

<?php embed_with_iframe("__manual-control.php", 375); ?>

<h2>Code Walkthrough</h2>

<p>Include the following script in the HEAD of your page:</p>

<?php echo codebox(<<<END
<script>
  /* SetupDocument: Called when the page finishes loading */
  function SetupDocument()
  {
    /* Make sure that Keyman is initialized (we can't guarantee initialization order) */
    keyman.init();

    KWControl = document.getElementById('KWControl');
    /* Prevents automatic display of the onscreen keyboard. (default automatic) */
    keyman.osk.hide();
    /* Select the LaoKeys keyboard */
    keyman.setActiveKeyboard('laokeys');
  }

  /* KWControlClick: Called when user clicks on the KWControl IMG */
  function KWControlClick()
  {
    if(keyman.osk.isEnabled()) {
      keyman.osk.hide();
    } else {
      keyman.osk.show(true); // Specifies that the OSK should display whenever a valid
                             // control has focus, re-enabling the default behavior.
    }
  }
</script>
END
  );

echo "<p>Also include the following HTML code:</p>";

echo codebox(<<<END
<head>
    <!-- Load the KeymanWeb engine -->
    <script src="keymanweb.js" type="text/javascript"></script>
    <!-- Load the LaoKeys keyboard stub -->
    <script src="laokeys_load.js" type="text/javascript"></script>
</head>

<!-- When the page has finished loading, activate the LaoKeys keyboard, see above -->
<body onload="SetupDocument()">
END
  );
?>

<ul>
  <li>File: <a href="js/laokeys_load.js">laokeys_load.js</a></li>
</ul>

<?php

  echo "<p>And finally, include the control img for KeymanWeb:</p>";

  echo codebox(<<<END
<!-- Display the KeymanWeb icon for the user to click on -->
<img style="border: solid 1px black; padding: 2px 2px 3px 2px" src='kmicon.png' alt='KeymanWeb' onclick='KWControlClick()' id='KWControl' />
END
  );
?>

<h2>API References</h2>

<p>On programmatically setting the keyboard:  <a href="../../reference/core/setActiveKeyboard"><code><?="keyman.setActiveKeyboard()"?></code></a>.</p>
<p>On managing the visibility of the OSK:  <a href="../../reference/osk/hide"><code><?="keyman.osk.hide()"?></code></a>,
  <a href="../../reference/osk/show"><code><?="keyman.osk.show()"?></code></a>.</p>

<hr>

<p><a href='full-manual-control'>On to Full Manual Control Example</a></p>