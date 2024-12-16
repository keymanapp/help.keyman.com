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

<h2><span class="content-online">Keyman for iPhone and iPad:  </span>Installing Custom Keyboards</h2>

<h3>Download the File</h3>
<p>
  If downloading a custom keyboard from the internet, click the link to your custom keyboard package file.
</p>
<p>
  For this example, we'll install a custom keyboard from a link in Safari.  Our example keyboard is for the GFF Amharic 7 keyboard.
</p>
<p>
  <img src="<?= cdn('img/app/13.0/dist-url-screen-i.png')?>">
</p>
<p>
  Safari will display an option to open the KMP file with Keyman.<br/>
</p>
<p>
  <img src="<?= cdn('img/app/13.0/dist-kmp-open-i.png')?>">
</p>
<p>
  Click <span class="command">Open in "Keyman"</span> to continue.
</p>
<h3>Finding the File (iOS 11+ only)</h3>
<p>
  Installation is also possible from email clients and other sources.
  Once you download the file and save it to your device, look for an
  <span class="command">Open in "Keyman"</span> option or use the
  Install From File option in Keyman seen below.
</p>
<p>
  <img src="<?= cdn('img/app/13.0/add-keyboard-i2.png')?>">
</p>
<p>
  Once this option is selected, a file browser will appear.  By default, it will show the most
  recently downloaded files that can be installed.
</p>
<p>
  <img src="<?= cdn('img/app/13.0/add-keyboard-file-i.png')?>">
</p>
<p>
  If you have difficulty finding the right file, consider using the <span class="command">Browse</span>
  option at the bottom-right.  Once you select it, you should then be greeted with the screen shown in
  the section below.
</p>

<h3>Installing the Package</h3>
<p>
  Either approach seen above will start the installation process.  From there, Keyman
  for iPhone and iPad will parse the metadata in the package. Some packages include
  documentation that will be displayed at this time.
</p>
<p>
  <img src="<?= cdn('img/app/13.0/dist-welcome-i.png')?>">
</p>
<p>
  Click the <span class="command">"Install"</span> button at the top right.
</p>
<p>
The keyboard from the keyboard package will then be successfully installed!
</p>
<p>
  <img src="<?= cdn('img/app/13.0/dist-kmp-success-i.png')?>">
</p>
<p>
  All the keyboards in the package are installed as a group. In this example, the package only has the "GFF Amharic 7"
  keyboard, so it becomes the active keyboard.
</p>
<p>
  <img src="<?= cdn('img/app/13.0/dist-install1-i.png')?>">
</p>

<p>
  To learn how to create a custom installable keyboard, <a href="/developer/13.0/guides/distribute/">click here</a>.
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
