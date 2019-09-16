<?php
  require_once('includes/template.php');
  require_once('includes/session.php');
  
  head([
    'title' => 'Installing the Keyman System Keyboard - Keyman for iPhone and iPad Help',
//    'css' => ['template.css','app-info.css'],
      'css' => ['template.css','keyboard.css','keys.css'],

    'embedded' => $embed_ios
  ]);
?>

<?php
$titlePrefix = $embed_ios ? "" : "Keyman for iPhone and iPad:  ";
?>
<h2><?=$titlePrefix?>Installing the Keyman System Keyboard</h2>
<h3>System Settings for Keyboards</h3>
<p>
    Open the 'Settings' App and go to 'General' > 'Keyboard'.
</p>
<p>
<img src="<?php echo cdn("img/app/12.0/keyman-settings5.png"); ?>" />
</p>
<p>
    Touch 'Keyboards'.
</p>
<p>
<img src="<?php echo cdn("img/app/12.0/keyman-settings6.png"); ?>" />
</p>
<h3>Enabling Keyman</h3>
<p>
    To activate Keyman as a system keyboard, touch 'Add New Keyboard...'
</p>
<p>
<img src="<?php echo cdn("img/app/12.0/keyman-settings.png"); ?>" />
</p>
<p>
    Touch 'Keyman' under THIRD-PARTY KEYBOARDS.
</p>
<p>
<img src="<?php echo cdn("img/app/12.0/keyman-settings2.png"); ?>" />
</p>
<p>
    Touch 'Keyman - Keyman'.
</p>
<p>
<img src="<?php echo cdn("img/app/12.0/keyman-settings3.png"); ?>" />
</p>
<p>
    Turn on the 'Allow Full Access' toggle and confirm.
</p>
<p>
<img src="<?php echo cdn("img/app/12.0/keyman-settings4.png"); ?>" />
</p>
<p>
    Your Keyman keyboards will now be available throughout your entire device. You can switch between Keyman keyboards and the default iOS keyboard layout by touching the globe key of the keyboard whenever you are typing.
</p>
<p>
<img src="<?php echo cdn("img/app/12.0/globe.png"); ?>" />
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

<?php
$indexName = $embed_ios ? "Getting Started" : "Keyman for iPhone and iPad help home";
?>

<ul>
  <li><a href='index.php<?=$session_query_q?>'><?=$indexName?></a></li>
  <li><a href='installing-keyboards.php<?=$session_query_q?>'>Installing keyboards</a></li>
  <li><a href='switching-between-keyboards.php<?=$session_query_q?>'>Switching between keyboards</a></li>
  <li><a href='uninstalling-keyboards.php<?=$session_query_q?>'>Uninstalling keyboards</a></li>
  <li><a href='installing-custom-keyboards.php<?=$session_query_q?>'>Installing custom keyboards</a></li>
  <li><a href='installing-system-keyboard.php<?=$session_query_q?>'>Installing the Keyman System Keyboard</a></li>
  <li><a href='installing-fonts.php<?=$session_query_q?>'>Installing fonts</a></li>
  <li><a href='using-keyman-browser.php<?=$session_query_q?>'>Using the Keyman Browser</a></li>
</ul>
