<?php
require_once('includes/template.php');
require_once('includes/session-embed.php');
require_once('includes/session-formfactor.php');

head([
    'title' => 'Adding Keyboards - Keyman for Android Help',
    'css' => ['template.css', 'app-info-a.css', 'embed.css', 'formfactor.css'],
    'embedded' => $embed_android
]);
?>

<h2>Adding New Keyboards</h2>

<?php
  // We need to condition here.  While CSS selection can affect visibility, it
  // won't prevent offlining scripts from following the links and breaking
  // the desired mirrored content for offline help.
  if(!$embed_android) {
    formFactorSelect();
  }
?>

<p>
  To add keyboards, follow these steps:
</p><p>
  Step 1)
</p><p>
  Open the menu for additional options. Select 'Settings'
</p><p>
  Step 2)
</p><p>
  From the Keyman Settings menu, select 'Installed languages'
</p><p>
  <img id="settings-language-ap" src="<?= cdn("img/app/12.0/settings-language-ap.png"); ?>" />
</p><p>
  Step 3)
</p><p>
  From the 'Installed languages' menu, touch the <span class="command">+</span>
  button in the bottom right corner of your screen.
</p><p>
  <img id="plus-a" src="<?= cdn("img/app/12.0/plus-a.png"); ?>" />
</p><p>
  Step 4)
</p><p>
  A list of all available languages will appear. Scroll through this list until you find
  the language you want to install. Languages marked with a right arrow have multiple keyboards - for
  example we have 10+ different Tamil keyboards.
</p><p>
  <img class="phone" id="lang-list-ap" src="<?= cdn("img/app/12.0/lang-list-ap.png"); ?>"/>
  <img class="tablet" id="lang-list-at" src="<?= cdn("img/app/12.0/lang-list-at.png"); ?>"/>
</p><p>
  Select the language and keyboard you want to install - a popup will ask for confirmation,
  hit the <span class="command">Download</span> button.
</p><p>
  <img class="phone" id="confirm-dl-ap" src="<?= cdn("img/app/12.0/confirm-dl-ap.png"); ?>"/>
  <img class="tablet" id="confirm-dl-at" src="<?= cdn("img/app/12.0/confirm-dl-at.png"); ?>"/>
</p><p>
  Step 5)
</p><p>
  Once the download is complete, the new keyboard will be selected. Touch the <span class="command">&larr;</span>
  button on the top left corner of the popup several times and the new keyboard will become active.
</p><p>
  <img class="phone" id="success-ap" src="<?= cdn("img/app/12.0/dl-success-ap.png"); ?>"/>
  <img class="tablet" id="success-at" src="<?= cdn("img/app/12.0/dl-success-at.png"); ?>"/>
</p><p>
  Alternate Step for System Keyboard)
</p><p>
  The Keyman system keyboard has an additional <span class="command">CLOSE KEYMAN</span> button at the bottom left of
  the "Keyboards" menu. Pushing this button will close Keyman and switch to the next non-Keyman system keyboard.
</p><p>
  <img id="close-keyman-a" src="<?= cdn("img/app/12.0/close-keyman-a.png"); ?> "/>
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
