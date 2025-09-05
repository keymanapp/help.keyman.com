<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 2: Choosing a user interface model"
  ]);
?>

<h1>Step 2: Choosing a user interface model</h1>

<p>In the Branding Editor, click the <span class="guibutton">Details</span> tab.</p>

<p>A Keyman Engine-based product can:</p>

<ul type="disc">
  <li>Use the Keyman Desktop user interface, customised to whatever degree you wish, or</li>
  <li>Use its own application that controls Keyman Engine through the <a href="/developer/engine/desktop/9.0/comapi/" title=
    "Tavultesoft Keyman Engine COM API">Keyman COM API</a>.</li>
</ul>

<h2><a name="id497370" id="id497370"></a>Keyman Desktop User Interface</h2>

<p>Use the Keyman Desktop user interface when you don't need additional functionality that is not in Keyman Desktop.</p>

<p>Virtually all of the Keyman Desktop user interface is rendered in HTML. We use a technology called XML+XSLT to do a contextual
rendering of the user interface. Commands can be sent to Keyman Engine by accessing a link to "keyman:cmd?param/=value/". A
reference on each of the screens in Keyman Desktop Configuration is available <a href="/developer/engine/desktop/9.0/branding/" title=
"Reference - Branding Toolkit for Keyman Developer Professional">here</a>.</p>

<p>The Keyman Desktop user interface is also localizable. The file locale.xml contains all the text in the user interface, and it is
recommended that you continue to use this file for all your customised strings.</p>

<p>You will find the <a class="link" href="">Localization of Keyman Desktop</a> topic helpful for understanding how to localize your
product.</p>

<h2><a name="id497398" id="id497398"></a>Your own User Interface</h2>

<p>Developing your own user interface is not difficult, but it is outside the scope of this tutorial. A simple example is included in
the Samples folder for Keyman Developer. You will notice that when you select to use your own User Interface in the Branding Editor,
the Strings and Config UI tabs become disabled, as they are no longer relevant. However, the Icons and Tray Menu tabs are relevant as
long as you use keyman.exe as the product controller, which is recommended.</p>

<p>Creating your own product controller is certainly possible, but the major disadvantage is that you lose access to the On Screen
Keyboard.</p>

<p><a href="step-3" title="Step 3: Editing icons for the product">Step 3: Editing icons for the product</a></p>
