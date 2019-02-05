<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 4: Create shortcuts"
  ]);
?>

<h1>Step 4: Create shortcuts</h1>

<p>In the Distribution Editor, click the <span class="guibutton">Shortcuts</span> tab.</p>

<p>You need to include Start Menu shortcuts for your product. You should consider adding the following items to the Start Menu:</p>

<ul type="disc">
  <li>Product Startup</li>
  <li>Product Configuration</li>
  <li>Documentation shortcuts</li>
</ul>

<p>You may also wish to include a shortcut to your product on the user's desktop.</p>

<p>Click <span class="guibutton">New</span> to add a new shortcut to the package. Enter a description for the shortcut, and select the
program or file to start from the Program list. Four predefined program entries (Start Product), (Product Configuration), (Product
Help) and (About Product) will be translated into the appropriate shortcuts. You will see that you can also select a location and an
icon for each product. Any .ico files you add to the Distribution will be available for selection in the Icon combobox.</p>

<aside>
  <h3 class="title">Tip</h3>

  <p>Products are listed in the Control Panel Add/Remove Programs applet with Keyman Desktop 7.0. There is no option in the
  Distribution Editor to create an uninstall shortcut; this matches the Windows logo guidelines for installers.</p>
</aside>

<p><a href="step-5" title="Step 5: Compile your distribution">Step 5: Compile your distribution</a></p>
