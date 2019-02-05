<?php /*
  Name:             account
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
  $pagename = 'KeymanWeb Subscriptions Help: Subscription Status';
  $pagetitle = 'Subscriptions: Subscription Status';
  $MainPage = true;
  
  require_once('header.php');
?>

<div style='' class='body_text'>

<p style='margin-top: 16px'>
This section of the KeymanWeb Subscription Management page gives you the following information regarding your subscription:</p>

<table class='body_text' style='margin:0 0 0 48px'>
   <tr>
   <td valign="top" width=150><p><span style='font-weight:Bold'>Start Date</span></td>
   <td valign="top" width=400><p>This tells you the on which date you first created this subscription.  Please note that if you initially created a free subscription, then changed to a paid subscription at a later date, the date displayed here refers to the original subscription, while the change will be noted in the <span style='font-style:italic'>Account History</span> link explained below.</p>
     </td>
   </tr>
   <tr>
   <td valign="top" ><p><span style='font-weight:Bold'>Trial Days Left</span></td>
   <td valign="top" ><p>If you have created a paid subscription, you are initially given a free 30-day trial period.  This field reminds you of how many days you have remaining in your trial period.  Once this period has expired, you will need to begin monthly payments, or your subscription will be cancelled and KeymanWeb will no longer function on your website.  If you created a Free subscription, this will be noted here.</p>
     </td>
   </tr>
   <tr>
   <td valign="top" ><p><span style='font-weight:Bold'>Current Balance</span></td>
   <td valign="top" ><p>Paid subscriptions are charged a monthly fee.  It is possible to pay for a long period in advance, and this field tells you the amount of money remaining in your account.  If your account balance is negative, you will be reminded to pay the fee, or your subscription will be cancelled..</p>
     </td>
   </tr>
   <tr>
   <td valign="top" ><p><span style='font-weight:Bold'>Current Month</span></td>
   <td valign="top" ><p>This field also relates to the monthly fee for a paid subscription.  It tells you the current period you have been charged for, and reminds you of how much time (as a percentage) remains before your next automatic payment is due.  This period is also used to keep track of the number of hits your subscription receives (see below).</p>
     </td>
   </tr>
   <tr>
   <td valign="top" ><p><span style='font-weight:Bold'>Hits</span></td>
   <td valign="top" ><p>A hit is recorded any time a user loads your website containing KeymanWeb.  Depending on the type of subscription you have created, a different number of hits is permitted each month, and once this number has been reached, KeymanWeb will no longer function.  This field shows the hits recorded for the current period, both as a number and as a percentage of the total limit.  If you find you need a higher limit than your subscription plan allows, you may need to upgrade to a different type of subscription.</p>
     </td>
   </tr>
   <tr>
   <td valign="top" ><p><span style='font-weight:Bold'>View Account History</span></td>
   <td valign="top" ><p>This link opens a new page detailing the changes made to your subscription account.  It deals only with changes to the subscription plan, charges and credits.</p>
     </td>
   </tr>
</table>
</div>

<div class='body_text'>
<p style='text-align:center'>
<a href="edit.php">Back to 'Managing your Subscription'</a>
<br/>
</div>


<?php
 include('footer.php');
?>
