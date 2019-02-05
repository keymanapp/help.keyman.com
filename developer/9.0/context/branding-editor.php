<?php
  require_once('includes/template.php');

  head([
    'title' => "Branding Editor"
  ]);
?>

<h1>Branding Editor</h1>

<p>The Branding Editor allows you to customise the user interface for a project that uses the Keyman Engine.</p>

<aside>
  <h3 class="title">Note</h3>

  <p>You must purchase a licence for the Branding Pack before you can use the Branding Editor or the Distribution Editor in Keyman
  Developer.</p>
</aside>

<h2>Details tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmKCTMain_Details.png') ?>" alt="Branding editor - Details tab" /></p>

<p>Fill in the product-specific licensing and naming details. Three licence types are supported:

<dl>
  <dt>Shareware</dt>
  <dd>Shareware licenses allow a trial period before a user must purchase a license to continue using the product. You can set the length of the 
  trial period with the Trial Day Count field. The Shareware model includes product activation and license management.</dd>
  
  <dt>Global</dt>
  <dd>Global licenses allow unlimited distribution of the product, and require negotiating a price with Tavultesoft. This model does not include
  license management or product activation.</dd>

  <dt>Freeware</dt>
  <dd>Freeware licenses are similar to Global, but the intent is to allow unlimited free distribution of the product.</dd>
</dl>

<p>The User Interface Type area allows you to specify an alternate program to replace Keyman Configuration. If this is used, then you must write
your own configuration and control application using the Keyman COM API.</p>

<h2>Icons tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmKCTMain_Icons.png') ?>" alt="Branding editor - Icons tab" /></p>

<p>The icon editor allows you to edit the icons included in the product. It is usually better to edit the icons in an external editor which allows
for multiple resolutions and colour depths. Icons can be imported with the Import button, and custom icons can be added with the Add button.</p>

<h2>Tray Menu tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmKCTMain_TrayMenu.png') ?>" alt="Branding editor - Tray Menu tab" /></p>

<p>This tab allows you to customise the left and right click menus on the notification area icon for your product. Also managed here is the toolbar in the
On Screen Keyboard, and the right-click menu for the On Screen Keyboard. Each item can be of type Text, Image, Separator, or Break. A Hotkey can be assigned
to each item. The Action allows you to specify a standard or a custom action for each item on the menu.</p>

<h2>Strings tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmKCTMain_Strings.png') ?>" alt="Branding editor - Strings tab" /></p>

<p>Every string displayed in Keyman Configuration and the Keyman On Screen Keyboard user interface can be customised here. Other translations can be added
through the Distribution Editor.</p>

<h2>Config UI tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmKCTMain_ConfigUI.png') ?>" alt="Branding editor - Config UI tab" /></p>

<p>This tab allows you to edit every dialog in Keyman Configuration, as well as key runtime dialogs in the Engine. The dialogs are HTML, but the
source files are XSLT which allow a transform from a data file to present the current configuration. See <a href="/developer/engine/desktop/9.0/branding/" title="Reference - Branding Toolkit for Keyman Developer Professional">Reference - Branding Toolkit for Keyman Developer Professional</a> for more details on each dialog.</p>

<p>The <b>Test</b> button will open a non-modal test window for the selected page. While this window is opened, it will be refreshed automatically as you change
the source. Errors in the source will cause the window to show an error message instead of the expected content.</p>

<h2>See also</h2>

<ul type="disc">
  <li><a href="/developer/engine/desktop/9.0/tutorials/branding/" title="Branding Tutorial">Branding Tutorial</a></li>
  <li><a href="/developer/engine/desktop/9.0/branding/" title="Reference - Branding Toolkit for Keyman Developer Professional">Reference - Branding Toolkit for Keyman Developer Professional</a></li>
</ul>
