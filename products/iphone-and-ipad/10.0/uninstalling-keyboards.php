<?php
require_once('includes/template.php');

head([
    'title' => 'Uninstalling Keyboards - Keyman for iPhone and iPad Help',
//    'css' => ['template.css','app-info.css'],
    'css' => ['template.css','keyboard.css','keys.css'],

    'showMenu' => true
]);
?>

<h2>Keyman for iPhone and iPad: Uninstalling Keyboards</h2>
<p>
  To uninstall keyboards, follow these steps:
  <br/><br/>
  Step 1)
  <br/>
  With the keyboard visible, touch the globe key:
  <br/>
  <img src="<?php echo cdn("img/app/10.0/globe.png"); ?>" />
  <br/>
  This will bring up a list of all currently installed languages, with the currently selected keyboard highlighted.
  <img src="<?= cdn('img/app/10.0/uninstall-list-i.png')?>">
  <br/><br/>
  Step 2)
  <br/>
  Swipe left on the keyboard you want to remove. You'll see a button to "Delete"
  <br/>
  <img src="<?= cdn('img/app/10.0/uninstall-delete-i.png')?>">
  <br/><br/>
  Step 3)
  <br/>
  Click the "Delete" button to uninstall the keyboard.
  </br/>
  The keyboard from the keyboard package is successfully uninstalled!
  <br/>
</p>

<ul>
    <li><a href='index.php'>Keyman for iPhone and iPad help home</li></li>
    <li><a href='switching-between-keyboards.php'>Switching between keyboards</a></li>
    <li><a href='uninstalling-keyboards.php'>Uninstalling keyboards</a></li>
    <li><a href='installing-system-keyboard.php'>Installing the Keyman System Keyboard</a></li>
    <li><a href='installing-fonts.php'>Installing fonts</a></li>
    <li><a href='installing-custom-keyboards.php'>Installing custom keyboards</a></li>
    <li><a href='using-keyman-browser.php'>Using the Keyman Browser</a></li>
</ul>
