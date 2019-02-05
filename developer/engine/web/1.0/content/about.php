<?php 
  $pagename = 'About KeymanWeb';
  $pagetitle = 'About KeymanWeb';
  $MainPage = true;
  
  require_once('header.php');
  
  echo <<<END

<div class='body_text'>

<p style='margin-top: 16px'>
KeymanWeb is a JavaScript application which allows website visitors to use their own keyboard to type in any 
language, without downloading or installing any software.  KeymanWeb has been designed as a component which
can be added simply to any website which needs text input, allowing straightforward and efficient use of
users' preferred language.
</p>

<p>
KeymanWeb has been developed by <a href="http://$site_tavultesoft/about.php">Tavultesoft Pty Ltd</a>,
a software development company which specialises in language applications and is based in Tasmania, Australia.</p>

<p>More detailed information about KeymanWeb and its capabilties is available on Tavultesoft's KeymanWeb product
information pages.  To go to the website now, <a href="http://$site_tavultesoft/keymanweb/">click here</a>.</p>

<p>You can get a free KeymanWeb Subscription on the <a href="http://$site_tavultesoft/account/home/kmw/">Tavultesoft KeymanWeb Subscription</a> website.</p>

</div>
<br/>

END;

 require_once('footer.php');
?>