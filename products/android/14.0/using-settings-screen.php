<?php
require_once('includes/template.php');
require_once('includes/session-embed.php');
require_once('includes/session-formfactor.php');

head([
    'title' => 'Using the Settings Screen - Keyman for Android Help',
    'css' => ['template.css', 'app-info-a.css', 'embed.css', 'formfactor.css'],
    'embedded' => $embed_android
]);
?>

<h2>Using the Settings Screen</h2>

<?php
  // We need to condition here.  While CSS selection can affect visibility, it
  // won't prevent offlining scripts from following the links and breaking
  // the desired mirrored content for offline help.
  if(!$embed_android) {
    formFactorSelect();
  }
?>

<p>
  This Settings screen is used to configure keyboards and dictionaries.
  It also has many of the options that are available on the 'Get Started' menu. To access the Settings screen:
</p><p>
  Step 1)
</p><p>
  Open the Keyman app.
</p><p>
  Step 2)
</p><p>
  Click the menu for additional options. Select 'Settings'
</p><p>
  <img class="phone" id="settings-screen-ap" src="<?= cdn("img/app/13.0/settings-screen-ap.png")?>">
  <img class="tablet" id="settings-screen-at" src="<?= cdn("img/app/13.0/settings-screen-at.png")?>">
</p><p>
  Each selection on the Keyman Settings screen is described in further detail below:
</p>

<h2>Installed Languages</h2>
<p>
  This displays the number of installed languages in parentheses (). Click this line for the 'Installed Languages'
  screen where you can <a href="installing-keyboards.php">install new keyboards</a> from the keyman.com catalog.
</p>

<h2>Add Keyboard from Device</h2>
<p>
  Click on this to <a href="installing-custom-packages.php">install custom keyboard and dictionary packages</a>.
</p>

<h2>Enable Keyman as system-wide keyboard</h2>
<p>By default, installed Keyman keyboards are only available to use within the Keyman app. Click on this setting to
bring up the Android system configuration so Keyman can be added as a system-wide keyboard.</p>

<h2>Set Keyman as default keyboard</h2>
<p>Click on this to bring up the Android system configuration for setting Keyman as the default system-wide keyboard.</p>

<h2>Always show banner</h2>
<p>This toggle is reserved for future features. When off, the text suggestion banner is only displayed when
  the dictionary is enabled. The language associated with the keyboard must match the language associated with
  the dictionary.
</p>

<h2>Show "Get Started" on startup</h2>
<p>When enabled, the Keyman app will display the 'Get Started' screen on app startup.
</p>

<?php
include('./_shared/help_links.php');
?>
