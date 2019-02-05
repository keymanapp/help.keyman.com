<?php /*
  Name:             ui-toolbar
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
  $pagename = 'Using the KeymanWeb Toolbar Interface';
  $pagetitle = 'Using the KeymanWeb Toolbar Interface';
  $MainPage = true;
  
  require_once('includes/template.php');
  head([
    'title' => $pagetitle
  ]);
?>


<div class='body_text'>
<h3>Toolbar Interface</h3>

<p style='margin-top: 16px'>
KeymanWeb's Toolbar user interface provides a very clear and visible method of incorporating a range of international languages and keyboards into a website.  The toolbar is visible all the time, which makes it suitable for incorporating into a site's overall design.
</div>

<div class='body_text'>
<h4>Using the Toolbar Interface to Type in Your Language</h4>
<img src='images/ui-tb-step123.gif' style='width: 670px;' />
</div>

<div class='body_text'>
<h4>Toolbar</h4>
<img src="images/ui-tb-control.gif" style='float:left; margin: 4px 8px 4px 4px' />

<p>If the <b>Toolbar</b> <i>(left)</i> is visible on a website, this is an indication that KeymanWeb has been set up to allow typing in one or more languages.  The Toolbar is usually located above, inside or close to a text box or text area, though this will vary, depending on the site.</p>

<br/>

</div>


<div class='body_text'>

<img src="images/ui-tb-control2.gif" style='float: right; margin: 4px 4px 4px 8px' />

<h4>Selecting a Keyboard</h4>

<p>To begin typing in a different language, in which to type, click on the <b>Keyboards</b> dropdown menu on the Toolbar.  A world map, divided into regions, will be displayed, with a list of available languages below <i>(right)</i>.  Clicking on each region of the world will update the list so show which languages from that region can be used to type.  Simply click on the name of the language you wish to use.</p>
<p>For languages which have only a single keyboard available, a label giving the name of the selected language will be added to the Toolbar, and you can click in a suitable text box or text area and begin typing with that keyboard.  To return to typing in English or your default language, click on the <img src="images/ui-tb-control5.gif" style='vertical-align: middle' ALT="Off"/> icon near the centre of the Toolbar.</p>
<br/>
<img src="images/ui-tb-control4.gif" style='float:left; margin: 4px 8px 4px 4px' />
<p>For many languages, however, a variety of keyboard layouts is available, and more than one of these may have been incorporated into a website.  In this case, beside the language name on the Toolbar, another dropdown menu will appear, with a list of keyboards to choose from (left).  Click on the desired keyboard and then in the text box to begin typing using this keyboard.</p>
<p>If a website incorporates several keyboards, it is possible to type in more than one language inside a single text box by returning to the menus on the Toolbar and selecting a different language and/or keyboard.  As mentioned above, clicking on the <img src="images/ui-tb-control5.gif" style='vertical-align: middle' ALT="Off"/> icon near the centre of the Toolbar will return you to typing in English or your default language.</p>

</div>


<div class='body_text'>
<h4>On-Screen Keyboard</h4>

<img src="images/ui-osk.gif" style='float:left; margin: 4px 8px 4px 4px'  />
<p>The <a href="osk.php">On-Screen Keyboard</a> <i>(left)</i> is a dynamic display showing the layout of the keyboard you are using.  Clicking on the On-Screen Keyboard icon <img src="images/ui-tb-control6.gif" style='vertical-align:middle' /> on the right side of the Toolbar turns the On-Screen Keyboard on and off. When the On-Screen keyboard is activated, this icon will have a border around it, as shown.  However, to avoid obscuring the display, the On-Screen Keyboard will not actually be displayed unless you have clicked in a text box which incorporates KeymanWeb. For more information about using the On-Screen Keyboard, <a href="osk.php">click here</a>.</p>

</div>



<br/>


