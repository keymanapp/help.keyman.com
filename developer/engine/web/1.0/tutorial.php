<?php /*
  Name:             tutorial
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
                    19 June 2014 - jmdurdin - update for version 2, renaming
*/
  $pagename = 'Keyman Engine for Web 1.0 Subscription Tutorial';
  $pagetitle = 'Keyman Engine for Web 1.0 Subscription Tutorial';
  $MainPage = true;
  
  require_once('header.php');
  
  echo <<<END

<div class='body_text'>

<p style='margin-top: 16px'>
This page provides a stage-by-stage guide to setting up a free Keyman Engine for Web 1.0 subscription on your website.  More detailed information is available by clicking on the links throughout this page or <a href="#bottom">at the end of this page</a>.
</p>

<br/>
<br/>


<a name="stage1"></a>
<img src="images/sshot1.gif" style='float: right; margin: 0 0 0 16px' />

<h3 style='margin: 16px 0 16px 8px'>Stage 1</h3>

<h4 style='margin: 16px 0 8px 16px'>Create your Website</h4>


<p style='margin: 8px 0 8px 16px'>Decide where on your website you will incorporate Keyman Engine for Web.  In the example on the right, the plan is to allow users to type comments in the large text area in their own language.
</p>

<p style='margin: 8px 0 8px 16px'>You will need to know the following information before opening a Keyman Engine for Web subscription:</p>
<ul>
<li>Your <b>email address</b></li>
<li>Your website's <b>domain</b></li>
<li>How to <b>edit webpage source</b> files (HTML, PHP etc.)</li>
</ul>

<br/><br/><br/><br/>



<a name="stage2"></a>
<img src="images/sshot2.gif" style='float: left; margin: 8px 24px 0 0' />

<h3 style='margin: 16px 0 16px 16px'>Stage 2</h3>

<h4 style='margin: 16px 0 8px 16px'>Create your Keyman Engine for Web Subscription</h4>

<p style='margin: 8px 0 8px 16px'>&#8226; In a new browser tab or window, <a href="https://$site_securetavultesoft/account/login.php">login</a> to your Tavultesoft <br/>
&nbsp;&nbsp;&nbsp;account.  If you do not yet have an account, <a href="https://$site_securetavultesoft/account/create.php?Return=account%2Fhome%2F">click here</a> to <br/>
&nbsp;&nbsp;&nbsp;create and activate one.</p>

<p style='margin: 8px 0 8px 16px'>&#8226; After logging in, open the <i>Your KeymanWeb Subscriptions</i><br/>
&nbsp;&nbsp;&nbsp;tab and click on <b>Create KeymanWeb Subscription</b>.<br/> 
&nbsp;&nbsp;&nbsp;This will lead you into the simple 3-step process to <br/>
&nbsp;&nbsp;&nbsp;configure Keyman Engine for Web for your site.
</p>

<br/><br/><br/>


<a name="stage2cont"></a>


<h4 style='margin: 16px 0 8px 8px'>Keyman Engine for Web Subscription Setup</h4>
<p>Click on the links for further information on each of these steps.</p>

<table border=0 cellpadding=4>
  <tr>
    <td valign="top" width=70 style="vertical-align:top">&#8226; <b>Step 1:</b></td>
    <td valign="top" width=230  style="vertical-align:top">
    <div style='text-align:right; font-style:italic;margin-bottom:30px'></div></td>
    <td width=4></td>
    <td valign="top" width=450></td>
  </tr>
  <tr>
    <td valign="top" style="vertical-align:top">&#8226; <b>Step 2:</b></td>
    <td valign="top" style="vertical-align:top">Choose the languages and keyboards you will use on your website.  Some languages have more than one keyboard.</td>
    <td></td>
    <td valign="top"></td>
  </tr>
  <tr>
    <td valign="top" style="vertical-align:top">&#8226; <b>Step 3:</b></td>
    <td valign="top" style="vertical-align:top">Copy the HTML code to the Clipboard. You may need to select and copy the         code with some browsers.
        <br/><b>Click <i>Finish</i> to create your new subscription.</b>
    <div style='text-align:right; font-style:italic'><a href="sub/gethtml.php">More information...</a></div></td>
    <td></td>
    <td valign="top"><a href="sub/gethtml.php"><img border=0 src="images/ssx7.gif" /></a></td>
  </tr>
</table>


<br/><br/>


<a name="stage3"></a>
<img src="images/sshot4.gif" style='float: left; margin: 32px 24px 32px 0' />

<h3 style='margin: 16px 0 16px 16px'>Stage 3</h3>

<h4 style='margin: 16px 0 8px 16px'>Include Keyman Engine for Web on your Website</h4>

<p style='margin: 8px 0 8px 16px'>There are a couple of steps to take before Keyman Engine for Web will be ready to use on your website:</p>


<ul style='margin-bottom:20px'>
<li>Open your webpage source in a text editor, such as Notepad.  Paste the HTML code you copied in <b>Step 3</b> above into the &lt;head&gt; section of your webpage.</li>

<li>Upload your webpages and all necessary files to your server.</li>
</ul>

<br/>

<a name="stage3cont"></a>

<img src="images/sshot5.gif" style='float: right; margin: 0px 0px 0 16px' />

<p style='margin: 8px 0 8px 16px'>When you or your guests next access your website, a Toggle control for Keyman Engine for Web will appear beside the textbox or text area, allowing anybody to type in the language you selected from any computer!</p>

<br/>
<p><a href="content/ui/ui-toggle.php">Using the Toggle Interface</a></p>

<br/>

</div>
<a name="bottom"></a>
<div class='body_text'>
<h4>Further Information:</h4>
<p>
For more complex subscriptions, please refer to the
<a href="api/">KeymanWeb Developer API</a>
</p>
</div>

END;

 include('footer.php');
?>
