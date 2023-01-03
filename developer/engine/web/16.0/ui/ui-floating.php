<?php /*
  Name:             ui-floating
  Copyright:        Copyright (C) 2005 Tavultesoft Pty Ltd.
  Documentation:    
  Description:      
  Create Date:      18 Sep 2009

  Modified Date:    18 Sep 2009
  Authors:          mcdurdin
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          18 Sep 2009 - mcdurdin - Polish
*/
  $pagename = 'Using the KeymanWeb Floating Interface';
  $pagetitle = 'Using the KeymanWeb Floating Interface';
  $MainPage = true;
  
  require_once('header.php');
?>


<div class='body_text'>

<p style='margin-top: 16px'>
KeymanWeb's Floating user interface provides a straightforward and unobtrusive method of incorporating a range of languages and keyboards into a website.
</div>

<div class='body_text'>
<h4>Using the Floating Interface to Type in Your Language</h4>
<img src='images/ui-fl-step123.gif' style='width: 670px;' />
</div>

<div class='body_text'>
<h4>Control Bar</h4>
<img src="images/ui-fl-control.gif" style='float:left; margin: 4px 8px 4px 4px' />

<p>On a website which uses this KeymanWeb interface to allow typing in one or more languages, the <b>Control Bar</b> <i>(left)</i> will appear when you click in a text box or text area.</p>
<p>The Control Bar will be located either to the right of or below the text box, depending on how the website has been set up, and will disappear when you click on a different part of the website.
</p>

</div>


<div class='body_text'>
<h4>Selecting a Keyboard</h4>
<img src="images/ui-fl-control2.gif" style='float:left; margin: 4px 8px 4px 4px' />
<p>In the centre of the Control Bar is a menu which displays a list of all the keyboards that have been integrated into the website. To choose the keyboard or language in which to type, click once on that keyboard's name in the Keyboard Menu.  The name will then be highlighted on the menu, and you can start typing immediately.</p>
<p>If a website incorporates several keyboards, it is possible to type in more than one language inside a single text box by returning to this menu and selecting a different keyboard.  To return to typing in English or your default language, simply choose 'English' from the menu.</p>
<p>KeymanWeb will only affect the keyboard used in the text box to which it is attached.  If you type text into any other text box or text area, it will continue to appear in your normal language.</p>

</div>


<div class='body_text'>
<h4>On-Screen Keyboard</h4>

<img src="images/ui-osk.gif" style='float:left; margin: 4px 8px 4px 4px'  />
<p>The <a href="osk.php">On-Screen Keyboard</a> <i>(left)</i> is a dynamic display showing the layout of the keyboard you are using.  Clicking on the On-Screen Keyboard icon <img src="images/ui-fl-control3.gif" style='vertical-align:middle' /> on the right side of the Control Bar turns the On-Screen Keyboard on and off. When the On-Screen keyboard is activated, this icon will have a border around it, as shown.  However, to avoid obscuring the display, the On-Screen Keyboard will not actually be displayed unless you have clicked in a text box which incorporates KeymanWeb. For more information about using the On-Screen Keyboard, <a href="osk.php">click here</a>.</p>

</div>

<br/>

<?php
 include('footer.php');
?>
