<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 3: Editing icons for the product"
  ]);
?>

<h1>Step 3: Editing icons for the product</h1>

<p>In the Branding Editor, click the <span class="guibutton">Icons</span> tab.</p>

<p>A Keyman Engine-based product includes 3 standard icons:</p>

<ul type="disc">
  <li>trayicon.ico is the icon displayed in the System Notification Area for your product when no Keyman Engine keyboard is selected.</li>
  <li>appicon.ico is the icon used by the product installer for Start Menu shortcuts, and the Keyman Desktop user interface when you start the product.</li>
  <li>cfgicon.ico is the icon used by the product installer for Start Menu shortcuts, and the Keyman Desktop user interface when you start the product configuration.</li>
</ul>

<aside>
  <h3 class="title">Tip</h3>

  <p>You will see that the icon editor here only supports 16x16 256 colour icons. We recommend creating icons in an external package
  such as Microangelo for the best possible results. If you have imported an icon from an external package, do not edit it in the
  Branding Editor, or some graphical content will be lost.</p>
</aside>

<p><a href="step-4" title="Step 4: Setting up menus for the product">Step 4: Setting up menus for the product</a></p>
