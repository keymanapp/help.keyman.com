<?php
$embedded = isset($_GET["embed"]) ? filter_var($_GET["embed"], FILTER_VALIDATE_BOOLEAN) : false;

require_once('includes/template.php');

head([
    'title' => 'Uninstalling Keyboards - Keyman for iPhone and iPad Help',
//    'css' => ['template.css','app-info.css'],
    'css' => ['template.css','keyboard.css','keys.css'],

    'showMenu' => true,
    'embedded' => $embedded
]);
?>

<?php
$titlePrefix = $embedded ? "" : "Keyman for iPhone and iPad:  ";
?>
<h2><?=$titlePrefix?>Uninstalling Keyboards</h2>

<p>
  To uninstall keyboards, follow these steps:
  <br/><br/>
  Step 1)
  <br/>
  With the keyboard visible, touch the globe key:
  <br/>
  <img src="<?php echo cdn("img/app/12.0/globe.png"); ?>" />
  <br/>
  This will bring up a list of all currently installed languages, with the currently selected keyboard highlighted.
  <img src="<?= cdn('img/app/12.0/uninstall-list-i.png')?>">
  <br/><br/>
  Step 2)
  <br/>
  Swipe left on the keyboard you want to remove. You'll see a button to "Delete"
  <br/>
  <img src="<?= cdn('img/app/12.0/uninstall-delete-i.png')?>">
  <br/><br/>
  Step 3)
  <br/>
  Click the "Delete" button to uninstall the keyboard.
  </br/>
  The keyboard from the keyboard package is successfully uninstalled!
  <br/>
</p>

<h2>Help Index</h2>

<?php
$embedQuery = $embedded == true ? "?embed=true" : "";
$indexName = $embedded ? "Getting Started" : "Keyman for iPhone and iPad help home";
?>

<ul>
  <li><a href='index.php<?=$embedQuery?>'><?=$indexName?></a></li>
  <li><a href='switching-between-keyboards.php<?=$embedQuery?>'>Switching between keyboards</a></li>
  <li><a href='uninstalling-keyboards.php<?=$embedQuery?>'>Uninstalling keyboards</a></li>
  <li><a href='installing-system-keyboard.php<?=$embedQuery?>'>Installing the Keyman System Keyboard</a></li>
  <li><a href='installing-fonts.php<?=$embedQuery?>'>Installing fonts</a></li>
  <li><a href='installing-custom-keyboards.php<?=$embedQuery?>'>Installing custom keyboards</a></li>
  <li><a href='using-keyman-browser.php<?=$embedQuery?>'>Using the Keyman Browser</a></li>
</ul>