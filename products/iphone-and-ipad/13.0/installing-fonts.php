<?php
  require_once('includes/template.php');
  require_once('includes/session-embed.php');
  
  head([
    'title' => 'Installing fonts - Keyman for iPhone and iPad Help',
//    'css' => ['template.css','app-info.css'],
      'css' => ['template.css','keyboard.css','keys.css','app-info.css', "embed.css"],

    'embedded' => $embed_ios
  ]);
?>

<h2><span class="content-online">Keyman for iPhone and iPad:  </span>Installing Fonts</h2>

<p>
   Some keyboards require special fonts that do not come standard with your iPhone or iPad. For keyboards that use these fonts, the Keyman app will provide a download of the font to install onto your device, meaning all apps will be able to correctly display the font. To install the font, touch <span class="command">Install</span>.
   <br/>
   <img src="<?php echo cdn("img/app/13.0/font-dl1.png"); ?>" />
   <br/><br/>
   You will then be taken to your device settings, and asked to install a profile for the font. Touch <span class="command">Install</span>.
   <br/>
   <img src="<?php echo cdn("img/app/13.0/font-dl2.png"); ?>" />
   <br/><br/>
   Then <span class="command">Install</span> again in the Consent page.
   <br/>
   <img src="<?php echo cdn("img/app/13.0/font-dl3.png"); ?>" />
   <br/><br/>
   Once the profile is installed, touch <span class="command">Done</span>.
   <br/>
   <img src="<?php echo cdn("img/app/13.0/font-dl4.png"); ?>" />
   <br/><br/>
   And then <span class="command">Touch now to return to Keyman</span>.
   <br/>
   <img src="<?php echo cdn("img/app/13.0/font-dl5.png"); ?>" />
   <br/><br/>
   The font is now successfully installed, and will display correctly throughout your device!
</p>

<h2>Help Index</h2>

<ul>
  <li class="content-online"><a href='index.php'>Keyman for iPhone and iPad help home</a></li>
  <li class="content-in-app"><a href='index.php'>Getting Started</a></li>
  <li><a href='installing-keyboards.php'>Installing keyboards</a></li>
  <li><a href='switching-between-keyboards.php'>Switching between keyboards</a></li>
  <li><a href='uninstalling-keyboards.php'>Uninstalling keyboards</a></li>
  <li><a href='installing-custom-keyboards.php'>Installing custom keyboards</a></li>
  <li><a href='sharing-keyboards.php'>Sharing keyboards</a></li>
  <li><a href='installing-system-keyboard.php'>Installing the Keyman System Keyboard</a></li>
  <li><a href='installing-fonts.php'>Installing fonts</a></li>
  <li><a href='using-keyman-browser.php'>Using the Keyman Browser</a></li>
</ul>
