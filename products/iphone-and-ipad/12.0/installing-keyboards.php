<?php
  require_once('includes/template.php');
  require_once('includes/session.php');
  
  head([
    'title' => 'Adding keyboards - Keyman for iPhone and iPad Help',
//    'css' => ['template.css','app-info.css'],
      'css' => ['template.css','keyboard.css','keys.css'],

    'embedded' => $embed_ios
  ]);
?>

<?php
$titlePrefix = $embed_ios ? "" : "Keyman for iPhone and iPad:  ";
?>
<h2><?=$titlePrefix?>Adding Keyboards</h2>

<p>
   To install resources for use with a new language, follow these steps.
</p>
  <h3>Access "Installed Languages"</h3>
  <p>First, open the "Settings" menu.</p>
  <p>
  <img src="<?php echo cdn("img/app/12.0/add-keyboard-i.png") ?>" />
  </p>
  <p>
  The "Installed Languages" menu found here manages your installed keyboards and dictionaries.
  </p>
  <p>
  <img src="<?php echo cdn("img/app/12.0/add-keyboard-i2.png") ?>" />
  </p>
  <p>You should then see the following screen:</p>
  <p>
  <img src="<?php echo cdn("img/app/12.0/add-keyboard-i3.png") ?>" />
  </p>

  <h3>Finding Your Keyboard</h3>
  <p>Click the <span class="command">+</span> at the top-right to open the keyboard catalog.</p>
  <p>
    <img src="<?php echo cdn("img/app/12.0/add-keyboard-i4.png") ?>" />
  </p>
  <p>From there, select the language and keyboard you want to install.</p>
  <p>A list of all available languages will appear. Scroll through this list until you find the language you want to install. Some languages may have multiple keyboards - for example we have 10 different Tamil keyboards.</p>
  <p>A popup will then ask for confirmation.  Hit the <span class="command">Download</span> button.</p>
  <p>
    <img src="<?php echo cdn("img/app/12.0/add-keyboard-i5.png") ?>" />
  </p>
  <p>The new keyboard will then be installed and available for use.</p>
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