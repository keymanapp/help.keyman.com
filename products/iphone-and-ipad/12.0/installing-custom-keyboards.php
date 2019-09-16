<?php
  require_once('includes/template.php');
  require_once('includes/session.php');
  
  head([
    'title' => 'Installing Custom Keyboards - Keyman for iPhone and iPad Help',
//    'css' => ['template.css','app-info.css'],
      'css' => ['template.css','keyboard.css','keys.css'],

    'embedded' => $embed_ios
  ]);
?>

<?php
  $titlePrefix = $embed_ios ? "" : "Keyman for iPhone and iPad:  ";
?>
<h2><?=$titlePrefix?>Installing Custom Keyboards</h2>

<h3>Find the File</h3>
<p>
  If downloading a custom keyboard from the internet, click the link to your custom keyboard package file.
</p>
<p>
  For this example, we'll install a custom keyboard from a link in Safari.  Our example keyboard is for the GFF Amharic 7 keyboard.
</p>
<p>
  <img src="<?= cdn('img/app/12.0/dist-url-screen-i.png')?>">
</p>
<p>
  Safari will display an option to open the KMP file with Keyman.<br/>
</p>
<p>
  Installation is also possible from email clients and other sources.
  Once you find the file, look for an <span class="command">Open in "Keyman"</span> option.
</p>
<p>
  <img src="<?= cdn('img/app/12.0/dist-kmp-open-i.png')?>">
</p>
<p>
  Click <span class="command">Open in "Keyman"</span> to continue.
</p>
<h3>Installing the Package</h3>
<p>
  Keyman for iPhone and iPad will parse the metadata in the package. Some packages include documentation that will be
  displayed at this time.
</p>
<p>
  <img src="<?= cdn('img/app/12.0/dist-welcome-i.png')?>">
</p>
<p>
  Click the <span class="command">"Install"</span> button at the top right.
</p>
<p>
The keyboard from the keyboard package will then be successfully installed!
</p>
<p>
  <img src="<?= cdn('img/app/12.0/dist-kmp-success-i.png')?>">
</p>
<p>
  All the keyboards in the package are installed as a group. In this example, the package only has the "GFF Amharic 7"
  keyboard, so it becomes the active keyboard.
</p>
<p>
  <img src="<?= cdn('img/app/12.0/dist-install1-i.png')?>">
</p>

<p>
  To learn how to create a custom installable keyboard, <a href="http://help.keyman.com/developer/12.0/guides/distribute/">click here</a>.
</p>

<h2>Help Index</h2>

<?php
$indexName = $embed_ios ? "Getting Started" : "Keyman for iPhone and iPad help home";
?>

<ul>
  <li><a href='index.php<?=$session_query_q?>'><?=$indexName?></a></li>
  <li><a href='installing-keyboards.php<?=$session_query_q?>'>Installing keyboards</a></li>
  <li><a href='switching-between-keyboards.php<?=$session_query_q?>'>Switching between keyboards</a></li>
  <li><a href='uninstalling-keyboards.php<?=$session_query_q?>'>Uninstalling keyboards</a></li>
  <li><a href='installing-custom-keyboards.php<?=$session_query_q?>'>Installing custom keyboards</a></li>
  <li><a href='installing-system-keyboard.php<?=$session_query_q?>'>Installing the Keyman System Keyboard</a></li>
  <li><a href='installing-fonts.php<?=$session_query_q?>'>Installing fonts</a></li>
  <li><a href='using-keyman-browser.php<?=$session_query_q?>'>Using the Keyman Browser</a></li>
</ul>
