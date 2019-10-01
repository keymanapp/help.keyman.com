<?php
require_once('includes/template.php');
require_once('includes/session-embed.php');
require_once('includes/session-formfactor.php');

head([
    'title' => 'Removing Keyboards - Keyman for Android Help',
    'css' => ['template.css', 'app-info-a.css', 'embed.css', 'formfactor.css'],
    'embedded' => $embed_android
]);
?>

<h2>Removing a Keyboard</h2>

<?php
  // We need to condition here.  While CSS selection can affect visibility, it
  // won't prevent offlining scripts from following the links and breaking
  // the desired mirrored content for offline help.
  if(!$embed_android) {
    formFactorSelect();
  }
?>

<p>
  To uninstall a keyboard, follow these steps:
</p><p>
  Step 1)
</p><p>
  Open the menu for additional options. Select 'Settings'
</p><p>
  Step 2)
</p><p>
  From the Keyman Settings menu, select 'Installed languages'
</p><p>
  <img id="settings-languages-ap" src="<?= cdn("img/app/12.0/settings-languages-ap.png")?>">
</p><p>
  Step 3)
</p><p>
  From the 'Installed languages' menu, select the language for the keyboard you want to remove.
</p><p>
  <img id="settings-two-installed-languages-ap" src="<?= cdn("img/app/12.0/settings-two-installed-languages-ap.png")?>">
</p><p>
  Step 4)
</p><p>
  The language Settings menu lists currently installed keyboards associated with the language.
  Select the keyboard you want to uninstall
</p><p>
  <img id="khmer-settings-ap" src="<?= cdn("img/app/12.0/khmer-settings-ap.png")?>">
</p><p>
  Step 5)
</p><p>
  The bottom of the keyboard settings menu displays an option to uninstall the keyboard.
  Select 'Uninstall keyboard' to get a prompt to delete the keyboard.
</p><p>
  Note: the default 'SIL EuroLatin' keyboard for English cannot be removed.
</p><p>
  <img id="settings-khmer-info-ap" src="<?= cdn("img/app/12.0/settings-khmer-info-ap.png")?>">
</p><p>
  Step 6)
</p><p>
  Press "Delete" to uninstall the keyboard.
</p><p>
  <img id="confirm-khmer-delete-ap" src="<?= cdn("img/app/12.0/confirm-khmer-delete-ap.png")?>">
</p><p>
  You'll see a notification when the keyboard is deleted.
</p><p>
  <img class="phone" id="uninstall-notification-ap" src="<?= cdn("img/app/12.0/uninstall-notification-ap.png")?>">
  <img class="tablet" id="uninstall-notification-at" src="<?= cdn("img/app/12.0/uninstall-notification-at.png")?>">
</p>

<?php
include('./_shared/help_links.php');
?>
