<?php /*
  Name:             edit
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
  $pagename = 'KeymanWeb Subscriptions Help: Managing Your Subscription';
  $pagetitle = 'Subscriptions: Managing Your Subscription';
  $MainPage = true;
  
  require_once('header.php');
?>

<map name="manage">
    <area shape="rect"
          coords="14,93,294,201"
          href="account.php"
          title="Subscription Status">
    <area shape="rect"
          coords="307,93,586,176"
          href="editlevel.php"
          title="Subscription Plan">
    <area shape="rect"
          coords="14,214,294,272"
          href="editdomains.php"
          title="Domain Names and Paths">
    <area shape="rect"
          coords="301,214,586,259"
          href="editkeyboards.php"
          title="Keyboards">
    <area shape="rect"
          coords="14,286,586,392"
          href="editdesign.php"
          title="User Interface Design">
    <area shape="rect"
          coords="14,407,294,452"
          href="gethtml.php"
          title="Website Integration">
    <area shape="rect"
          coords="301,407,586,452"
          href="pay.php"
          title="Manage Payments">
    <area shape="default"
          nohref>
</map>


<div style='' class='body_text'>

<p style='margin-top: 16px'>
The KeymanWeb Subscription Management page is where you can control and modify all aspects of your subscription.  This page is displayed when you finish <a href="../tutorial.php">setting up a new KeymanWeb subscription</a> for the first time, or when you subsequently login to your Tavultesoft account.</p>
<p>Click on each marked area of the image below for information on that section of the subscription management page.</p>

<p style='text-align:center; margin:24px 0 0 0'>
<img border=0 src="../images/dev-manage.gif" usemap="#manage" />
</p>


</div>
<br/>


<?php
 include('footer.php');
?>
