<?php
  require_once('includes/template.php');
  require_once('includes/session-embed.php');
  
  head([
    'title' => 'Installing Custom Keyboards - Keyman for iPhone and iPad Help',
//    'css' => ['template.css','app-info.css'],
      'css' => ['template.css','keyboard.css','keys.css', 'embed.css'],

    'embedded' => $embed_ios
  ]);
?>

<h2><span class="content-online">Keyman for iPhone and iPad:  </span>Sharing Keyboards</h2>

<h3>Sharing the File</h3>
<p>
  If you have installed a custom keyboard or dictionary from a file, Keyman keeps a copy
  of that file on your device.  You can find these copies in the iOS Files app.
</p>
<p>
  <img src="<?= cdn('img/app/13.0/file-share-1i.png')?>">
</p>
<p>
  Simply select the "Keyman" folder to view these files.
</p>
<p>
  <img src="<?= cdn('img/app/13.0/file-share-2i.png')?>">
</p>
<p>
  From here, longpress the file for the keyboard or dictionary you wish to share, then
  click <span class="command">Share</span> to view sharing options.
</p>
<h3>Sharing via QR code</h3>
<p>
  For keyboards and dictionaries downloaded directly through the app,
  you can provide friends with a scannable QR code.  First, find the resource
  through the Settings menu under Installed Languages.
</p>
<p>
  <img src="<?= cdn('img/app/13.0/add-keyboard-i2.png')?>">
</p>
<p>
  <img src="<?= cdn('img/app/13.0/add-keyboard-i3.png')?>">
</p>
<p>
  <img src="<?= cdn('img/app/13.0/qr-code-share-1i.png')?>">
</p>
<p>
  When you select the keyboard, a page like the following should appear:
</p>
<p>
  <img src="<?= cdn('img/app/13.0/qr-code-share-2i.png')?>">
</p>
<p>
  Note that QR codes are only provided for certain keyboards and dictionaries
  at this time.
</p>
<h3>Installing from QR code</h3>
<p>
  To install from QR code, simply launch your device's Camera app and point
  it at the code, as seen below.
</p>
<p>
  <img src="<?= cdn('img/app/13.0/qr-code-share-3i.png')?>">
</p>
<p>
  Selecting the notification seen at the top will lead you to the following page:
</p>
<p>
  <img src="<?= cdn('img/app/13.0/qr-code-share-4i.png')?>">
</p>
<p>
  Select the big <span class="command">Install on iPhone</span> (or
  <span class="command">Install on iPad</span>) option will then download
  the file for easy installation.  (Refer to <a href='installing-custom-keyboards.php'>
    Installing custom keyboards</a> as necessary.)
</p>

<h2>Help Index</h2>

<ul>
  <li class="content-online"><a href='index.php'>Keyman for iPhone and iPad help home</a></li>
  <li class="content-in-app"><a href='index.php'>Getting Started</a></li>
  <li><a href='installing-keyboards.php'>Installing keyboards</a></li>
  <li><a href='switching-between-keyboards.php'>Switching between keyboards</a></li>
  <li><a href='uninstalling-keyboards.php'>Uninstalling keyboards</a></li>
  <li><a href='installing-custom-keyboards.php'>Installing custom keyboards</a></li>
  <li><a href='sharing-keyboards.php'>Sharing keyboards</a></li>
  <li><a href='installing-system-keyboard.php'>Installing the Keyman System Keyboard</a></li>
  <li><a href='installing-fonts.php'>Installing fonts</a></li>
  <li><a href='using-keyman-browser.php'>Using the Keyman Browser</a></li>
</ul>
