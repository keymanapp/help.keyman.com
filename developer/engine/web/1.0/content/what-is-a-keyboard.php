<?php /*
  Name:             what-is-a-keyboard
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
  $pagename = 'What is a Keyboard?';
  $pagetitle = 'What is a Keyboard?';
  $MainPage = true;
  
  require_once('header.php');
  
  echo <<<END

<div class='body_text'>

</div>

<div class='body_text'>
<p style='margin-top: 16px'>
When using KeymanWeb, the term <span style='font-style:italic' >keyboard</span> refers specifically  to the way the keys are arranged for a specific language (i.e. which letter or character appears when a given key is pressed).  While many languages use a keyboard based on the English-language QWERTY layout, those that have a different writing system altogether usually have a completely unrelated keyboard.  Some languages also have more than one keyboard layout; a typewriter-based layout and a phonetic layout, for example.</p>

<p>The keyboards available for use with KeymanWeb have been developed by a wide range of people all over the world.
Some keyboards adhere to published standards while others have been developed to meet a specific requirement.
<a href='http://$site_tavultesoft/keymandev/'>Keyman Developer</a> has been used to develop the keyboards.</p>

</div>


<div class='body_text'>
<h4>Information on Specific Keyboards</h4>
<p>KeymanWeb supports a very wide range of languages, and many keyboards available for use with KeymanWeb include features specific to particular languages.  Because of this, each keyboard has its own documentation, which can be accessed by clicking on the <u>Help on this Keyboard</u> link at the bottom of the <a href="ui/osk.php">On-Screen Keyboard</a>.  Although the level of detail in this documentation does vary somewhat, depending on the designer and the requirements of each keyboard, this is the first place to look for information on using a particular language with KeymanWeb.</p>
</div>

<p><a href='/keyboard/'>Index of help for KeymanWeb keyboard layouts</a></p>

END;

 include('footer.php');
?>
