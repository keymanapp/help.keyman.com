<?php /*
  Name:             editdesign
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
  $pagename = 'KeymanWeb Subscriptions Help: User Interface Design';
  $pagetitle = 'Subscriptions: User Interface Design';
  $MainPage = true;

  require_once('header.php');
  require_once __DIR__ . '/../../../../../_includes/autoload.php';

  use Keyman\Site\Common\KeymanHosts;

  $site_keymanwebdemo = KeymanHosts::Instance()->keymanweb_com;


  echo <<<END

<div class='body_text'>

<p style='margin-top: 16px'>
This page allows you to choose the KeymanWeb user interface that best complements your website.  Depending on the number of keyboards you are using and the way your website is designed, the various interfaces will be more or less suitable.</p>

<table border=0 cellpadding=12>

  <tr>
    <td valign="top">
	<p style='text-align: center; font-size: 12pt; font-weight: bold'>
	<img border=0 src="../images/ui-button.gif" style='vertical-align:middle' />
	<br/>Button Interface</p>
	<div>
	<p style='color:#A94827'>Display:<span style='font-weight:bold'> Fixed Element</span></p>
	<p style='color:#A94827'>No of Keyboards:<span style='font-weight:bold'> up to 20</span></p>
	<p style='color:#A94827'>HTML:<span style='font-weight:bold'> Header &amp; Control</span></p>
	</div>
    </td>
    <td valign="top">
	<p>For an interface which fits unobtrusively into your website while maintaining full functionality, try the Button Interface.  All KeymanWeb's functions are displayed in a menu appearing whenever the user hovers over the button, which can be placed anywhere on the website.</p>
	<p>To keep this interface as compact as possible, it is controlled through a single menu.  While there is technically no limit to the number of keyboards that can be used, the Button interface works best on sites using up to 20 different keyboards, which are listed alphabetically.</p>
	<p>For information on how your site users will interact with the Button Interface, <a href="../content/ui/ui-button.php">click here</a>.</p>
    </td>
  </tr>


  <tr>
    <td valign="top">
	<p style='text-align: center; font-size: 12pt; font-weight: bold'>
	<img border=0 src="../images/ui-floating.gif" style='vertical-align:middle' />
	<br/>Floating Interface</p>
	<div>
	<p style='color:#A94827'>Display:<span style='font-weight:bold'> Floating Element</span></p>
	<p style='color:#A94827'>No of Keyboards:<span style='font-weight:bold'> up to 20</span></p>
	<p style='color:#A94827'>HTML:<span style='font-weight:bold'> Header Only</span></p>
	</div>
    </td>
    <td valign="top">
	<p>The Floating Interface provides a clear, menu-based approach to selecting from a list of keyboards.  This interface can be incorporated without changing the layout of your existing site, as it automatically appears when users click in a a supported control (such as a textbox) and disappears again when they click outside.  You can choose to have the interface float below (DefaultBelow) or to the right of (DefaultRight) the active control.</p>
	<p>This interface is simple to use, and with its single alphabetical list of keyboards, works most effectively on sites supporting up to around 20 keyboards.</p>
	<p>For information on how your site users will interact with the Floating Interface, <a href="../content/ui/ui-floating.php">click here</a>.</p>
    </td>
  </tr>

  <tr>
    <td valign="top">
	<p style='text-align: center; font-size: 12pt; font-weight: bold'>
	<img border=0 src="../images/ui-toggle.gif" style='vertical-align:middle' />
	<br/>Toggle Interface</p>
	<div>
	<p style='color:#A94827'>Display:<span style='font-weight:bold'> Floating Element</span></p>
	<p style='color:#A94827'>No of Keyboards:<span style='font-weight:bold'> 1</span></p>
	<p style='color:#A94827'>HTML:<span style='font-weight:bold'> Header Only</span></p>
	</div>
    </td>
    <td valign="top">
	<p>For a website incorporating KeymanWeb to support a single keyboard, the Toggle is the ideal solution.  The interface floats at the right of the active control, and is hidden when the mouse is clicked outside, which means that no changes have to be made to your site design.  A simple on-off interface makes it easy for users to switch between their default language and the supported keyboard.</p>
	<p>For information on how your site users will interact with the Toggle Interface, <a href="../content/ui/ui-toggle.php">click here</a>.</p>
    </td>
  </tr>


  <tr>
    <td valign="top">
	<p style='text-align: center; font-size: 12pt; font-weight: bold'>
	<img border=0 src="../images/ui-toolbar.gif" style='vertical-align:middle' />
	<br/>Toolbar Interface</p>
	<div>
	<p style='color:#A94827'>Display:<span style='font-weight:bold'> Fixed Element</span></p>
	<p style='color:#A94827'>No of Keyboards:<span style='font-weight:bold'> unlimited</span></p>
	<p style='color:#A94827'>HTML:<span style='font-weight:bold'> Header &amp; Control</span></p>
	</div>
    </td>
    <td valign="top">
	<p>The standard interface for many sites incorporating KeymanWeb is the Toolbar.  This interface, which can be positioned anywhere on a website by inserting the HTML code provided, provides an instant visual indication that the site allows users to type in a range of languages.</p>
	<p>The Toolbar's map-based menu, displayed whenever a user clicks on the Keyboards button, works particularly well with multilingual sites integrating languages from all over the world.  The most recently-used keyboard is remembered in a cookie, making it as easy to switch between English and another language as the Toggle interface, while maintaining full functionality and support for an essentially  unlimited number of keyboards.</p>
	<p>A live example of the KeymanWeb Toolbar Interface is available on the <a href="$site_keymanwebdemo/">KeymanWeb Demo Site</a>.  For information on how your site users will interact with the Toolbar Interface, <a href="../content/ui/ui-toolbar.php">click here</a>.</p>
    </td>
  </tr>

</table>


</div>

<div class='body_text'>
<br/>
</div>

END;

 include('footer.php');
?>
