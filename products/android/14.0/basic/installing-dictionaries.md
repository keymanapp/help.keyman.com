<?php
require_once('includes/template.php');
require_once('includes/session-embed.php');
require_once('includes/session-formfactor.php');

head([
  'title' => 'Adding Dictionaries - Keyman for Android Help',
  'css' => ['template.css', 'app-info-a.css', 'embed.css', 'formfactor.css'],
  'embedded' => $embed_android
]);
?>

<h2>Adding New Dictionaries</h2>

<?php
// We need to condition here.  While CSS selection can affect visibility, it
// won't prevent offlining scripts from following the links and breaking
// the desired mirrored content for offline help.
if(!$embed_android) {
  formFactorSelect();
}
?>

<p>
  Whenever a keyboard is <a href='installing-keyboards.php'>added</a>, the app automatically adds an associated dictionary
  if it's available on keyman.com.
</p><p>
  If you've downloaded a dictionary package to your device, you can <a href='installing-custom-packages.php'>
    install the custom package</a> to add the dictionary.
</p><p>
  If you've already added a keyboard and an associated dictionary later becomes available on keyman.com,
  you can add the dictionary from the Keyman Settings menu by following these steps:
</p><p>
  Step 1)
</p><p>
  From the Keyman Settings menu, select 'Installed languages'
</p><p>
  <img id="settings-languages-ap" src="<?= cdn("img/app/14.0/settings-languages-ap.png")?>">
</p><p>
  Step 2)
</p><p>
  From the 'Installed languages' menu, touch the language for the dictionary you want to add. In this example, we select
  "Straits Salish (Latin)".
</p><p>
  <img id="settings-2-installed-languages-ap" src="<?= cdn("img/app/14.0/settings-2-installed-languages-ap.png")?>">
</p><p>
  Step 3)
</p><p>
  The settings for that language will appear. At the top is the installed keyboard.
  At the bottom, select "Dictionary".
</p><p>
  <img id="settings-str-settings-ap" src="<?= cdn("img/app/14.0/settings-str-settings-ap.png")?>">
</p><p>
  Step 4)
</p><p>
  If there's an available dictionary to add, this page will show it. Installed dictionaries will show a checkmark on the left.
  Select the dictionary name to add it.
</p><p>
  <img id="settings-str-dictionary-ap" src="<?= cdn("img/app/14.0/settings-str-dictionary-ap.png")?>">
</p><p>
  Step 5)
</p><p>
  This will be displayed at the confirmation to install the dictionary package.
</p><p>
  <img id="settings-download-str-dictionary-ap" src="<?= cdn("img/app/14.0/settings-download-str-dictionary-ap.png")?>">
</p><p>
  A notification will appear when the dictionary package is downloading in the background.
</p><p>
  <img id="settings-download-dictionary-background-ap" src="<?= cdn("/img/app/14.0/settings-download-dictionary-background-ap.png")?>">
</p><p>
  Step 6)
</p><p>
  Once the download is complete, you'll see the dictionary-provided suggestions when you have the keyboard active.
</p><p>
  <img id="settings-suggestions-ap" src="<?= cdn("img/app/14.0/settings-suggestions-ap.png")?>">
</p>

<?php
include('./_shared/help_links.php');
?>
