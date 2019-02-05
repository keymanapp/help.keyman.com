<?php /*
  Name:             editdomains
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
  $pagename = 'KeymanWeb Subscriptions Help: Domain Names';
  $pagetitle = 'Subscriptions: Domain Names';
  $MainPage = true;
  
  require_once('header.php');
?>

<div class='body_text'>

<p style='margin-top: 16px'>
A single KeymanWeb subscription (except for a free subscription) may be used to incorporate KeymanWeb into websites on several domains.  The number of domains permitted is determined by the subscription plan selected.  Only five fields for entering domain details are displayed by default; however, depending on the number of domains in your subscription, clicking on the <span style='font-style:italic'>Add 3 more rows</span> will provide further fields as required.</p>

<p>The full domain name must be entered, without "http://" or "www." prefixes.  If you want to restrict KeymanWeb to a specific path on your domain, enter the path, for example "/tamil/" into the corresponding Path text box.</p>

<p>If your site is on a secure domain (https://), this must be indicated by checking the <span style='font-weight:bold'>https</span> box at the left hand side for each secure domain name.</p>

<p>With the exception of a free subscription, which permits the use of only a single keyboard, it is possible to specify which keyboards are available to users on each of your domains.  Clicking the "Edit" button next to the Domain Name and Path textboxes will take you to a <a href="editkeyboards.php">Languages and Keyboards page</a> dealing specifically with a single domain.  If you do not specify keyboards for a given domain, all the keyboards included in your subscription will be available.
</p>

</div>

<div class='body_text'>
<p style='text-align:center'>
<a href="editlevel.php">Previous Step: Subscription Plan</a>&nbsp;&nbsp;-&nbsp;&nbsp;<a href="editkeyboards.php">Next Step: Languages and Keyboards</a>
<br/>
</div>

<?php
 include('footer.php');
?>
