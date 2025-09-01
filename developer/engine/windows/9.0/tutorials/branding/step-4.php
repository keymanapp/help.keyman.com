<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 4: Setting up menus for the product"
  ]);
?>

<h1>Step 4: Setting up menus for the product</h1>

<p>In the Branding Editor, click the <span class="guibutton">Tray Menu</span> tab.</p>

<p>There are 4 different menus and toolbars that can be customised in the Keyman Engine user interface, selectable from the top left
corner of the Tray Menu tab:</p>

<ul type="disc">
  <li>Tool Tray Left Button Menu is displayed when you click the left mouse button on the icon in the taskbar notification area.</li>
  <li>Tool Tray Right Button Menu is displayed when you click the right mouse button on the icon in the taskbar notification area.</li>
  <li>On Screen Keyboard Toolbar is, as the name suggests, the toolbar that is displayed at the top of the On Screen Keyboard window.</li>
  <li>On Screen Keyboard Context Menu is the menu displayed when you click the right mouse button on most parts of the On Screen
    Keyboard window.</li>
</ul>

<p>Under the combo box that lists the different menus is the list of items in the selected menu. There are 4 different types of items
that you can add to a menu:</p>

<dl>
  <dt>Text</dt>
  <dd>A text string with an optional icon to the left (on the toolbar, the text is displayed as a hint for the button)</dd>

  <dt>Graphic</dt>
  <dd>A pair of images - selected and unselected, that can be displayed in place of text. This type should not be used for the toolbar.</dd>

  <dt>Separator</dt>
  <dd>On the menu, a horizontal line between items; on the toolbar, a gap between two buttons.</dd>

  <dt>Keyboards List</dt>
  <dd>This 'virtual' item expands out to multiple items, listing all the keyboards loaded for the product.</dd>
</dl>

<p>For each of the Text and Graphic items, you should choose an Action for the item. The available actions are fairly self-explanatory.
The Run Program command is executed from the same location as the product is installed into; you should surround application names by
double quotes, and prefix any files that are in the product install folder with ".\". For example, ".\kmshell.exe"
-c .</p>

<p>You can move items up and down the list with <span class="guibutton">Move Up</span> and <span class="guibutton">Move Down</span>,
and move an item to another menu with <span class="guibutton">Move to other location</span>. Note that <span class=
"guibutton">Font</span> will only take effect within the editor window - the font for menu items within the user interface is
controlled by the locale, through the Strings tab.</p>

<p><a href="step-5" title="Step 5: Customising strings in the product">Step 5: Customising strings in the product</a></p>
