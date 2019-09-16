<?php
  require_once('includes/template.php');
  require_once('includes/session.php');
  
  head([
    'title' => 'Switching between keyboards - Keyman for iPhone and iPad Help',
//    'css' => ['template.css','app-info.css'],
      'css' => ['template.css','keyboard.css','keys.css'],

    'embedded' => $embed_ios
  ]);
?>

<?php
$titlePrefix = $embed_ios ? "" : "Keyman for iPhone and iPad:  ";
?>
<h2><?=$titlePrefix?>Switching between Keyboards</h2>

<p>
   Keyboard switching is always activated by using the following key:
</p>
 <p>
   <img src="<?php echo cdn("img/app/12.0/globe.png"); ?>" />
 </p>
<p>
  This will bring up a list of all currently installed languages (the default is English USA). If you have already downloaded additional languages, they will appear here. Simply select them and the keyboard will re-appear with the new language.
</p>
<h3>The In-App Menu</h3>
<p>
  <img src="<?php echo cdn("img/app/12.0/in-app-picker-i.png"); ?>" />
</p>
<p>Simply select any keyboard to activate it and return to the previous screen.</p>
<h3>The System Keyboard Menu</h3>
<p>
  <img src="<?php echo cdn("img/app/12.0/system-picker-i.png"); ?>" />
</p>
<p>This menu only displays when the 'globe' key is touched and held.</p>
<p>The "Close Keyman" option will activate the next available non-Keyman system keyboard.</p>
<p>A quick tap on the "globe" key will instead transition to the next available installed keyboard
  without displaying the menu.</p>

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