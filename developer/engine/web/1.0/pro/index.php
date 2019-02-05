<?php /*
  Name:             index
  Copyright:        Copyright (C) 2005 Tavultesoft Pty Ltd.
  Documentation:    
  Description:      
  Create Date:      20 June 2014

  Modified Date:    20 June 2014
  Authors:          jmdurdin
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          
*/
  $pagename = 'Developer Guide: Keyman Engine for Web Professional Edition';
  $pagetitle = 'Developer Guide: Keyman Engine for Web Professional Edition';
  $MainPage = true;
  
  require_once('header.php');
?>

<div class='body_text'>
<ul id='index'>
<li><a href='keyboard.php'>KeymanWeb Keyboard Development Reference</a></li>
<li><a href='pro_transition.php'>Transitioning from Subscription to Professional Edition</a></li>
</ul>
<br />
<ul>
<li>KeymanWeb Professional Edition API Examples
  <ul>
    <li><a href='examples/automatic_control.php'>Automatic Control Example</a></li>
    <li><a href='examples/automatic_control_loaded.php'>Automatic Control Preloaded Example</a></li>
    <li><a href='examples/manual_control.php'>Manual Control Example</a></li>
    <li><a href='examples/full_manual_control.php'>Full Manual Control Example</a></li>
    <li><a href='examples/control_by_control.php'>Control by Control Example</a></li>
  </ul>
</li>

</ul>

</div>

<?php
 include('footer.php');
?>
