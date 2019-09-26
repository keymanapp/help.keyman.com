<?php
require_once('includes/template.php');
require_once('includes/session-embed.php');
require_once('includes/session-formfactor.php');

head([
    'title' => 'Keyman for Android Help',
    'css' => ['template.css', 'app-info-a.css', 'embed.css', 'formfactor.css'],
    'embedded' => $embed_android
]);
?>

<h2 class="content-in-app">Getting Started</h2>
<h2 class="content-online">Keyman for Android</h2>

<p class="content-online"><a href='../version-history'>Version history</a></p>

<?php
  // We need to condition here.  While CSS selection can affect visibility, it
  // won't prevent offlining scripts from following links and breaking our desired
  // mirrored content for offline help.
  if(!$embed_android) {
    formFactorSelect();
  }
?>

<p>
  Keyman for Android lets you type in over 600 languages on Android mobiles and tablets.
  To get started, here are some helpful hints:
</p>
<table>
  <tr>
    <th colspan="2">Keyboard Keys <br/>(Keyboard Present)</th>
  </tr>
  <tr>
    <td>
      <img class="phone" id="install-keyboard-ap" src="<?= cdn("img/app/12.0/globe-ap.png"); ?>"/>
      <img class="tablet" id="install-keyboard-at" src="<?= cdn("img/app/12.0/globe-at.png"); ?>"/>
    </td>
    <td>Select another language/keyboard</td>
  </tr>
  <tr>
    <td>
      <img class="phone" id="hide-keyboard-ap" src="<?= cdn("img/app/12.0/hide-keyboard-ap.png"); ?>"/>
      <img class="tablet" id="hide-keyboard-at" src="<?= cdn("img/app/12.0/hide-keyboard-at.png"); ?>"/>
    </td>
    <td>Hide the keyboard</td>
  </tr>
  <tr>
    <td>
      <img class="phone" id="backspace-ap" src="<?= cdn("img/app/12.0/backspace-ap.png"); ?>"/>
      <img class="tablet" id="backspace-at" src="<?= cdn("img/app/12.0/backspace-at.png"); ?>"/>
    </td>
    <td>Backspace</td>
  </tr>
  <tr>
    <td>
      <img class="phone" id="return-ap" src="<?= cdn("img/app/12.0/return-ap.png"); ?>"/>
      <img class="tablet" id="return-at" src="<?= cdn("img/app/12.0/return-at.png"); ?>"/>
    </td>
    <td>Return</td>
  </tr>
  <tr>
    <td>
      <img class="phone" id="shift-ap" src="<?= cdn("img/app/12.0/shift-ap.png"); ?>"/>
      <img class="tablet" id="shift-at" src="<?= cdn("img/app/12.0/shift-at.png"); ?>"/>
    </td>
    <td>Shift key. Long press this key to access the CTRL, ALT and CTRL ALT keys
      (which can access additional key layers)
    </td>
  </tr>
  <tr>
    <td>
      <img class="phone" id="touch-hold-ap" src="<?= cdn("img/app/12.0/touch-hold-ap.png"); ?>"/>
      <img class="tablet" id="touch-hold-at" src="<?= cdn("img/app/12.0/touch-hold-at.png"); ?>"/>
    </td>
    <td>Keys with a small dot in the top right corner indicate a long press key. Access
      further functionality by long pressing the key
    </td>
  </tr>
  <tr>
    <th colspan="2" id="toolbar-ap">Toolbar Icons</th>
  </tr>
  <tr>
    <td><img id="share-ap" src="<?= cdn("img/app/12.0/share-a.png"); ?>"/></td>
    <td>Share your text via Mail, Text, or Twitter</td>
  </tr>
  <tr>
    <td><img id="browser-ap" src="<?= cdn("img/app/12.0/browser-a.png"); ?>"/></td>
    <td>Open the Keyman Browser to use the web in your language</td>
  </tr>
  <tr>
    <td><img id="menu-ap" src="<?= cdn("img/app/12.0/menu-icon-a.png"); ?>"/></td>
    <td>Open the menu for additional options</td>
  </tr>
  <tr>
    <td><img id="font-size-ap" src="<?= cdn("img/app/12.0/font-size-a.png"); ?>"/></td>
    <td>Adjust the font size</td>
  </tr>
  <tr>
    <td><img id="delete-ap" src="<?= cdn("img/app/12.0/delete-a.png"); ?>"/></td>
    <td>Delete all current text</td>
  </tr>
  <tr>
    <td><img id="info-ap" src="<?= cdn("img/app/12.0/info-a.png"); ?>"/></td>
    <td>Load this help page</td>
  </tr>
  <tr>
    <td><img id="get-started-ap" src="<?= cdn("img/app/12.0/get-started-a.png"); ?>"/></td>
    <td>Open the initial setup screen</td>
  </tr>
  <tr>
    <td><img id="settings-ap" src="<?= cdn("img/app/12.0/settings-a.png"); ?>"/></td>
    <td>Open the Keyman Settings screen</td>
  </tr>
</table>

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






<h2>Removing a Keyboard</h2>
<p>
  To uninstall a keyboard, follow these steps:
  <br/><br/>
  Step 1)
  <br/>
  Open the menu for additional options. Select 'Settings'
  <br/><br/>
  Step 2)
  <br/>
  From the Keyman Settings menu, select 'Installed languages'
  <br/>
  <img id="settings-languages-ap" src="<?= cdn("img/app/12.0/settings-languages-ap.png"); ?>" />
  <br/><br/>
  Step 3)
  From the 'Installed languages' menu, select the language for the keyboard you want to remove.
  <br/>
  <img id="settings-two-installed-languages-ap" src="<?= cdn("img/app/12.0/settings-two-installed-languages-ap.png"); ?>" />
  <br/><br/>
  Step 4) The language Settings menu lists currently installed keyboards associated with the language.
  Select the keyboard you want to uninstall
  <br/>
  <img id="khmer-settings-ap" src="<?= cdn("img/app/12.0/khmer-settings-ap.png"); ?>" />
  <br/><br/>
  Step 5)
  <br/>
  The bottom of the keyboard settings menu displays an option to uninstall the keyboard.
  Select 'Uninstall keyboard' to get a prompt to delete the keyboard.
  <br/>
  Note: the default 'SIL EuroLatin' keyboard for English cannot be removed.
  <br/>
  <img id="settings-khmer-info-ap" src="<?= cdn("img/app/12.0/settings-khmer-info-ap.png"); ?>"/>
  <br/><br/>
  Step 6)
  Press "Delete" to uninstall the keyboard.
  <br/>
  <img id="confirm-khmer-delete-ap" src="<?= cdn("img/app/12.0/confirm-khmer-delete-ap.png"); ?>"/>
  <br/>
  You'll see a notification when the keyboard is deleted.
  <br/>
  <img class="phone" id="uninstall-notification-ap" src="<?= cdn("img/app/12.0/uninstall-notification-ap.png"); ?>"/>
  <img class="tablet" id="uninstall-notification-at" src="<?= cdn("img/app/12.0/uninstall-notification-at.png"); ?>"/>
</p>

<h2>Accessing Keyboard Help</h2>
<p>
  Step 1) Open the keyboard list by touching the globe key.
</p>
<p>
  <img class="phone" id="keyboard-help1-ap" src="<?= cdn("img/app/12.0/globe-ap.png"); ?>"/>
  <img class="tablet" id="keyboard-help1-at" src="<?= cdn("img/app/12.0/globe-at.png"); ?>"/>
</p>
<br/>
<p>
  Step 2) Touch the info icon for your keyboard.
</p>
<p><img id="keyboard-help2-ap" src="<?= cdn("img/app/12.0/info-a-gray.png"); ?>"/></p>
<br/>

<h2>Installing System Wide Keyboards</h2>
<p>
  Step 1) Open the Keyman app and select the menu for additional options.
  The screenshots below are of a device running Android 9.0 Pie.
</p>
<p>
  <img class="phone" id="settings1-ap" src="<?= cdn("img/app/12.0/settings1-ap.png"); ?>"/>
  <img class="tablet" id="settings1-at" src="<?= cdn("img/app/12.0/settings1-at.png"); ?>"/>
</p>
<br/>
<p>
  Step 2) Select 'Get Started' and then select 'Enable Keyman as system-wide keyboard'.
</p>
<p>
  <img class="phone" id="settings2-ap" src="<?= cdn("img/app/12.0/settings2-ap.png"); ?>"/>
  <img class="tablet" id="settings2-at" src="<?= cdn("img/app/12.0/settings2-at.png"); ?>"/>
</p>
<br/>
<p>
  This will open an Android settings screen for 'Available virtual keyboard'.
</p>
<p>
  <img class="phone" id="settings3-ap" src="<?= cdn("img/app/12.0/settings3-ap.png"); ?>"/>
  <img class="tablet" id="settings3-at" src="<?= cdn("img/app/12.0/settings3-at.png"); ?>"/>
</p>
<br/>
<p>
  Step 3) Enable 'Keyman' as an available virtual keyboard.
  This will bring up two confirmation dialogs.
</p>
<p>
  <img class="phone" id="settings4-ap" src="<?= cdn("img/app/12.0/settings4-ap.png"); ?>"/>
  <img class="tablet" id="settings4-at" src="<?= cdn("img/app/12.0/settings4-at.png"); ?>"/>
</p>
<br/>
<p>
  <img class="phone" id="settings5-ap" src="<?= cdn("img/app/12.0/settings5-ap.png"); ?>"/>
  <img class="tablet" id="settings5-at" src="<?= cdn("img/app/12.0/settings5-at.png"); ?>"/>
</p>
<br/>
<p>
  Select 'OK' on both. Now when the on-screen keyboard appears for apps other than Keyman,
  you'll see a keyboard icon at the bottom right.
</p>
<p>
  <img class="phone" id="settings6-ap" src="<?= cdn("img/app/12.0/settings6-ap.png"); ?>"/>
  <img class="tablet" id="settings6-at" src="<?= cdn("img/app/12.0/settings6-at.png"); ?>"/>
</p>
<br/>
<p>
  Click the keyboard icon whenever you want to change the current system keyboard.
</p>
<p>
  <img class="phone" id="settings7-ap" src="<?= cdn("img/app/12.0/settings7-ap.png"); ?>"/>
  <img class="tablet" id="settings7-at" src="<?= cdn("img/app/12.0/settings7-at.png"); ?>"/>
</p>
<br/><br/>

<h2>Installing Custom Keyboards</h2>
<p>
  Step 1) Click the link to your custom keyboard package file. The link in this example is for Khmer Angkor keyboard.
</p>
<p>
  <img class="phone" id="dist-url-screen-ap" src="<?= cdn('img/app/12.0/dist-url-screen-ap.png')?>">
  <img class="tablet" id="dist-url-screen-at" src="<?= cdn('img/app/12.0/dist-url-screen-at.png')?>">
</p>
<p>
  Step 2) Once the KMP file is on your device, you will need to browse to the KMP file and select it.
  From the Keyman menu, select 'Settings'.
  <br/>
  From the Keyman Settings menu, select 'Add Keyboard from Device'.
</p>
<p><img id="settings-add-keyboard-from-device-ap" src="<?= cdn("img/app/12.0/settings-language-ap.png"); ?>" /></p>
<p>
  The device will launch a file browser where you'll browse to the directory of your KMP file.
  A common place to look is the "Downloads" folder.
</p>
<p>
  <img class="phone" id="dist-file-browser-ap" src="<?= cdn('img/app/12.0/dist-file-browser-ap.png')?>">
  <img class="tablet" id="dist-file-browser-at" src="<?= cdn('img/app/12.0/dist-file-browser-at.png')?>">
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
  <img class="phone" id="dist-storrage-permission-ap" src="<?= cdn("img/app/12.0/dist-storage-permission-ap.png"); ?>"/>
  <img class="tablet" id="dist-storrage-permission-at" src="<?= cdn("img/app/12.0/dist-storage-permission-at.png"); ?>"/>
</p>
<p>
  Older versions of Android grant Storage permissions at app installation time, so those users can skip this step.
</p>
<p>
  Step 4) Keyman for Android will parse the metadata in the package. If the keyboard package includes a "welcome.htm"
  file, this will be displayed at the confirmation to install the keyboard package.
</p>
<p>
  <img class="phone" id="dist-welcome-ap" src="<?= cdn("img/app/12.0/dist-welcome-ap.png"); ?>"/>
  <img class="tablet" id="dist-welcome-at" src="<?= cdn("img/app/12.0/dist-welcome-at.png"); ?>"/>
</p>
<p>
  If "welcome.htm" is not included, a generic page with the package ID and package version will be shown. Click the
  left "Install" button to install the entire keyboard package.
</p>
<p>
  Step 5) All the keyboards in the package are installed as a group. In this example, the package only has the
  "Khmer Angkor" keyboard, so it becomes the active keyboard.
</p>
<p>
  <img class="phone" id="dist-install1-ap" src="<?= cdn("img/app/12.0/dist-install1-ap.png"); ?>"/>
  <img class="tablet" id="dist-install1-at" src="<?= cdn("img/app/12.0/dist-install1-at.png"); ?>"/>
</p>
<p>
  Once the keyboard has been downloaded, you should be able to use it as normal.
  <br/>
  To learn how to create a custom installable keyboard,
  <a href="https://help.keyman.com/developer/12.0/guides/distribute/">click here</a>.
</p>

<h2>Granting storage permission</h2>
<p>
  If Keyman for Android is permanently denied storage access, attempts to install custom keyboards will fail with the
  notification "Storage permission request was denied". Perform these steps to grant Keyman for Android access to storage
</p>
<p>
  Step 1) Go to Android Settings.
  <br/>
  Step 2) Depending on your device, click "Apps", "Apps &amp; notifications", or "App permissions" and grant Keyman
  storage permission. The screenshot below is from Android 9.0 Pie.
</p>
<p>
  <img class="phone" id="keyman-storage-permission-ap" src="<?= cdn("img/app/12.0/keyman-storage-permission-ap.png"); ?>"/>
  <img class="tablet" id="keyman-storage-permission-at" src="<?= cdn("img/app/12.0/keyman-storage-permission-at.png"); ?>"/>
</p>

<h2>Use the Keyman Browser</h2>
<p>
  Step 1) Click the Keyman Browser button in the Keyman app
  <br/>
  Step 2) Enter the URL of a website to visit into the address bar, for example <strong>google.com</strong>.
  Keyman Browser will load the page and detect your language if it is present, and reformat it to show your
  language instead of square boxes.
  <br/>
  Step 3) Use the bookmark button to save the current page for browsing later.
  <br/>
  Step 4) Use the Globe icon to swap between languages.
</p>

<h2>Integrate Keyman with your App or Website</h2>
<p>
  If you are interested in learning how Keyman can be integrated into your own app or
  website, visit <a href="https://keyman.com/engine/">keyman.com/engine</a>
</p>

<h2>Further Help</h2>
<p>
  For more information on Keyman, visit <a href="https://keyman.com">keyman.com</a>
  <br/><br/>
  For more information on Keyman for Android, visit <a href="https://keyman.com/android">keyman.com/android</a>
</p>

<div class="content-online">
  <h2>Keyman for Android Documentation Versions</h2>

  <ul>
    <li><a href='../12.0/'>Keyman for Android 12.0 Documentation</a></li>
    <li><a href='../11.0/'>Keyman for Android 11.0 Documentation</a></li>
    <li><a href='../10.0/'>Keyman for Android 10.0 Documentation</a></li>
    <li><a href='../2.0/'>Keyman for Android 2.0 Documentation</a></li>
  </ul>
</div>
