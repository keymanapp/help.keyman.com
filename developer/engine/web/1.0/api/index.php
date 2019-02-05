<?php
  $pagetitle = 'KeymanWeb API Documentation';
  $pagename = 'KeymanWeb API Documentation';
  require_once('header.php');
  
  echo <<<END
<ul id='index'>

<li><a href='http://$site_tavultesoft/keymandev/documentation/70/reference_kmw_index.html'>Reference Documentation</a></li>

<li><a href='keyboard.php'>KeymanWeb Keyboard Development Reference</a></li>

<li><a href='pro_transition.php'>Transitioning from Subscription to Professional Edition</a></li>

<li>KeymanWeb Professional Edition API Examples
  <ul>
    <li><a href='examples/automatic_control.php'>Automatic Control Example</a></li>
    <li><a href='examples/automatic_control_loaded.php'>Automatic Control Preloaded Example</a></li>
    <li><a href='examples/manual_control.php'>Manual Control Example</a></li>
    <li><a href='examples/full_manual_control.php'>Full Manual Control Example</a></li>
    <li><a href='examples/control_by_control.php'>Control by Control Example</a></li>
  </ul>
</li>

</ul>
END;

  require_once('footer.php');
?>