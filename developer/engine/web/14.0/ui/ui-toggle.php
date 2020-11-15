<?php /*
  Name:             ui-toggle
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
  $pagename = 'Using the KeymanWeb Toggle Interface';
  $pagetitle = 'Using the KeymanWeb Toggle Interface';
  $MainPage = true;
  
  require_once('header.php');
?>


<div class='body_text'>

<p style='margin-top: 16px'>
KeymanWeb's Toggle user interface is designed to provide a simple and unobtrusive way of incorporating a single keyboard into a website.</p>
</div>

<div class='body_text'>
<h4>Using the Toggle Interface to Type in Your Language</h4>
<img src='images/ui-tg-step123.gif' style='width: 670px;' />
</div>

<div class='body_text'>
<h4>Toggle Control</h4>
<img src="images/ui-tg-control.gif" style='float:left; margin: 4px 8px 4px 4px' />

<p>When you click in a text box (or text area) on the website, the <b>Toggle Control</b> <i>(left)</i> appears on the right of the box, indicating that it is possible to type in another language.</p>

<br/>

<img src="images/ui-tg-controlz2.gif" style='float:left; margin: 4px 8px 4px 4px' />

<p>Hovering the mouse pointer over the KeymanWeb icon on the left-hand side of the Toggle control <i>(left)</i> will display the name of the language and keyboard which has been enabled for this site.  Clicking on the icon will turn KeymanWeb on and enable you to type in this language.  When KeymanWeb is active, there will be a solid border around the KeymanWeb icon (as in the image).  To turn KeymanWeb off and return to typing in your default language, simply click on the icon once again.</p>
<p><b><i>Note that clicking in a different text box or text area will not necessarily turn KeymanWeb off; this depends on how the website has been configured.</i></b></p>

</div>


<div class='body_text'>
<h4>On-Screen Keyboard</h4>

<img src="images/ui-osk.gif" style='float:left; margin: 4px 8px 4px 4px'  />

<p>The <a href="osk.php">On-Screen Keyboard</a> <i>(left)</i> is a dynamic display showing the layout of the keyboard you are using.  Clicking on the On-Screen Keyboard icon <img src="images/ui-tg-control3.gif" style='vertical-align:middle' /> on the right side of the Toggle Control turns the On-Screen Keyboard on and off. When the On-Screen keyboard is activated, this icon will have a solid border around it.  However, to avoid obscuring the display, the On-Screen Keyboard will not actually be displayed unless you have clicked in a text box which incorporates KeymanWeb. For more information about using the On-Screen Keyboard, <a href="osk.php">click here</a>.</p>

</div>
<br/>


<?php
 include('footer.php');
?>
