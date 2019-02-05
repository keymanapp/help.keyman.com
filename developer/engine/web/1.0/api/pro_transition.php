<?php
  $pagetitle = 'Transitioning from KeymanWeb Subscription to Professional Edition';
  $pagename = 'KeymanWeb Professional Edition Transition Guide';
  $IncludeKeymanWeb = false;
  require_once('header.php');
  
  $integrationcode = codebox(<<<END
<script type='text/javascript'>
  var KeymanWeb_Key = 'your-key-here';
  var KeymanWeb_Root = '/path-to-KeymanWeb/';
</script>
<script type='text/javascript' src='/path-to-KeymanWeb/keymanweb.js'></script>
END
  );

  $keyboardcode = codebox(<<<END
<script type='text/javascript' src='/path-to-keyboards/your-keyboard-name.js'></script>
END
  );
  
  echo <<<END

<p>If you outgrow your KeymanWeb Subscription, you may need to transition your site to using the Professional Edition
of KeymanWeb.  This Guide outlines the steps required to complete this transition.  You should be familiar with
HTML editing, and basic Javascript coding.  Advanced Javascript skills will not be required.</p>

<ol>

<li><a href='http://$site_tavultesoft/keymanweb/requestquote.php'>Purchase a license</a>
to KeymanWeb Professional Edition.</li>

<li>Once you have a licence, you will receive from Tavultesoft:
  <ul>
    <li>The KeymanWeb Professional distribution archive</li>
    <li>A KeymanWeb_Key licence key string</li>
    <li>Keyboard Javascript files as requested</li>
  </ul>
</li>

<li>Extract the KeymanWeb Professional files from the distribution archive to your web server,
into a new, world-visible folder.</li>

<li>Locate the references on each web page to the KeymanWeb Subscription (the code you originally
inserted from the "Get HTML" step in the Subscription setup, remove it, and replace it with the following code:
<br/>
$integrationcode
<br/>
Replace 'your-key-here' with the KeymanWeb_Key that you received from Tavultesoft, and replace 'path-to-KeymanWeb'
with the path to the folder where you stored the KeymanWeb distribution files.
</li>

<li>You can place the keyboard files in the same folder as the KeymanWeb distribution files, or an alternate
location if you prefer.  For each keyboard, add the following code:
<br/>
$keyboardcode
<br/>
Again, replace the 'path-to-keyboards' and 'your-keyboard-name' strings as appropriate.</li>

<li>Those are the first steps required.  KeymanWeb Professional does not by default include
any of the user interface options of the Subscription edition, apart from the Default user interface,
so you will need to integrate your own user interface.  The Subscription user interfaces are available
from Tavultesoft on request for integration into KeymanWeb Professional.</li>

</ol>

<p>More information about KeymanWeb Professional integration can be found in the 
<a href='examples/automatic_control.php'>examples</a>.</p>

<p>You can read more about the editions of KeymanWeb
at <a href='http://$site_tavultesoft/keymanweb/'>the KeymanWeb product information pages.</a></p>

END;

  require_once('footer.php');
?>