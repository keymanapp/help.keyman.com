<?php /*
  Name:             index
  Copyright:        Copyright (C) 2005 Tavultesoft Pty Ltd.
  Documentation:
  Description:
  Create Date:      18 Sep 2009

  Modified Date:    18 Sep 2009
  Authors:          mcdurdin
  Related Files:
  Dependencies:

  Bugs:
  Todo:
  Notes:
  History:          18 Sep 2009 - mcdurdin - Add Desktop help support and polish
*/
  $pagename = 'KeymanWeb Help Topics';
  $pagetitle = 'Help Topics';
  $MainPage = true;

  require_once('servervars.php');
  require_once('header.php');

?>


<div style='padding: 0px 32px 0px;' class='body_text'>

<ul id='index' style='margin-top: 16px'>
<li class='incomplete'><a href="about.php">About KeymanWeb</a> </li>
<li><a href="what-is-a-keyboard.php">What is a Keyboard?</a></li>

<li><a href="ui/index.php">Using KeymanWeb</a>
  <ul>
    <li><a href="ui/ui-button.php">Button Interface</a></li>
    <li><a href="ui/ui-floating.php">Floating Interface</a></li>
    <li><a href="ui/ui-toggle.php">Toggle Interface</a></li>
    <li><a href="ui/ui-toolbar.php">Toolbar Interface</a></li>
    <li><a href="ui/osk.php">On-Screen Keyboard</a></li>
	</ul>
</li>

<li><a href="troubleshooting/index.php">Troubleshooting</a>
	<ul>
  	<li><a href="troubleshooting/browsers.php">Browser Compatibility</a></li>
  	<li><a href="troubleshooting/index.php#boxes">Why are boxes appearing when I type?</a></li>
  	<li><a href="troubleshooting/index.php#one">Why isn't my language appearing correctly?</a></li>
  	<li><a href="troubleshooting/index.php#two">Why can't I see the On-Screen Keyboard?</a></li>
  	<li><a href="troubleshooting/index.php#three">Why can I only type in English?</a></li>
	</ul>
</li>

<li><a href="../index.php">Help for KeymanWeb Developers</a>
	<ul>
  	<li><a href="../tutorial.php">Tutorial: Adding KeymanWeb to your Website</a></li>
  	<li><a href="../sub/edit.php">KeymanWeb Subscription Management</a></li>
  	<li><a href="../api/">KeymanWeb API Reference</a></li>
  	<li><a href="../../faq.php">Frequently Asked Questions</a></li>
	</ul>
</li>

<li><a href='/keyboard/'>Index of Keyboard Layouts</a></li>
<li><a href='glossary.php'>Glossary</a></li>
<li><a href="http://tavultesoft.com/forums/">KeymanWeb Forums</a></li>
<li><a href="/contact/">Contact Tavultesoft</a></li>

<!--      <li><a href="https://twitter.com/intent/tweet?screen_name=keyman" class="twitter-mention-button" data-size="large" data-related="keyman">Tweet to @keyman</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script></li>-->

</ul>

</div>

<?php
 include('footer.php');
?>
