<?php
require_once('includes/template.php');
require_once('includes/session-embed.php');
require_once('includes/session-formfactor.php');

head([
    'title' => 'Switching Between Keyboards - Keyman for Android Help',
    'css' => ['template.css', 'app-info-a.css', 'embed.css', 'formfactor.css'],
    'embedded' => $embed_android
]);
?>

<h2>Switching Between Keyboards</h2>

<?php
  // We need to condition here.  While CSS selection can affect visibility, it
  // won't prevent offlining scripts from following the links and breaking
  // the desired mirrored content for offline help.
  if(!$embed_android) {
    formFactorSelect();
  }
?>

<p>
  To switch keyboards, follow these steps:
</p>
<p>
  Step 1)
</p>
<p>
  With the keyboard visible, touch the globe key:
<p>
  <img class="phone" id="globe-ap" src="<?= cdn("img/app/12.0/globe-ap.png"); ?>"/>
  <img class="tablet" id="globe-at" src="<?= cdn("img/app/12.0/globe-at.png"); ?>"/>
</p>
<p>
  This will bring up a list of all currently installed languages (the default is English
  EuroLatin (SIL)). If you have already downloaded additional languages, they will appear here.
  Simply select them and the keyboard will re-appear with the new language.
</p>

<h2>Hotkey</h2>
<p>
  To switch between languages while using an external keyboard (i.e. a bluetooth keyboard), a quick and easy way is to
  use a hotkey combination. Press and hold 'Ctrl' and then press 'Tab'.
  You should then see the same listing of languages/keyboards. Tap on any available language of your choice.
</p>

<h2>Help Index</h2>

<ul>
  <li class="content-in-app"><a href="index.php">Getting Started</a></li>
  <li class="content-online"><a href="index.php">Keyman for Android help home</a></li>
  <li><a href="installing-keyboards.php">Installing keyboards</a></li>
  <li><a href='switching-between-keyboards.php'>Switching between keyboards</a></li>
  <li><a href='uninstalling-keyboards.php'>Uninstalling keyboards</a></li>
  <li><a href='installing-custom-keyboards.php'>Installing custom keyboards</a></li>
  <li><a href='installing-system-keyboard.php'>Installing the Keyman System Keyboard</a></li>
  <li><a href='installing-fonts.php'>Installing fonts</a></li>
  <li><a href='using-keyman-browser.php'>Using the Keyman Browser</a></li>
</ul>
