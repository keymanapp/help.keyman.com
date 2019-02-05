<?php /*
  Name:             osk
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
  $pagename = 'On Screen Keyboard';
  $pagetitle = 'On Screen Keyboard';
  $MainPage = true;
  
  require_once('header.php');
?>



<div class='body_text'>
<h4 style='margin-top: 16px'>What is a Keyboard?</h4>
<p>When using KeymanWeb, the term <span style='font-style:italic' >keyboard</span> refers specifically  to the way the keys are arranged for a specific language (i.e. which letter or character appears when a given key is pressed).  Some languages have more than one keyboard layout; a typewriter-based layout and a phonetic layout, for example.  </p>
<p>This page gives information about KeymanWeb's On-Screen Keyboard: the map of the keyboard which appears on a website when KeymanWeb is in use.</p>
<p><a href='../what-is-a-keyboard.php'>More about KeymanWeb keyboards</a></p>
</div>


<div class='body_text'>
<h4>On-Screen Keyboard</h4>

<img src="images/oskeyboard.gif" style='float:left; margin: 4px 8px 4px 4px' alt="On-Screen Keyboard Image" />

<p>The <b>On-Screen Keyboard</b> <i>(left)</i> displays the layout of the keyboard you are currently using.  When you press any key, the blue character or letter marked on the On-Screen Keyboard will appear in the textbox.  Many keyboards also use combinations of   <b>Shift</b>, <b>Ctrl</b> or <b>Alt</b> and letter keys to include more characters.  When Shift, Ctrl or Alt is pressed, the On-Screen Keyboard display will change to show these characters.</p>
<p>You can also use the On-Screen Keyboard to enter text directly, without pressing any keys on your physical keyboard.  Click once on any character displayed on the On-Screen-Keyboard, and it will be entered into the textbox.  Shift-, Ctrl- and Alt- combinations also work with this method: click once on Shift, for example, and it will stay 'pressed' until it is clicked again or the physical Shift key is pressed.  Although text entry using this method can be less efficient, it can be useful when a non-English physical keyboard is attached to the computer in use.</p>
</div>


<div class='body_text' style='margin: 0 0 0 32px'>
<h4><b>Moving and Hiding the On-Screen Keyboard</b></h4>
<p>The On-Screen Keyboard can be moved to any area of the website which is being displayed.  It can be placed in a more convenient position for referring to when typing, or moved out of the way if it is obscuring part of the textbox or another part of the screen.
To move the On-Screen Keyboard, move the mouse pointer over the On-Screen Keyboard's title bar (where the title 'Tavultesoft Keyman' is displayed), and the pointer will change to a four-way arrow.  Hold down the left mouse button, drag the Keyboard to your desired posistion and release the mouse button.  The On-Screen Keyboard will remain in the new position until it is moved again.</p>

<p>When you move the On-Screen Keyboard, a drawing pin icon <img src="images/pin.gif" style='vertical-align:middle'/> will appear in the title bar.  Clicking on the drawing pin icon will return the On-Screen Keyboard to its original position near the KeymanWeb Control.</p>
<p>If you are familiar with the layout of the keyboard in use and do not need to refer to the On-Screen Keyboard, it can be hidden (and displayed again if necessary) using the KeymanWeb Control.  The method for hiding and displaying the On-Screen Keyboard varies slightly (it is done through either a menu item or a button) depending on which User Interface is configured on your website.  Please refer to the specific <a href="../ui">User Interface pages</a> for more details.</p>
</div>


<div class='body_text' style='margin: 0 0 0 32px'>
<h4><b>Resizing the On-Screen Keyboard</b></h4>
<p>You can also change the size of the On-Screen Keyboard.  For example, you may choose to make the On-Screen Keyboard smaller, instead of moving it, to better fit it on your screen; or you might like to enlarge the On-Screen Keyboard to make it clearer and easier to refer to.</p>
<img src="images/ctrlkey.gif" style='float:left; margin: 4px 8px 4px 4px' alt="Ctrl Key Image" />
<p>To resize the On-Screen Keyboard, move the mouse pointer over the shaded corner of the 'Ctrl' Key at its bottom right.  When the pointer changes to a diagonal two-way arrow, hold down the left mouse button and drag the mouse to make the On-Screen Keyboard larger or smaller.  Releasing the mouse button will set the size, and the On-Screen Keyboard will remain the new size until it is resized again.
</div>


<div class='body_text'>
<h4>Information on Specific Keyboards</h4>
<p>KeymanWeb supports a very wide range of languages, and many keyboards available for use with KeymanWeb include features specific to particular languages.  Because of this, each keyboard has its own documentation, which can be accessed by clicking on the <u>Help on this Keyboard</u> link at the bottom of the On-Screen Keyboard.  Although the level of detail in this documentation does vary somewhat, depending on the designer and the requirements of each keyboard, this is the first place to look for information on using a particular language with KeymanWeb.</p>
</div>





<?php
 include('footer.php');
?>
