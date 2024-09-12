<?php  require_once('includes/template.php');

  // Required
  head([
    'title' =>'Keyman Engine for Web Developer FAQ',
    'css' => ['template.css'],
    'showMenu' => true
  ]);
?>
<h1>Keyman Engine for Web Developer FAQ</h1>

<dl>

  <dt>Do you have a demonstration of KeymanWeb?</dt>

  <dd>Yes, at <a href='http://keymanweb.com'>keymanweb.com</a></dd>

  <dt>If I need a new language, how do I get it?</dt>

  <dd>Tavultesoft will respond to requests for additional languages &ndash; we have access to a large number of
  keyboard layouts that can be easily modified to meet your needs; <a href='/developer/current-version/'>Keyman Developer</a>
  also includes all the tools you need to create keyboard layouts yourself.</dd>

  <dt>Will KeymanWeb work on all web sites?</dt>

  <dd>KeymanWeb will work on any Unicode-based web site that follows the HTML/XHTML standards.</dd>

  <dt>What are the steps to implement KeymanWeb?</dt>

  <dd><a href='http://keyman.com/developer/web/'>Download the source</a> and follow the integration instructions
  on that site and in our <a href='2.0/'>full reference documentation</a>.</dd>

  <dt>Will I need additional software or technical resources?</dt>

  <dd>No &ndash; KeymanWeb is straightforward to implement and we envision most sites reaching a final
  implementation within a day or two.  We provide additional technical expertise for large sites
  requiring more complex interactions.</dd>

  <dt>Which languages are not supported?</dt>

  <dd>KeymanWeb supports any language.  Keyboards are available for over 600 languages right now.
  The full list of keyboards available today is online at <a href='https://keyman.com/developer/keymanweb/keyboards'>keyman.com</a>.
  These are also all available on the <a href='http://keymanweb.com'>KeymanWeb Live site</a>.
  If you require another language, please <a href='/contact/'>contact us</a> for information.</dd>

  <dt>Does KeymanWeb use ActiveX or Java?</dt>

  <dd>No. KeymanWeb runs entirely in JavaScript.  No browser add-ons or plugins are required.</dd>

  <dt>What platforms has KeymanWeb been tested on?</dt>

  <dd>KeymanWeb 2.0 is continually tested against current releases of Firefox, Chrome, Internet Explorer,
  Microsoft Edge, Safari, Mobile Chrome, Mobile Safari, Mobile Internet Explorer, Opera and other browsers. Backward
  compatibility functionality means that most KeymanWeb functionality will degrade cleanly for older platforms.</dd>

  <dt>What about fonts?</dt>

  <dd>All modern browsers support font embedding, and KeymanWeb keyboards can integrate fonts
  for these platforms.</dd>

  <dt>Can I modify existing keyboard layouts or create my own?</dt>

  <dd>Yes.  You can create your own layouts from scratch with the <a href='/developer/current-version'>Keyman Developer</a> product.</dd>

</dl>
