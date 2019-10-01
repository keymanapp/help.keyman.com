<?php
require_once('includes/template.php');
require_once('includes/session-embed.php');
require_once('includes/session-formfactor.php');

head([
    'title' => 'Removing Dictionaries - Keyman for Android Help',
    'css' => ['template.css', 'app-info-a.css', 'embed.css', 'formfactor.css'],
    'embedded' => $embed_android
]);
?>

<h2>Removing a Dictionary</h2>

<?php
  // We need to condition here.  While CSS selection can affect visibility, it
  // won't prevent offlining scripts from following the links and breaking
  // the desired mirrored content for offline help.
  if(!$embed_android) {
    formFactorSelect();
  }
?>

<p>
  To uninstall a dictionary, follow these steps:
</p>

<p>
  Step 1)
</p>
<p>
  Open the menu for additional options. Select 'Settings'
</p>
<p>
  Step 2)
</p>
<p>
  From the Keyman Settings menu, select 'Installed languages'
</p>
<p>
  <img id="settings-languages-ap" src="<?= cdn("img/app/12.0/settings-languages-ap.png")?>">
</p>
<p>
  Step 3)
</p>
<p>
  From the 'Installed languages' menu, select the language for the dictionary you want to remove. In this example,
  we will be removing the "MTNT Dictionary" for the English language.
</p>
<p>
  <img id="settings-two-installed-languages-ap" src="<?= cdn("img/app/12.0/settings-two-installed-languages-ap.png")?>">
</p>
<p>
  Step 4)
</p>
<p>
  The language Settings menu lists currently installed keyboards and dictionaries associated with the language.
  Select the dictionary you want to uninstall at the bottom of the page.
</p>
<p>
  <img id="english-settings-ap" src="<?= cdn("img/app/12.0/english-settings-ap.png")?>">
</p>
<p>
  Step 5)
</p>
<p>
  The dictionaries menu displays the dictionaries that are available for a language. Installed dictionaries show a check mark.
  Select the dictionary to display the info menu.
</p>
<p>
  <img id="english-dictionaries-ap" src="<?= cdn("img/app/12.0/english-dictionaries-ap.png")?>">
</p>
<p>
  Step 6)
</p>
<p>
  The bottom of the dictionary settings menu displays an option to uninstall the dictionary.
  Select 'Uninstall dictionary' to get a prompt to delete the dictionary.
</p>
<p>
  <img id="english-dictionary-info-ap" src="<?= cdn("img/app/12.0/english-dictionary-info-ap.png")?>">
</p>
<p>
  Step 7)
</p>
<p>
  Press "Delete" to uninstall the dictionary.
</p>
<p>
  <img id="confirm-english-dictionary-delete-ap" src="<?= cdn("img/app/12.0/confirm-english-dictionary-delete-ap.png")?>">
</p>
<p>
  You'll see a notification when the dictionary is deleted.
</p><p>
  <img class="phone" id="uninstall-dictionary-notification-ap" src="<?= cdn("img/app/12.0/uninstall-dictionary-notification-ap.png")?>">
  <img class="tablet" id="uninstall-dictionary-notification-ap" src="<?= cdn("img/app/12.0/uninstall-dictionary-notification-ap.png")?>">
</p>

<?php
include('./_shared/help_links.php');
?>
