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
  $pagename = 'Using KeymanWeb';
  $pagetitle = 'Using KeymanWeb';
  $MainPage = true;

  require_once('header.php');
?>
<h1>User Interface options</h1>

<div id='body_text'>

<p style='margin-top: 16px'>
As a web-based language solution, KeymanWeb can be used for an extremely wide variety of applications.  A
range of standard User Interface designs have been included to provide flexibility in incorporating KeymanWeb
into a website.  This allows developers to select an interface which best complements their website design.
Customised designs can be developed to suit specific site requirements.  Please <a href='/contact/'>contact Tavultesoft</a>
for more information.</p>

<p>Using the various interfaces is largely similar, but because the appearance of each is quite distinct, they are dealt with in different sections of this help documentation. Please click on the links below for more information on the interface you are using.</p>

<table style='text-align:center' class='display_grid' border=0 cellpadding=12>
  <tr>
    <td valign="top">
	<a href="ui-button">
	<img border=0 src="images/ui-button.gif" style='vertical-align:middle' /></a>
	<br/>
	<a href="ui-button">
	<span style='font-size: 12pt; font-weight: bold'>Button Interface</span></a></td>
  <td>
    <td valign="top">
	<a href="ui-floating">
	<img border=0 src="images/ui-floating.gif" style='vertical-align:middle' /></a>
	<br/>
	<a href="ui-floating">
	<span style='font-size: 12pt; font-weight: bold'>Floating Interface</span></a></td>
  </tr>
  <tr>
    <td valign="top">
	<a href="ui-toggle">
	<img border=0 src="images/ui-toggle.gif" style='vertical-align:middle' /></a>
	<br/>
	<a href="ui-toggle">
	<span style='font-size: 12pt; font-weight: bold'>Toggle Interface</span></a></td>
  <td>
    <td valign="top">
	<a href="ui-toolbar">
	<img border=0 src="images/ui-toolbar.gif" style='vertical-align:middle' /></a>
	<br/>
	<a href="ui-toolbar">
	<span style='font-size: 12pt; font-weight: bold'>Toolbar Interface</span></a></td>
  </tr>
  <tr>
  <td colspan='3' style='text-align: left'>More information is also available on how to use the On Screen Keyboard.</td>
  </tr>
  <tr>
    <td valign='top' colspan='3'>
      <a href='osk.php'><img border=0 style='width: 50%' src='images/oskeyboard.gif' /></a>
      <br/>
      <a href='osk.php'><span style='font-size: 12pt; font-weight: bold'>On Screen Keyboard</span></a>
    </td>
  </tr>
</table>
</div>

<?php
 include('footer.php');
?>
