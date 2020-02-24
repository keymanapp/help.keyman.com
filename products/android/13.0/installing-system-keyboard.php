<?php
require_once('includes/template.php');
require_once('includes/session-embed.php');
require_once('includes/session-formfactor.php');

head([
    'title' => 'The System-Wide Keyboard - Keyman for Android Help',
    'css' => ['template.css', 'app-info-a.css', 'embed.css', 'formfactor.css'],
    'embedded' => $embed_android
]);
?>

<h2>Installing System Wide Keyboards</h2>

<?php
  // We need to condition here.  While CSS selection can affect visibility, it
  // won't prevent offlining scripts from following the links and breaking
  // the desired mirrored content for offline help.
  if(!$embed_android) {
    formFactorSelect();
  }
?>

<p>
  Step 1) Open the Keyman app and select the menu for additional options.
  The screenshots below are of a device running Android 9.0 Pie.
</p>
<p>
  <img class="phone" id="settings1-ap" src="<?= cdn("img/app/13.0/settings1-ap.png")?>">
  <img class="tablet" id="settings1-at" src="<?= cdn("img/app/13.0/settings1-at.png")?>">
</p>
<br/>
<p>
  Step 2) Select 'Get Started' and then select 'Enable Keyman as system-wide keyboard'.
</p>
<p>
  <img class="phone" id="settings2-ap" src="<?= cdn("img/app/13.0/settings2-ap.png")?>">
  <img class="tablet" id="settings2-at" src="<?= cdn("img/app/13.0/settings2-at.png")?>">
</p>
<br/>
<p>
  This will open an Android settings screen for 'Available virtual keyboard'.
</p>
<p>
  <img class="phone" id="settings3-ap" src="<?= cdn("img/app/13.0/settings3-ap.png")?>">
  <img class="tablet" id="settings3-at" src="<?= cdn("img/app/13.0/settings3-at.png")?>">
</p>
<br/>
<p>
  Step 3) Enable 'Keyman' as an available virtual keyboard.
  This will bring up two confirmation dialogs.
</p>
<p>
  <img class="phone" id="settings4-ap" src="<?= cdn("img/app/13.0/settings4-ap.png")?>">
  <img class="tablet" id="settings4-at" src="<?= cdn("img/app/13.0/settings4-at.png")?>">
</p>
<br/>
<p>
  <img class="phone" id="settings5-ap" src="<?= cdn("img/app/13.0/settings5-ap.png")?>">
  <img class="tablet" id="settings5-at" src="<?= cdn("img/app/13.0/settings5-at.png")?>">
</p>
<br/>
<p>
  Select 'OK' on both. Now when the on-screen keyboard appears for apps other than Keyman,
  you'll see a keyboard icon at the bottom right.
</p>
<p>
  <img class="phone" id="settings6-ap" src="<?= cdn("img/app/13.0/settings6-ap.png")?>">
  <img class="tablet" id="settings6-at" src="<?= cdn("img/app/13.0/settings6-at.png")?>">
</p>
<br/>
<p>
  Click the keyboard icon whenever you want to change the current system keyboard.
</p>
<p>
  <img class="phone" id="settings7-ap" src="<?= cdn("img/app/13.0/settings7-ap.png")?>">
  <img class="tablet" id="settings7-at" src="<?= cdn("img/app/13.0/settings7-at.png")?>">
</p>

<?php
include('./_shared/help_links.php');
?>
