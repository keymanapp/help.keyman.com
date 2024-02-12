<?php /*
  Name:             ui-button
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
  $pagename = 'Using the KeymanWeb Button Interface';
  $pagetitle = 'Button Interface';
  $MainPage = true;

  require_once('header.php');
?>


<div class='body_text'>

<p style='margin-top: 16px'>
KeymanWeb's Button user interface allows multiple keyboards to be integrated into a website and controlled through a single button control.  This button is visible all the time, and so can be incorporated into the site's overall design.
</div>

<div class='body_text'>
<h4>Using the Button Interface to Type in Your Language</h4>
<img src='images/ui-bt-step123.gif' style='width: 670px;' />
</div>

<div class='body_text'>
<h4>Button Control</h4>
<img src="images/ui-bt-control.gif" style='float:left; margin: 4px 8px 4px 4px' />

<p>If the <b>Button Control</b> <i>(left)</i> is visible on a website, this is an indication that KeymanWeb has been set up to allow typing in one or more languages.  The Button Control is usually located above, beside or close to a text box or text area, though this will vary depending on the design and layout of the site.</p>



<img src="images/ui-bt-menu.gif" style='float:left; margin: 4px 8px 4px 4px' />

<p>Moving the mouse point over the Menu Button will display the <b>Keyboard Menu</b> <i>(left)</i>.  This is a list of all the keyboards which have been integrated for use with KeymanWeb on this particular website.</p>

</div>


<div class='body_text'>
<h4>Selecting a Keyboard</h4>
<p>To choose the keyboard or language in which to type, click once on that keyboard's name in the Keyboard Menu.  The name will then be marked in <b>bold</b> text on the menu.  On many sites, you can start typing immediately, while in other cases, you will need to click once inside the text box or text area before beginning to type.</p>
<p>If a website incorporates several keyboards, it is possible to type in more than one language inside a single text box by returning to the Keyboard Menu and selecting a different keyboard.  To return to typing in English or your default language, simply choose 'English' from the Keyboard Menu.</p>
<p>KeymanWeb will only affect the keyboard used in the text box to which it is attached.  If you type text into any other text box or text area, it will continue to appear in your normal language.</p>

</div>


<div class='body_text'>
<h4>On-Screen Keyboard</h4>

<img src="images/ui-osk.gif" style='float:left; margin: 4px 8px 4px 4px'  />

<p>The <a href="osk">On-Screen Keyboard</a> <i>(left)</i> is a dynamic display showing the layout of the keyboard you are using.  At the top of the Keyboard Menu (assuming the On-Screen Keyboard is not already visible) is the item <img src="images/ui-bt-showkb.gif" style='vertical-align: middle' ALT="Show Keyboard"/>.  Clicking on this once will cause the On-Screen Keyboard to appear and change the menu item to <img src="images/ui-bt-hidekb.gif" style='vertical-align: middle' ALT="Hide Keyboard"/>.  This works in reverse if the On-Screen Keyboard is already displayed.</p>

<p>To avoid obscuring the display, the On-Screen Keyboard will not actually be displayed unless you have clicked in a text box which incorporates KeymanWeb. For more information about using the On-Screen Keyboard, <a href="osk">click here</a>.</p>

</div>

<br/>

<?php
 include('footer.php');
?>
