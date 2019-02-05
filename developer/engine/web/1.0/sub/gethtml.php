<?php /*
  Name:             gethtml
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
  $pagename = 'KeymanWeb Subscriptions Help: Get HTML Code';
  $pagetitle = 'Subscriptions: Get HTML Code';
  $MainPage = true;
  
  require_once('header.php');
?>

<div class='body_text'>

<p style='margin-top: 16px'>
After creating your KeymanWeb subscription, you will need to add a small amount of code to your website HTML source files to actually integrate KeymanWeb and make it visible to your site users.  This page displays the code needed and gives instructions as to where in your HTML files it should be included.</p>

<p>All the KeymanWeb user interfaces require the same <span style='font-weight:bold'>Header Code</span>, which should be copied and pasted into the &lt;head&gt; section of all the pages on which you want to incorporate KeymanWeb.</p>

<p>The Button and Toolbar user interfaces require some additional code, which will be displayed on this page if you have selected one of these interfaces.  This allows you to determine the location on your website of the actual KeymanWeb control.  Copy the code and paste it into your HTML files at the point where you want it positioned on the page.
</p>


</div>

<div class='body_text'>
<p style='text-align:center'>
<a href="pay.php">Previous Step: Pay for Subscription</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a href="edit.php">Next Step: Managing your Subscription</a>
<br/>
</div>

<?php
 include('footer.php');
?>
