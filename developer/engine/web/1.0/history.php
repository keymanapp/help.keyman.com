<?php /*
  Name:             history
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
  $pagename = 'Keyman Engine for Web Version History';
  $pagetitle = 'Keyman Engine for Web Version History';
  $MainPage = true;
  
  require_once('header.php');
  
  echo <<<END

<div class='body_text'>

<h3>Keyman Engine for Web 1.0 Release History</h3>

<ul>
  <li>I2186 - 1.0.144 - On Screen Keyboard look and feel polished, display issues on Chrome addressed</li>
  <li>I2187 - 1.0.144 - CJK keyboard support</li>
  <li>I2134 - 1.0.150 - Rich editors in Chrome would cause an exception on second character typed</li>
  <li>I2192 - 1.0.150 - TinyMCE in Firefox did not work with KeymanWeb</li>
  <li>I2194 - 1.0.151 - On Screen Keyboard could appear partially off screen if scrollbars visible</li>
  <li>I2195 - 1.0.151 - onfocuscontrol event fired for wrong element with iframes</li>
  <li>I1295 - 1.0.155 - KeymanWeb did not attach to some iframes in Internet Explorer</li>
  <li>I1962 - 1.0.155 - KMW_Enable and KMW_Disable attributes were not properly checked</li>
  <li>I2403 - 1.0.155 - Fixed "symbol "CKeymanWeb" not found error"</li>
  <li>I2404 - 1.0.155 - KeymanWeb did not attach to controls in iframes</li>
  <li>I2405 - 1.0.155 - Add GetHelpRect API function</li>
  <li>I2309 - 1.0.160 - If KL not specified, then KRS would fail</li>
  <li>I2409 - 1.0.160 - Avoid focus changes when clicking on OSK for keyboard input</li>
  <li>I2457 - 1.0.160 - Attachment to editable DIVs in Facebook</li>
  <li>I2458 - 1.0.160 - Block nul characters from OSK</li>
  <li>I2459 - 1.0.160 - Additional keyboards are now listed in UI widgets after load</li>
  <li>I2498 - 1.0.162 - KeymanWeb OSK did  not accept clicks in FF when using automatic UI</li>
  <li>I2243 - 1.0.163 - Support nul on LHS of rules</li>
  <li>I3318 - 1.0.163 - Deadkeys were not cleared an unmapped key was pressed</li>
  <li>I3319 - 1.0.163 - SMP character support</li>
  <li>I3320 - 1.0.163 - Deadkey support tidyup for SMP characters</li>
  <li>I3367 - 1.0.165 - Secondary groups were not always matching rules correctly</li>
  <li>I3368 - 1.0.166 - Chinese keyboard was not working with 1.0.163</li>
  <li>I3555 - 1.0.167 - Work around hyphen key  mapped wrongly in Firefox</li>
</ul>

<!--<h3>Keyman Engine for Web 2.0 Release History</h3>-->



</div>

END;

  include('footer.php');
?>
