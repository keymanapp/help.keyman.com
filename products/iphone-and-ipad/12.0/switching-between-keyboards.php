<?php
  $embedded = isset($_GET["embed"]) ? filter_var($_GET["embed"], FILTER_VALIDATE_BOOLEAN) : false;

  require_once('includes/template.php');
  
  head([
    'title' => 'Switching between keyboards - Keyman for iPhone and iPad Help',
//    'css' => ['template.css','app-info.css'],
      'css' => ['template.css','keyboard.css','keys.css'],

    'showMenu' => true,
    'embedded' => $embedded
  ]);
?>

<?php
$titlePrefix = $embedded ? "" : "Keyman for iPhone and iPad:  ";
?>
<h2><?=$titlePrefix?>Switching between Keyboards</h2>

<p>

   To switch keyboards, follow these steps:
   <br/><br/>
   Step 1)
   <br/>
   With the keyboard visible, touch the globe key:
   <br/>
   <img src="<?php echo cdn("img/app/12.0/globe.png"); ?>" />
   <br/>
   This will bring up a list of all currently installed languages (the default is English USA). If you have already downloaded additional languages, they will appear here. Simply select them and the keyboard will re-appear with the new language.
   <br/><br/>
   If you haven't installed any languages as yet, touch the <span class="command">+</span> button in the top right corner of your screen.
   <br/><br/>
   Step 2)
   <br/>
   A list of all available languages will appear. Scroll through this list until you find the language you want to install. Some languages may have multiple keyboards - for example we have 10 different Tamil keyboards.
   <br/>
   <img src="<?php echo cdn("img/app/12.0/lang-list.png"); ?>" />
   <br/><br/>
   Select the language and keyboard you want to install - a popup will ask for confirmation, hit the <span class="command">Download</span> button.
   <br/>
   <img src="<?php echo cdn("img/app/12.0/confirm-dl.png"); ?>" />
   <br/><br/>
   Step 3)
   <br/>
   Once the download is complete, the new keyboard will be selected. Touch the <span class="command">Done</span> button on the top right corner of your screen and the new keyboard will appear.
   <br/>
   <img src="<?php echo cdn("img/app/12.0/dl-success.png"); ?>" />
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