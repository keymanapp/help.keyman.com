<?php
require_once('includes/template.php');

head([
    'title' => 'Keyman for Android Help',
    'css' => ['template.css', 'app-info-a.css']
]);
?>

<h2>Keyman for Android</h2>

<p><a href='../version-history'>Version history</a></p>

<!-- Content below this copied into the Keyman Android info.html -->

<div id="android-tab-header">
  <div id="android-mobile-header">
    <h4>Phone</h4>
  </div>
  <div class="selected-tab" id="android-tablet-header">
    <h4>Tablet</h4>
  </div>
</div>
<div class="tab" id="android-mobile-tab">
  <p>
    Keyman for Android lets you type in over 600 languages on Android mobiles and tablets.
    To get started, here are some helpful hints:
  </p>
  <table>
    <tr>
      <th colspan="2">Keyboard Keys <br/>(Keyboard Present)</th>
    </tr>
    <tr>
      <td><img id="install-keyboard-ap" src="<?php echo cdn("img/app/10.0/globe-ap.png"); ?>"/></td>
      <td>Install or select another language/keyboard</td>
    </tr>
    <tr>
      <td><img id="hide-keyboard-ap" src="<?php echo cdn("img/app/10.0/hide-keyboard-ap.png"); ?>"/></td>
      <td>Hide the keyboard</td>
    </tr>
    <tr>
      <td><img id="backspace-ap" src="<?php echo cdn("img/app/10.0/backspace-ap.png"); ?>"/></td>
      <td>Backspace</td>
    </tr>
    <tr>
      <td><img id="return-ap" src="<?php echo cdn("img/app/10.0/return-ap.png"); ?>"/></td>
      <td>Return</td>
    </tr>
    <tr>
      <td><img id="shift-ap" src="<?php echo cdn("img/app/10.0/shift-ap.png"); ?>"/></td>
      <td>Shift key. Long press this key to access the CTRL, ALT and CTRL ALT keys
        (which can access additional key layers)
      </td>
    </tr>
    <tr>
      <td><img id="touch-hold-ap" src="<?php echo cdn("img/app/10.0/touch-hold-ap.png"); ?>"/></td>
      <td>Keys with a small dot in the top right corner indicate a long press key. Access
        further functionality by long pressing the key
      </td>
    </tr>
    <tr>
      <th colspan="2" id="toolbar-ap">Toolbar Icons</th>
    </tr>
    <tr>
      <td><img id="share-ap" src="<?php echo cdn("img/app/10.0/share-a.png"); ?>"/></td>
      <td>Share your text via Mail, Text, or Twitter</td>
    </tr>
    <tr>
      <td><img id="browser-ap" src="<?php echo cdn("img/app/10.0/browser-a.png"); ?>"/></td>
      <td>Open the Keyman Browser to use the web in your language</td>
    </tr>
    <tr>
      <td><img id="menu-ap" src="<?php echo cdn("img/app/10.0/menu-icon-a.png"); ?>"/></td>
      <td>Open the menu for additional options</td>
    </tr>
    <tr>
      <td><img id="font-size-ap" src="<?php echo cdn("img/app/10.0/font-size-a.png"); ?>"/></td>
      <td>Adjust the font size</td>
    </tr>
    <tr>
      <td><img id="delete-ap" src="<?php echo cdn("img/app/10.0/delete-a.png"); ?>"/></td>
      <td>Delete all current text</td>
    </tr>
    <tr>
      <td><img id="info-ap" src="<?php echo cdn("img/app/10.0/info-a.png"); ?>"/></td>
      <td>Load this help page</td>
    </tr>
    <tr>
      <td><img id="get-started-ap" src="<?php echo cdn("img/app/10.0/get-started-a.png"); ?>"/></td>
      <td>Open the initial setup screen</td>
    </tr>
  </table>

  <h2>Switching between Keyboards</h2>
  <p>
    To switch keyboards, follow these steps:
    <br/><br/>
    Step 1)
    <br/>
    With the keyboard visible, touch the globe key:
    <br/>
    <img id="globe-ap" src="<?php echo cdn("img/app/10.0/globe-ap.png"); ?>"/>
    <br/>
    This will bring up a list of all currently installed languages (the default is English
    EuroLatin2). If you have already downloaded additional languages, they will appear here.
    Simply select them and the keyboard will re-appear with the new language.
    <br/><br/>
    If you haven't installed any languages as yet, touch the <span class="command">+</span>
    button in the top right corner of your screen.
    <br/><br/>
    Step 2)
    <br/>
    A list of all available languages will appear. Scroll through this list until you find
    the language you want to install. Some languages may have multiple keyboards - for
    example we have 10+ different Tamil keyboards.
    <br/>
    <img id="lang-list-ap" src="<?php echo cdn("img/app/10.0/lang-list-ap.png"); ?>"/>
    <br/><br/>
    Select the language and keyboard you want to install - a popup will ask for confirmation,
    hit the <span class="command">Download</span> button.
    <br/>
    <img id="confirm-ap" src="<?php echo cdn("img/app/10.0/confirm-dl-a.png"); ?>"/>
    <br/><br/>
    Step 3)
    <br/>
    Once the download is complete, the new keyboard will be selected. Touch the <span
      class="command">Return</span> button on the top left corner of the popup and the new
    keyboard will become active.
    <br/>
    <img id="success-ap" src="<?php echo cdn("img/app/10.0/dl-success-ap.png"); ?>"/>
  </p>

  <h2>Removing a Keyboard</h2>
  <p>
    To uninstall a keyboard, follow these steps:
    <br/><br/>
    Step 1)
    <br/>
    With the keyboard visible, touch the globe key:
    <br/>
    <img id="uninstall-keyboard-ap" src="<?php echo cdn("img/app/10.0/globe-ap.png"); ?>"/>
    <br/><br/>
    Step 2)
    <br/>
    A list of all available languages will appear. Scroll through this list until you find
    the keyboard you want to uninstall
    <br/>
    <img id="uninstall-list-ap" src="<?php echo cdn("img/app/10.0/uninstall-list-a.png"); ?>"/>
    <br/><br/>
    Step 3)
    <br/>
    Long press the keyboard and release to get a prompt to delete the keyboard.
    <br/>
    <img id="uninstall-delete-ap" src="<?php echo cdn("img/app/10.0/uninstall-delete-a.png"); ?>"/>
    <br/><br/>
    Step 4)
    Press "Delete" to uninstall the keyboard. You'll see a notification when the keyboard is deleted.
    <br/>
    <img id="uninstall-notification-ap" src="<?php echo cdn("img/app/10.0/uninstall-notification-a.png"); ?>"/>
  </p>

  <h2>Hotkey</h2>
  <p>
    To switch between languages while using an external keyboard (i.e. a bluetooth keyboard), a quick and easy way is to
    use a hotkey combination. Press and hold 'Ctrl' and then press 'Tab'.
    You should see a list of languages/keyboards. Tap on any available language of your choice.
  </p>

  <h2>Accessing Keyboard Help</h2>
  <p>
    Step 1) Open the keyboard list by touching the globe key.
  </p>
  <p><img id="keyboard-help1-ap" src="<?php echo cdn("img/app/10.0/globe-ap.png"); ?>"/></p>
  <br/>
  <p>
    Step 2) Touch the info icon for your keyboard.
  </p>
  <p><img id="keyboard-help2-ap" src="<?php echo cdn("img/app/10.0/info-ap.png"); ?>"/></p>
  <br/>

  <h2>Installing System Wide Keyboards</h2>
  <p>
    Step 1) Open the Keyman app and select the menu for additional options.
    The screenshots below are of a device running Android 7.1 Nougat.
  </p>
  <p><img id="settings1-ap" src="<?php echo cdn("img/app/10.0/settings1-ap.png"); ?>"/></p>
  <br/>
  <p>
    Step 2) Select 'Get Started' and then select 'Enable Keyman as a system-wide keyboard'.
  </p>
  <p><img id="settings2-ap" src="<?php echo cdn("img/app/10.0/settings2-ap.png"); ?>"/></p>
  <br/>
  <p>
    This will open an Android settings screen for 'Available virtual keyboard'.
  </p>
  <p><img id="settings3-ap" src="<?php echo cdn("img/app/10.0/settings3-ap.png"); ?>"/></p>
  <br/>
  <p>
    Step 3) Enable 'Keyman' as an available virtual keyboard.
    This will bring up two confirmation dialogs.
  </p>
  <p><img id="settings4-ap" src="<?php echo cdn("img/app/10.0/settings4-ap.png"); ?>"/></p>
  <br/>
  <p><img id="settings5-ap" src="<?php echo cdn("img/app/10.0/settings5-ap.png"); ?>"/></p>
  <br/>
  <p>
    Select 'OK' on both. Now when the on-screen keyboard appears for apps other than Keyman,
    you'll see a keyboard icon at the bottom right.
  </p>
  <p><img id="settings6-ap" src="<?php echo cdn("img/app/10.0/settings6-ap.png"); ?>"/></p>
  <br/>
  <p>
    Click the keyboard icon whenever you want to change the current system keyboard.
  </p>
  <p><img id="settings7-ap" src="<?php echo cdn("img/app/10.0/settings7-ap.png"); ?>"/></p>
  <br/><br/>

  <h2>Installing Custom Keyboards</h2>
  <p>
    Step 1) Click the link to your custom keyboard package file. The link in this example is for Khmer Angkor keyboard.
  </p>
  <p><img src="<?= cdn('img/app/10.0/dist-url-screen-ap.png')?>"></p>
  <p>
    Step 2) Browse to the KMP file. Once the KMP file is on your device, you will need to browse to the KMP file and select it.
    If using the Chrome browser, select the Menu, then "Downloads", and select the downloaded KMP file.
  </p>
  <p><img src="<?= cdn('img/app/10.0/dist-downloads-ap.png')?>"></p>
  <p>
    Otherwise, use the "Downloads" or file browser app available on your Android device to select the downloaded KMP file.
    If your default file browser doesn't prompt for Keyman to open the package file, you may need to use a different file
    browser from the Google Play store.
  </p>
  <p><img src="<?= cdn('img/app/10.0/dist-file-browser-ap.png')?>"></p>
  <p>
    Selecting the KMP file should bring you to Step 3)
  </p>
  <p>
    Step 3) On Android 6.0 (Marshmallow) and higher, mobile apps need to request permissions to access storage. Keyman
    for Android needs access to read storage for installing the KMP file. At the dialog, select "ALLOW". Once authorized,
    Keyman for Android won't need to ask for storage permission again, unless the user revokes or uninstalls the app.
  </p>
  <p><img src="<?php echo cdn("img/app/10.0/dist-storage-permission-ap.png"); ?>"/></p>
  <p>
    Older versions of Android grant Storage permissions at app installation time, so those users can skip this step.
  </p>
  <p>
    Step 4) Keyman for Android will parse the metadata in the package. If the keyboard package includes a "welcome.htm"
    file, this will be displayed at the confirmation to install the keyboard package.
  </p>
  <p><img src="<?php echo cdn("img/app/10.0/dist-welcome-ap.png"); ?>"/></p>
  <p>
    If "welcome.htm" is not included, a generic page with the package ID and package version will be shown. Click the
    left "Install" button to install the entire keyboard package.
  </p>
  <p>
    Step 5) All the keyboards in the package are installed as a group. In this example, the package only has the
    "Khmer Angkor" keyboard, so it becomes the active keyboard.
  </p>
  <p><img src="<?php echo cdn("img/app/10.0/dist-install1-ap.png"); ?>"/></p>
  <p>
    Once the keyboard has been downloaded, you should be able to use it as normal.
    <br/>
    To learn how to create a custom installable keyboard,
    <a href="/developer/10.0/guides/distribute/">click here</a>.
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
    storage permission. The screenshot below is from Android 7.1 Nougat.
  </p>
  <p><img src="<?php echo cdn("img/app/10.0/keyman-storage-permission-a.png"); ?>"/></p>

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

  <h2>Keyman for Android Documentation Versions</h2>

  <ul>
    <li><a href='../10.0/'>Keyman for Android 10.0 Documentation</a></li>
    <li><a href='../2.0/'>Keyman for Android 2.0 Documentation</a></li>
  </ul>
</div>

<div class="tab selected-tab" id="android-tablet-tab">
  <p>
    Keyman for Android lets you type in over 600 languages on Android mobiles and tablets.
    To get started, here are some helpful hints:
  </p>
  <table>
    <tr>
      <th colspan="2">Keyboard Keys <br/>(Keyboard Present)</th>
    </tr>
    <tr>
      <td><img id="install-keyboard-at" src="<?php echo cdn("img/app/10.0/globe-at.png"); ?>"/></td>
      <td>Install or select another language/keyboard</td>
    </tr>
    <tr>
      <td><img id="hide-keyboard-at" src="<?php echo cdn("img/app/10.0/hide-keyboard-at.png"); ?>"/></td>
      <td>Hide the keyboard</td>
    </tr>
    <tr>
      <td><img id="backspace-at" src="<?php echo cdn("img/app/10.0/backspace-at.png"); ?>"/></td>
      <td>Backspace</td>
    </tr>
    <tr>
      <td><img id="return-at" src="<?php echo cdn("img/app/10.0/return-at.png"); ?>"/></td>
      <td>Return</td>
    </tr>
    <tr>
      <td><img id="shift-at" src="<?php echo cdn("img/app/10.0/shift-at.png"); ?>"/></td>
      <td>Shift key. Long press this key to access the CTRL, ALT and CTRL ALT keys
        (which can access additional key layers)
      </td>
    </tr>
    <tr>
      <td><img id="touch-hold-at" src="<?php echo cdn("img/app/10.0/touch-hold-at.png"); ?>"/></td>
      <td>Keys with a small dot in the top right corner indicate a long press key. Access
        further functionality by long pressing the key
      </td>
    </tr>
    <tr>
      <th colspan="2" id="toolbar-at">Toolbar Icons</th>
    </tr>
    <tr>
      <td><img id="share-at" src="<?php echo cdn("img/app/10.0/share-a.png"); ?>"/></td>
      <td>Share your text via Mail, Text, or Twitter</td>
    </tr>
    <tr>
      <td><img id="browser-at" src="<?php echo cdn("img/app/10.0/browser-a.png"); ?>"/></td>
      <td>Open the Keyman Browser to use the web in your language</td>
    </tr>
    <tr>
      <td><img id="font-size-at" src="<?php echo cdn("img/app/10.0/font-size-a.png"); ?>"/></td>
      <td>Adjust the font size</td>
    </tr>
    <tr>
      <td><img id="delete-at" src="<?php echo cdn("img/app/10.0/delete-a.png"); ?>"/></td>
      <td>Delete all current text</td>
    </tr>
    <tr>
      <td><img id="info-at" src="<?php echo cdn("img/app/10.0/info-a.png"); ?>"/></td>
      <td>Link to this info page</td>
    </tr>
    <tr>
      <td><img id="get-started-at" src="<?php echo cdn("img/app/10.0/get-started-a.png"); ?>"/></td>
      <td>Open the initial setup screen</td>
    </tr>
  </table>

  <h2>Switching between Keyboards</h2>
  <p>
    To switch keyboards, follow these steps:
    <br/><br/>
    Step 1)
    <br/>
    With the keyboard visible, touch the globe key:
    <br/>
    <img id="globe-at" src="<?php echo cdn("img/app/10.0/globe-at.png"); ?>"/>
    <br/>
    This will bring up a list of all currently installed languages (the default is English EuroLatin2).
    If you have already downloaded additional languages, they will appear here.
    Simply select them and the keyboard will re-appear with the new language.
    <br/><br/>
    If you haven't installed any languages as yet, touch the <span class="command">+</span>
    button in the top right corner of your screen.
    <br/><br/>
    Step 2)
    <br/>
    A list of all available languages will appear.
    Scroll through this list until you find the language you want to install.
    Some languages may have multiple keyboards - for example we have 10+ different Tamil keyboards.
    <br/>
    <img id="lang-list-at" src="<?php echo cdn("img/app/10.0/lang-list-at.png"); ?>"/>
    <br/><br/>
    Select the language and keyboard you want to install - a popup will ask for confirmation, hit the <span
      class="command">Download</span> button.
    <br/>
    <img id="confirm-at" src="<?php echo cdn("img/app/10.0/confirm-dl-a.png"); ?>"/>
    <br/><br/>
    Step 3)
    <br/>
    Once the download is complete, the new keyboard will be selected. Touch the <span
      class="command">Return</span> button on the top left corner of the popup and the new
    keyboard will become active.
    <br/>
    <img id="success-at" src="<?php echo cdn("img/app/10.0/dl-success-at.png"); ?>"/>
  </p>

  <h2>Removing a Keyboard</h2>
  <p>
    To uninstall a keyboard, follow these steps:
    <br/><br/>
    Step 1)
    <br/>
    With the keyboard visible, touch the globe key:
    <br/>
    <img id="uninstall-keyboard-at" src="<?php echo cdn("img/app/10.0/globe-at.png"); ?>"/>
    <br/><br/>
    Step 2)
    <br/>
    A list of all available languages will appear. Scroll through this list until you find
    the keyboard you want to uninstall
    <br/>
    <img id="uninstall-list-at" src="<?php echo cdn("img/app/10.0/uninstall-list-a.png"); ?>"/>
    <br/><br/>
    Step 3)
    <br/>
    Long press the keyboard and release to get a prompt to delete the keyboard.
    <br/>
    <img id="uninstall-delete-at" src="<?php echo cdn("img/app/10.0/uninstall-delete-a.png"); ?>"/>
    <br/><br/>
    Step 4)
    Press "Delete" to uninstall the keyboard. You'll see a notification when the keyboard is deleted.
    <br/>
    <img id="uninstall-notification-at" src="<?php echo cdn("img/app/10.0/uninstall-notification-a.png"); ?>"/>
  </p>

  <h2>Hotkey</h2>
  <p>
    To switch between languages while using an external keyboard (i.e. a bluetooth keyboard), a quick and easy way is to
    use a hotkey combination. Press and hold 'Ctrl' and then press 'Tab'.
    You should see a list of languages/keyboards. Tap on any available language of your choice.
  </p>

  <h2>Accessing Keyboard Help</h2>
  <p>
    Step 1) Open the keyboard list by touching the globe key.
  </p>
  <p><img id="keyboard-help1-at" src="<?php echo cdn("img/app/10.0/globe-at.png"); ?>"/></p>
  <br/>
  <p>
    Step 2) Touch the info icon for your keyboard.
  </p>
  <p><img id="keyboard-help2-at" src="<?php echo cdn("img/app/10.0/info-ap.png"); ?>"/></p>
  <br/>

  <h2>Installing System Wide Keyboards</h2>
  <p>
    Step 1) Open the Keyman app. The screenshots below are of a device running Android 7.1 Nougat.
  </p>
  <p><img id="settings1-at" src="<?php echo cdn("img/app/10.0/settings1-at.png"); ?>"/></p>
  <br/>
  <p>
    Step 2) Select 'Get Started' and then select 'Enable Keyman as a system-wide keyboard'.
  </p>
  <p><img id="settings2-at" src="<?php echo cdn("img/app/10.0/settings2-at.png"); ?>"/></p>
  <br/>
  <p>
    This will open an Android settings screen for 'Available virtual keyboard'.
  </p>
  <p><img id="settings3-at" src="<?php echo cdn("img/app/10.0/settings3-ap.png"); ?>"/></p>
  <br/>
  <p>
    Step 3) Enable 'Keyman' as an available virtual keyboard. This will bring up two confirmation dialogs.
  </p>
  <p><img id="settings4-at" src="<?php echo cdn("img/app/10.0/settings4-ap.png"); ?>"/></p>
  <br/>
  <p><img id="settings5-at" src="<?php echo cdn("img/app/10.0/settings5-ap.png"); ?>"/></p>
  <br/>
  <p>
    Select 'OK' on both. Now when the on-screen keyboard appears for apps other than Keyman, you'll see a keyboard
    icon at the bottom right.
  </p>
  <p><img id="settings6-at" src="<?php echo cdn("img/app/10.0/settings6-at.png"); ?>"/></p>
  <br/>
  <p>
    Click the keyboard icon whenever you want to change the current system keyboard.
  </p>
  <br/><br/>

  <h2>Installing Custom Keyboards</h2>
    <p>
        Step 1) Click the link to your custom keyboard package file. The link in this example is for Khmer Angkor keyboard.
    </p>
    <p><img src="<?= cdn('img/app/10.0/dist-url-screen-at.png')?>"></p>
    <p>
        Step 2) Browse to the KMP file. Once the KMP file is on your device, you will need to browse to the KMP file and select it.
        If using the Chrome browser, select the Menu, then "Downloads", and select the downloaded KMP file.
    </p>
    <p><img src="<?= cdn('img/app/10.0/dist-downloads-at.png')?>"></p>
    <p>
        Otherwise, use the "Downloads" or file browser app available on your Android device to select the downloaded KMP file.
        If your default file browser doesn't prompt for Keyman to open the package file, you may need to use a different file
        browser from the Google Play store.
    </p>
    <p><img src="<?= cdn('img/app/10.0/dist-file-browser-at.png')?>"></p>
    <p>
        Selecting the KMP file should bring you to Step 3)
    </p>
    <p>
        Step 3) On Android 6.0 (Marshmallow) and higher, mobile apps need to request permissions to access storage. Keyman
        for Android needs access to read storage for installing the KMP file. At the dialog, select "ALLOW". Once authorized,
        Keyman for Android won't need to ask for storage permission again, unless the user revokes or uninstalls the app.
    </p>
    <p><img src="<?php echo cdn("img/app/10.0/dist-storage-permission-at.png"); ?>"/></p>
    <p>
        Older versions of Android grant Storage permissions at app installation time, so those users can skip this step.
    </p>
    <p>
        Step 4) Keyman for Android will parse the metadata in the package. If the keyboard package includes a "welcome.htm"
        file, this will be displayed at the confirmation to install the keyboard package.
    </p>
    <p><img src="<?php echo cdn("img/app/10.0/dist-welcome-at.png"); ?>"/></p>
    <p>
        If "welcome.htm" is not included, a generic page with the package ID and package version will be shown. Click the
        left "Install" button to install the entire keyboard package.
    </p>
    <p>
        Step 5) All the keyboards in the package are installed as a group. In this example, the package only has the
        "Khmer Angkor" keyboard, so it becomes the active keyboard.
    </p>
    <p><img src="<?php echo cdn("img/app/10.0/dist-install1-at.png"); ?>"/></p>
    <p>
        Once the keyboard has been downloaded, you should be able to use it as normal.
        <br/>
        To learn how to create a custom installable keyboard,
        <a href="https://help.keyman.com/developer/10.0/guides/distribute/">click here</a>.
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
    storage permission. The screenshot below is from Android 7.1 Nougat.
  </p>
  <p><img src="<?php echo cdn("img/app/10.0/keyman-storage-permission-a.png"); ?>"/></p>

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
    If you are interested in learning how Keyman can be integrated into your own app or website, visit
    <a href="https://keyman.com/engine/">keyman.com/engine</a>
  </p>

  <h2>Further Help</h2>
  <p>
    For more information on Keyman, visit <a href="https://keyman.com">keyman.com</a>
    <br/><br/>
    For more information on Keyman for Android, visit <a href="https://keyman.com/android">keyman.com/android</a>
  </p>
</div>
