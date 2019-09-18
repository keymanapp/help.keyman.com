<?php
  require_once('includes/template.php');
  require_once('includes/session-embed.php');
  
  head([
    'title' => 'Using the Keyman Browser - Keyman for iPhone and iPad Help',
//    'css' => ['template.css','app-info.css'],
      'css' => ['template.css','keyboard.css','keys.css', 'embed.css'],

    'embedded' => $embed_ios
  ]);
?>

<h2><span class="content-online">Keyman for iPhone and iPad:  </span>Using the Keyman Browser</h2>

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

<ul>
  <li class="content-online"><a href='index.php'>Keyman for iPhone and iPad help home</a></li>
  <li class="content-in-app"><a href='index.php'>Getting Started</a></li>
  <li><a href='switching-between-keyboards.php'>Switching between keyboards</a></li>
  <li><a href='uninstalling-keyboards.php'>Uninstalling keyboards</a></li>
  <li><a href='installing-system-keyboard.php'>Installing the Keyman System Keyboard</a></li>
  <li><a href='installing-fonts.php'>Installing fonts</a></li>
  <li><a href='installing-custom-keyboards.php'>Installing custom keyboards</a></li>
  <li><a href='using-keyman-browser.php'>Using the Keyman Browser</a></li>
</ul>
