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
  $pagename = 'Developer Guide: Keyman Engine for Web 1.0 Subscriptions';
  $pagetitle = 'Developer Guide: Keyman Engine for Web 1.0 Subscriptions';
  $MainPage = true;
  
  require_once('header.php');
?>

<div class='body_text'>

<ul style='margin-top: 16px'>
  <li><a href="../tutorial.php">Tutorial: Adding Keyman Engine for Web 1.0 to your Website</a></li>
  <li><a href="edit.php">Managing your Keyman Engine for Web 1.0 Subscription</a></li>
	<li><a href="account.php">Your Subscription Status</a></li>
</ul>

<ul id='index' style='margin-top: 16px'>
  <h3>Step by step...</h3>
  <li><a href="agreement.php">End User Agreement</a></li>
  <li><a href="editlevel.php">Subscription Plans</a></li>
  <li><a href="editdomains.php">Domain Names and Paths</a></li>
  <li><a href="editkeyboards.php">Languages and Keyboards</a></li>
  <li><a href="editdesign.php">Keyman Engine for Web User Interfaces</a></li>
  <li><a href="pay.php">Pay for Subscription</a></li>
  <li><a href="gethtml.php">Get HTML Code</a></li>
</ul>

</div>

<?php
 include('footer.php');
?>
