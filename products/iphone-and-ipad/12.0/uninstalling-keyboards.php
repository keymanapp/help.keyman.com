<?php
require_once('includes/template.php');
require_once('includes/session-embed.php');

head([
    'title' => 'Uninstalling Keyboards - Keyman for iPhone and iPad Help',
//    'css' => ['template.css','app-info.css'],
    'css' => ['template.css','keyboard.css','keys.css', 'embed.css'],

    'embedded' => $embed_ios
]);
?>

<h2><span class="content-online">Keyman for iPhone and iPad:  </span>Uninstalling Keyboards</h2>

<p>
  To uninstall a keyboard, follow these steps.
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

<h3>Removing the Keyboard</h3>
<p>Start by selecting the language for the keyboard you wish to uninstall.</p>
<p>
  <img src="<?php echo cdn("img/app/12.0/delete-keyboard-i.png") ?>" />
</p>
<p>
  Swipe left on the keyboard you want to remove.  You'll see a button to <span class="command">Delete</span>.
</p>
<p>
  <img src="<?php echo cdn("img/app/12.0/delete-keyboard-i2.png") ?>" />
</p>
<p>
  Click the <span class="command">Delete</span> button to uninstall the keyboard.
</p>

<h2>Help Index</h2>

<ul>
  <li class="content-online"><a href='index.php'>Keyman for iPhone and iPad help home</a></li>
  <li class="content-in-app"><a href='index.php'>Getting Started</a></li>
  <li><a href='installing-keyboards.php'>Installing keyboards</a></li>
  <li><a href='switching-between-keyboards.php'>Switching between keyboards</a></li>
  <li><a href='uninstalling-keyboards.php'>Uninstalling keyboards</a></li>
  <li><a href='installing-custom-keyboards.php'>Installing custom keyboards</a></li>
  <li><a href='installing-system-keyboard.php'>Installing the Keyman System Keyboard</a></li>
  <li><a href='installing-fonts.php'>Installing fonts</a></li>
  <li><a href='using-keyman-browser.php'>Using the Keyman Browser</a></li>
</ul>