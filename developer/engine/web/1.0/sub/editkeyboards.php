<?php /*
  Name:             editkeyboards
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
  $pagename = 'KeymanWeb Subscriptions Help: Languages and Keyboards';
  $pagetitle = 'Subscriptions: Languages and Keyboards';
  $MainPage = true;
  
  require_once('header.php');
?>

<div class='body_text'>

<p style='margin-top: 16px'>
When setting up your KeymanWeb subscription, the step which most directly impacts your website's effectiveness is deciding which languages and keyboards to support.  This page allows you to select one or more keyboards from all those available.  If you require support for a language that is not listed here, please contact Tavultesoft.  We have access to a large number of keyboard layouts that can be easily modified to meet your needs.  You can also create keyboard layouts yourself using Keyman Developer KeymanWeb Pack.</p>

<p>The number of keyboards you are permitted to incorporate into your website will depend on the <a href="editlevel.php">subscription plan</a> that you have selected.  If you try to include more than the permitted number of keyboards, a warning message will appear at the bottom of the page.</p>

<p>In the 'Instructions' section of this page, there will be a message confirming whether the changes you are making to languages and keyboards will affect all the websites on your subscription or just those within a particular <a href="editdomains.php">domain</a>.</p>

<p>To include keyboards for a particular language in your subscription, first find and click on the name of the language in the "Available Languages" list on the left.  The languages are arranged by region, and it is possible to select more than one using Ctrl+click.  Click "Add," and these names will be added to the "Selected Languages" list in the centre of the page.</p>

<p>On the right is the "Selected Keyboards" list, which displays the keyboards available for the languages you have selected.  For many languages, more than one keyboard has been developed, and each is marked with a checkbox.  To avoid crowding your KeymanWeb user interface with unneccesary keyboards, be sure to uncheck any keyboards which are not required.</p>

<p>After initially creating your subscription, you can access this page from the Manage Subscription page, including more or fewer keyboards to suit your changing requirements.</p>


</div>

<div class='body_text'>
<p style='text-align:center'>
<a href="editdomains.php">Previous Step: Domain Names and Paths</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a href="editdesign.php">Next Step: User Interface Design</a>
<br/>
</div>

<?php
 include('footer.php');
?>
