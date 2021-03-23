<?php /*
  Name:             index
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
  require_once('includes/template.php');

head([
  'title' => "Troubleshooting"
]);
?>

<div class='body_text'>
<h1>Troubleshooting</h1>
<p style='margin-top: 16px'>
Listed below are some difficulties occasionally experienced when using KeymanWeb.  The information on this page is continually reviewed and updated, and other questions are addressed in the <a href="https://community.software.sil.org/c/keyman">Keyman Community</a>.
</p>

<ul>
  <li><a href="#boxes">Why are boxes appearing when I type?</a></li>
  <li><a href="#one">Why isn't my language appearing correctly?</a></li>
  <li><a href="#two">Why can't I see the On-Screen Keyboard?</a></li>
  <li><a href="#three">Why can I only type in English?</a></li>
</ul>

<div class='body_text'>
<a name="boxes"></a>
<h4 style='clear:right'>Boxes (Characters do not Appear)</h4>

<img src="images/boxes.gif" style='float:right; margin: 4px 4px 4px 8px' alt="Boxes Image" />

<p>If empty boxes, or boxes containing Unicode character codes, appear in your text box when you type (and/or on the On-Screen Keyboard), as in the images on the right, please check the following:
</p>
<ul>
<li>
 Confirm that your browser supports embedded fonts and is up to date, as some earlier versions of browsers do not
 include this feature. In this case, to enable KeymanWeb to function properly, you will need to
 update your browser or download the specific font required for your keyboard.
</li>
<li>If you copy and paste text that you have typed in KeymanWeb into another application such as Microsoft Word, you
  may find that it does not display.  In this case, you will need to installing the Keyman Desktop package for the
  keyboard onto your computer.  You can download the Keyman Desktop package by clicking the "Help on this
  keyboard" link in the On Screen Keyboard.
</li>
<li>An <a href='embedded_fonts.php'>embedded font test page</a> is available for further testing of embedded font support on your computer.</li>
</ul>

<br/>
</div>


<a name="one"></a>
<div class='body_text'>
<h4 style='clear:right'>Characters are not Displayed Correctly</h4>
<img src="images/incorrect-tibetan1.gif" style='float:right; margin: 4px 4px 4px 8px' alt="Tibetan Image" />
<p>If you find that you can see the characters for a language on screen, but they don't display quite right, you may be experiencing a limitation in your operating system.
An example of this is visible in the Tibetan script on the right.  Installing Keyman Desktop or Keyman for Mac may help resolve these issues.</p>

</div>


<a name="two"></a>
<div class='body_text'>
<h4 style='clear:right'>Disappearing On-Screen Keyboard</h4>
<p>If the <a href='osk.php'>On-Screen Keyboard</a> does not appear, or disappears as soon as
you move it, please check the following:
</p>
<ul>
<li>Make sure KeymanWeb is activated by clicking in the text area.</li>

<li>Confirm that the <a href='osk.php'>On-Screen Keyboard</a> is turned on.
In the <b>Button</b> interface, the first item in the Keyboard Menu should be <img src="images/ui-bt-hidekb.gif" style='vertical-align: middle' ALT="Hide Keyboard"/>,
  while in the other user interface designs, the On-Screen Keyboard icon
  <img src="images/ui-tb-control6.gif" height=21 style='vertical-align: middle' ALT="On-Screen Keyboard"/> should have a box around it.</li>
<li>Ensure that a keyboard has been actively selected.  The On-Screen Keyboard will not display for the default operating system keyboard,
which is generally available as the first selectable keyboard on KeymanWeb desktop user interfaces.</li>
<li>Scroll up and down (and across if necessary) the website to see if the On-Screen Keyboard is actually being displayed, but is in a different position.</li>

<li>For more information on using the On-Screen Keyboard, <a href="osk.php">click here</a>.</li>
</ul>
</div>


<a name="three"></a>
<div class='body_text'>
<h4>English Letters</h4>
<p>If English letters appear when you type, rather than your language, please check the following:
</p>
<ul>
<li>Confirm that KeymanWeb is activated for the textbox or text area you are typing into.</li>

<li>Make sure you have selected the correct keyboard for the language you wish to use.  Some languages use more than one writing system, and these are often available as different keyboards.</li>

<li>For more information on the KeymanWeb user interfaces, <a href="../ui">click here</a>.</li>
</ul>

</div>





<a name="morehelp"></a>
<div class='body_text'>
<h4>More Help</h4>
<p>If you are experiencing continued difficulty in using KeymanWeb and have not been able to find a solution on this page, <a href="/contact">click here</a>.</p>
<br/>


</div>

