<?php
  require_once('includes/template.php');
  require_once('includes/session-embed.php');

  head([
    'title' => 'Keyman for iPhone and iPad Help',
    'css' => ['template.css','keyboard.css','keys.css','app-info.css','embed.css'],
    'embedded' => $embed_ios
  ]);
?>

<h2 class="content-in-app">Getting Started</h2>
<h2 class="content-online">Keyman for iPhone and iPad</h2>

<p>
   The Keyman App lets you type in over 600 languages. To get started, here are some helpful hints:
   <table>
       <tr>
         <th colspan="2"><h3>Keyboard Keys <br/>(Keyboard Present)</h3></th>
       </tr>
       <tr>
           <td><img src="<?php echo cdn("img/app/13.0/globe.png"); ?>" /></td>
           <td>Install or select another language/keyboard</td>
       </tr>
       <tr>
           <td><img src="<?php echo cdn("img/app/13.0/hide-keyboard.png"); ?>" /></td>
           <td>Hide the keyboard</td>
       </tr>
       <tr>
           <td><img src="<?php echo cdn("img/app/13.0/backspace.png"); ?>" /></td>
           <td>Backspace</td>
       </tr>
       <tr>
           <td><img src="<?php echo cdn("img/app/13.0/return.png"); ?>" /></td>
           <td>Return</td>
       </tr>
       <tr>
           <td><img src="<?php echo cdn("img/app/13.0/shift.png"); ?>" /></td>
           <td>Shift key. Long press this key to access the CTRL, ALT and CTRL ALT keys (which can access additional
             key layers)</td>
       </tr>
       <tr>
           <td><img src="<?php echo cdn("img/app/13.0/touch-hold.png"); ?>" /></td>
           <td>Keys with a small dot in the top right corner indicate a long press key. Access further functionality
             by long pressing the key</td>
       </tr>
       <tr>
         <th colspan="2"><h3>Toolbar Icons</h3></th>
       </tr>
       <tr>
           <td><img src="<?php echo cdn("img/app/13.0/share.png"); ?>" /></td>
           <td>Share your text via Mail, Text, Facebook or Twitter</td>
       </tr>
       <tr>
           <td><img src="<?php echo cdn("img/app/13.0/browser-icon.png"); ?>" /></td>
           <td>Open the Keyman Browser</td>
       </tr>
       <tr>
           <td><img src="<?php echo cdn("img/app/13.0/menu-icon.png"); ?>" /></td>
           <td>Open the menu for additional options</td>
       </tr>
       <tr>
           <td><img src="<?php echo cdn("img/app/13.0/font-size.png"); ?>" /></td>
           <td>Adjust the font size</td>
       </tr>
       <tr>
           <td><img src="<?php echo cdn("img/app/13.0/delete.png"); ?>" /></td>
           <td>Delete all current text</td>
       </tr>
       <tr>
           <td><img src="<?php echo cdn("img/app/13.0/get-started.png"); ?>" /></td>
           <td>Open the initial setup screen</td>
       </tr>
       <tr>
           <td><img src="<?php echo cdn("img/app/13.0/info.png"); ?>" /></td>
           <td>Load this help page</td>
       </tr>
   </table>
</p>

<h2>Help Index</h2>

<ul>
  <li class="content-in-app">Getting Started</li>
  <li class="content-online">Keyman for iPhone and iPad help home</li>
  <li><a href="installing-keyboards.php">Installing keyboards</a></li>
  <li><a href='switching-between-keyboards.php'>Switching between keyboards</a></li>
  <li><a href='uninstalling-keyboards.php'>Uninstalling keyboards</a></li>
  <li><a href='installing-custom-keyboards.php'>Installing custom keyboards</a></li>
  <li><a href='sharing-keyboards.php'>Sharing keyboards</a></li>
  <li><a href='installing-system-keyboard.php'>Installing the Keyman System Keyboard</a></li>
  <li><a href='installing-fonts.php'>Installing fonts</a></li>
  <li><a href='using-keyman-browser.php'>Using the Keyman Browser</a></li>
</ul>
<h2>Integrate Keyman with your App or Website</h2>
<p>
   If you are interested in learning how Keyman can be integrated into your own app or website, visit <a href="http://www.keyman.com/engine/">www.keyman.com/engine</a>
</p>
<h2>Further Help</h2>
<p>
   For more information on Keyman, visit <a href="http://keyman.com">www.keyman.com</a>
</p>

<div class="content-online">
<h2>Version History</h2>
<p><a href='../version-history'>Full version history</a></p>
</div>