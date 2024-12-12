<?php
  require_once('includes/template.php');
  
  head([
    'title' => 'Installing Custom Keyboards - Keyman for iPhone and iPad Help',
//    'css' => ['template.css','app-info.css'],
      'css' => ['template.css','keyboard.css','keys.css'],

    'showMenu' => true
  ]);
?>
  
<h2>Keyman for iPhone and iPad: Installing Custom Keyboards</h2>
<p>
  Step 1) Click the link to your custom keyboard json file. (Note: typing the link into your browser URL bar won't work, you will need to include the link in a web page or email)<br/>
  <img src="<?php echo cdn("img/app/2.0/url-screeni.png"); ?>" />
  <br/>
  Step 2) Click 'Download'. This will fetch the keyboard and font specified from the json file:<br/>
  <img src="<?php echo cdn("img/app/2.0/install1i.png"); ?>" />
  <br/>
  The keyboard may also prompt you to install a font -- you should click 'Install' and follow the steps:<br/>
  <img src="<?php echo cdn("img/app/2.0/install2i.png"); ?>" />
  <br/>
  Once the keyboard has been downloaded, you should be able to use it as normal.
  <br/>
  To learn how to create a custom installable keyboard, <a href="../../../developer/current-version/guides/distribute/">click here</a>.
</p>

<ul>
  <li><a href='index.php'>Keyman for iPhone and iPad help home</li></li>
  <li><a href='switching-between-keyboards.php'>Switching between keyboards</a></li>
  <li><a href='installing-system-keyboard.php'>Installing the Keyman System Keyboard</a></li>
  <li><a href='installing-fonts.php'>Installing fonts</a></li>
  <li><a href='installing-custom-keyboards.php'>Installing custom keyboards</a></li>
  <li><a href='using-keyman-browser.php'>Using the Keyman Browser</a></li>
</ul>
