<?php
require_once('includes/template.php');
require_once('includes/session-embed.php');
require_once('includes/session-formfactor.php');

head([
    'title' => 'Installing Custom Keyboards/Dictionaries - Keyman for Android Help',
    'css' => ['template.css', 'app-info-a.css', 'embed.css', 'formfactor.css'],
    'embedded' => $embed_android
]);
?>

<h2>Installing Custom Keyboards/Dictionaries</h2>

<?php
  // We need to condition here.  While CSS selection can affect visibility, it
  // won't prevent offlining scripts from following the links and breaking
  // the desired mirrored content for offline help.
  if(!$embed_android) {
    formFactorSelect();
  }
?>

<p>
  These same steps can be used for installing custom keyboard or custom dictionary packages. This example is for Khmer Angkor keyboard.
</p>

<p>
  Step 1) Click the link to your custom package file.
</p>
<p>
  <img class="phone" id="dist-url-screen-ap" src="<?= cdn('img/app/13.0/dist-url-screen-ap.png')?>">
  <img class="tablet" id="dist-url-screen-at" src="<?= cdn('img/app/13.0/dist-url-screen-at.png')?>">
</p>
<p>
  Step 2) Once the KMP file is on your device, you will need to browse to the KMP file and select it.
  From the Keyman menu, select 'Settings'.
  <br/>
  From the Keyman Settings menu, select 'Add Keyboard from Device'.
</p>
<p><img id="settings-add-keyboard-from-device-ap" src="<?= cdn("img/app/13.0/settings-language-ap.png")?>"></p>
<p>
  The device will launch a file browser where you'll browse to the directory of your KMP file.
  A common place to look is the "Downloads" folder.
</p>
<p>
  <img class="phone" id="dist-file-browser-ap" src="<?= cdn('img/app/13.0/dist-file-browser-ap.png')?>">
  <img class="tablet" id="dist-file-browser-at" src="<?= cdn('img/app/13.0/dist-file-browser-at.png')?>">
</p>
<p>
  Selecting the KMP file should bring you to Step 3)
</p>
<p>
  Step 3) On Android 6.0 (Marshmallow) and higher, mobile apps need to request permissions to access storage. Keyman
  for Android needs access to read storage for installing the KMP file. At the dialog, select "ALLOW". Once authorized,
  Keyman for Android won't need to ask for storage permission again, unless the user revokes or uninstalls the app.
</p>
<p>
  <img class="phone" id="dist-storrage-permission-ap" src="<?= cdn("img/app/13.0/dist-storage-permission-ap.png")?>">
  <img class="tablet" id="dist-storrage-permission-at" src="<?= cdn("img/app/13.0/dist-storage-permission-at.png")?>">
</p>
<p>
  Older versions of Android grant Storage permissions at app installation time, so those users can skip this step.
</p>
<p>
  Step 4) Keyman for Android will parse the metadata in the package. If the keyboard package includes a "welcome.htm"
  file, this will be displayed at the confirmation to install the keyboard package.
</p>
<p>
  <img class="phone" id="dist-welcome-ap" src="<?= cdn("img/app/13.0/dist-welcome-ap.png")?>">
  <img class="tablet" id="dist-welcome-at" src="<?= cdn("img/app/13.0/dist-welcome-at.png")?>">
</p>
<p>
  If "welcome.htm" is not included, a generic page with the package ID and package version will be shown. Click the
  left "Install" button to install the entire keyboard package.
</p>
<p>
  Step 5) All the keyboards in the package are installed as a group. In this example, the package only has the
  "Khmer Angkor" keyboard, so it becomes the active keyboard. For custom dictionary packages, only one dictionary
  will be installed.
</p>
<p>
  <img class="phone" id="dist-install1-ap" src="<?= cdn("img/app/13.0/dist-install1-ap.png")?>">
  <img class="tablet" id="dist-install1-at" src="<?= cdn("img/app/13.0/dist-install1-at.png")?>">
</p>
<p>
  Once the keyboard has been installed, you should be able to use it as normal.
  <br/>
  To learn how to create a custom installable keyboard,
  <a href="https://help.keyman.com/developer/12.0/guides/distribute/">click here</a>.
</p>

<h2>Granting storage permission</h2>
<p>
  If Keyman for Android is permanently denied storage access, attempts to install custom packages will fail with the
  notification "Storage permission request was denied". Perform these steps to grant Keyman for Android access to storage
</p>
<p>
  Step 1) Go to Android Settings.
  <br/>
  Step 2) Depending on your device, click "Apps", "Apps &amp; notifications", or "App permissions" and grant Keyman
  storage permission. The screenshot below is from Android 9.0 Pie.
</p>
<p>
  <img class="phone" id="keyman-storage-permission-ap" src="<?= cdn("img/app/13.0/keyman-storage-permission-ap.png")?>">
  <img class="tablet" id="keyman-storage-permission-at" src="<?= cdn("img/app/13.0/keyman-storage-permission-at.png")?>">
</p>

<?php
include('./_shared/help_links.php');
?>
