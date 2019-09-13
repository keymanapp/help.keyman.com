<?php
  $embedded = isset($_GET["embed"]) ? $_GET["embed"] == "true" : false;

  require_once('includes/template.php');
  
  head([
    'title' => 'Using the Keyman Browser - Keyman for iPhone and iPad Help',
//    'css' => ['template.css','app-info.css'],
      'css' => ['template.css','keyboard.css','keys.css'],

    'showMenu' => true,
    'embedded' => $embedded
  ]);
?>

<?php
$titlePrefix = $embedded ? "" : "Keyman for iPhone and iPad:  ";
?>
<h2><?=$titlePrefix?>Using the Keyman Browser</h2>

<p>
  Step 1) Click the Keyman Browser button in the Keyman app
  <br/>
  Step 2) Enter the URL of a website to visit into the address bar, for example <strong>google.com</strong>  Keyman Browser will load
  the page and detect your language if it is present, and reformat it to show your language instead of square boxes.
  <br/>
  Step 3) Use the bookmark button to save the current page for browsing later.
  <br/>
  Step 4) Use the Globe icon to swap between languages.
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
