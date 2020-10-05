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
  <img id="settings-language-ap" src="<?= cdn("img/app/14.0/settings-language-ap.png")?>">
</p><p>
  Step 3)
</p><p>
  From the 'Installed languages' menu, touch the <span class="command">+</span>
  button in the bottom right corner of your screen.
</p><p>
  <img id="plus-a" src="<?= cdn("img/app/14.0/plus-a.png")?>">
</p><p>
  Step 4)
</p><p>
  A keyboard search page will appear. Type in the search box to look for a keyboard based on: keyboard name,
  language name, or country. To search for a specific BCP 47 language code, use a search <i>l:id:</i>. In this
  example, we search for the word "khmer".
</p><p>
  <img id="khmer-search-a" src="<?= cdn("img/app/14.0/khmer-search-a.png")?>">
</p><p>
  Select a keyboard to show additional information. Click the green button to install.
</p><p>
  <img id="khmer-install-a" src="<?= cdn("img/app/14.0/khmer-install-a.png")?>">
</p><p>
  A notification will appear when the keyboard package is downloading in the background.
</p><p>
  <img id="khmer-downloading-a" src="<?= cdn("/img/app/14.0/khmer-downloading-a.png")?>">
</p><p>
  Step 5)
</p><p>
  Once the download is complete, you'll see 2 or 3 step process to install the new keyboard package.<br>
  5a) Display the readme.htm documentation (if the keyboard includes it).<br>
</p><p>
  <img id="khmer-readme-a" src="<?= cdn("img/app/14.0/khmer-readme-a.png")?>">
</p><p>
  5b) If the keyboard supports multiple languages, select languages to install. When a keyboard
  package only lists one language (khmer_angkor only lists km: Central Khmer),
  the installer proceeds to the next step.<br>
  5c) Display the welcome.htm documentation.
</p><p>
  <img id="khmer-welcome-a" src="<?= cdn("img/app/14.0/khmer-welcome-a.png")?>">
</p><p>
  After the new keyboard is installed, it will become active.
</p><p>
  <img class="phone" id="success-ap" src="<?= cdn("img/app/14.0/dl-success-ap.png")?>">
  <img class="tablet" id="success-at" src="<?= cdn("img/app/14.0/dl-success-at.png")?>">
</p>

<?php
include('./_shared/help_links.php');
?>
