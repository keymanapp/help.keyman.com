<?php
  require_once('includes/template.php');
  require_once('includes/session-embed.php');
  
  head([
    'title' => 'Installing the Keyman System Keyboard - Keyman for iPhone and iPad Help',
//    'css' => ['template.css','app-info.css'],
      'css' => ['template.css','keyboard.css','keys.css', "embed.css"],

    'embedded' => $embed_ios
  ]);
?>

<h2><span class="content-online">Keyman for iPhone and iPad:  </span>Installing the Keyman System Keyboard</h2>

<p>
    Open the 'Settings' App and go to 'General' > 'Keyboard'.
</p>
<p>
<img src="<?php echo cdn("img/app/13.0/keyman-settings5.png"); ?>" />
</p>
<p>
    Touch 'Keyboards'.
</p>
<p>
<img src="<?php echo cdn("img/app/13.0/keyman-settings6.png"); ?>" />
</p>
<h3>Enabling Keyman</h3>
<p>
    To activate Keyman as a system keyboard, touch 'Add New Keyboard...'
</p>
<p>
<img src="<?php echo cdn("img/app/13.0/keyman-settings.png"); ?>" />
</p>
<p>
    Touch 'Keyman' under THIRD-PARTY KEYBOARDS.
</p>
<p>
<img src="<?php echo cdn("img/app/13.0/keyman-settings2.png"); ?>" />
</p>
<p>
    Touch 'Keyman - Keyman'.
</p>
<p>
<img src="<?php echo cdn("img/app/13.0/keyman-settings3.png"); ?>" />
</p>
<p>
    Turn on the 'Allow Full Access' toggle and confirm.
</p>
<p>
<img src="<?php echo cdn("img/app/13.0/keyman-settings4.png"); ?>" />
</p>
<p>
    Your Keyman keyboards will now be available throughout your entire device. You can switch between Keyman keyboards and the default iOS keyboard layout by touching the globe key of the keyboard whenever you are typing.
</p>
<p>
<img src="<?php echo cdn("img/app/13.0/globe.png"); ?>" />
</p>
<h3>On "Allow Full Access"</h3>
<p>After opening the Keyman system keyboard for the first time in an app, you can turn off the "Allow Full Access" option
again.
</p>
<p>
  You may need to temporarily switch this on again in the future for app updates and for some changes to keyboard preferences.
</p>
<p>
  It may always be safely deactivated immediately after opening the system keyboard again in an app.
</p>
<h2>Help Index</h2>

<ul>
  <li class="content-online"><a href='index.php'>Keyman for iPhone and iPad help home</a></li>
  <li class="content-in-app"><a href='index.php'>Getting Started</a></li>
  <li><a href='installing-keyboards.php'>Installing keyboards</a></li>
  <li><a href='switching-between-keyboards.php'>Switching between keyboards</a></li>
  <li><a href='uninstalling-keyboards.php'>Uninstalling keyboards</a></li>
  <li><a href='installing-custom-keyboards.php'>Installing custom keyboards</a></li>
  <li><a href='installing-system-keyboard.php'>Installing the Keyman System Keyboard</a></li>
  <li><a href='installing-fonts.php'>Installing fonts</a></li>
  <li><a href='using-keyman-browser.php'>Using the Keyman Browser</a></li>
</ul>