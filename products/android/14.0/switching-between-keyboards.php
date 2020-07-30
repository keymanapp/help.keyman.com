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
  <img class="phone" id="globe-ap" src="<?= cdn("img/app/14.0/globe-ap.png")?>">
  <img class="tablet" id="globe-at" src="<?= cdn("img/app/14.0/globe-at.png")?>">
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

<?php
include('./_shared/help_links.php');
?>
