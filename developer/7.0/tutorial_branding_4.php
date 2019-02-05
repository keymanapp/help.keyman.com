<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 4: Setting up menus for the product</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_branding_3.php">Prev</a> </td><th width="60%" align="center">Branding Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_branding_5.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title"><a name="tutorial_branding_4"></a>Step 4: Setting up menus for the product</h3></div></div></div><p>
    In the Branding Editor, click the <span class="guibutton">Tray Menu</span> tab.
  </p><p>
    There are 4 different menus and toolbars that can be customised in the Keyman Engine user interface, selectable from the
    top left corner of the Tray Menu tab:
  </p><div class="itemizedlist"><ul type="disc"><li><p>
        Tool Tray Left Button Menu is displayed when you click the left mouse button on the icon in the taskbar notification area.
      </p></li><li><p>
        Tool Tray Right Button Menu is displayed when you click the right mouse button on the icon in the taskbar notification area.
      </p></li><li><p>
        On Screen Keyboard Toolbar is, as the name suggests, the toolbar that is displayed at the top of the On Screen Keyboard window.
      </p></li><li><p>
        On Screen Keyboard Context Menu is the menu displayed when you click the right mouse button on most parts of the On Screen Keyboard
        window.
      </p></li></ul></div><p>
    Under the combo box that lists the different menus is the list of items in the selected menu.  There are 4 different types of items that
    you can add to a menu:
  </p><div class="itemizedlist"><ul type="disc"><li><p>Text: A text string with an optional icon to the left (on the toolbar, the text is displayed as a hint for the button)</p></li><li><p>Graphic: A pair of images - selected and unselected, that can be displayed in place of text.  This type should not be used for the toolbar.</p></li><li><p>Separator: On the menu, a horizontal line between items; on the toolbar, a gap between two buttons.</p></li><li><p>Keyboards List: This 'virtual' item expands out to multiple items, listing all the keyboards loaded for the product.</p></li></ul></div><p>
    For each of the Text and Graphic items, you should choose an Action for the item.  The available actions are fairly self-explanatory.
    The Run Program command is executed from the same location as the product is installed into; you should surround application names
    by double quotes, and prefix any files that are in the product install folder with ".\".  For example, ".\kmshell.exe" -c .
  </p><p>
    You can move items up and down the list with <span class="guibutton">Move Up</span> and <span class="guibutton">Move Down</span>, and move an item
    to another menu with <span class="guibutton">Move to other location</span>.  Note that <span class="guibutton">Font</span> will only take effect within
    the editor window - the font for menu items within the user interface is controlled by the locale, through the Strings tab.
  </p><p>
    <a class="xref" href="tutorial_branding_5.php" title="Step 5: Customising strings in the product">Step 5: Customising strings in the product</a>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_branding_3.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_branding.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_branding_5.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Step 3: Editing icons for the product </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Step 5: Customising strings in the product</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
