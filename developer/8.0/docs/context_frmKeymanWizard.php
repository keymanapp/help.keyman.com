<?php
  require_once('includes/template.php');

  head([
    'title' => "Keyboard Wizard"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Keyboard Wizard</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="context_frmProject.php">Prev</a> </td><th width="60%" align="center">Chapter 5. Context Help</th><td width="20%" align="right"> <a accesskey="n" href="context_frmDebug.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="context_frmKeymanWizard">Keyboard Wizard</h2></div></div></div><p>
    TBD: update for version 7
    The Keyboard Wizard is the easiest way to create a simple keyboard.  There are
    six steps to creating the keyboard: entering the keyboard details, setting up the basic
    layout, drawing an icon, creating an on-screen keyboard, editing the source, and compiling and testing the keyboard.
  </p><h3><a name="id670571"></a>1. Details</h3><p>
    This page is used to set up the basic details of the keyboard: the name, Unicode or Legacy Code Page (Unicode is the
    default and is highly recommended) and brief information on the copyright and keyboard itself.
  </p><h3><a name="id671555"></a>2. Layout</h3><p>
    The Layout tab gives you a simple interface to quickly create a keyboard using a visual representation of a computer keyboard. You can drag and drop characters from the character map to create keyboard layouts. You cannot access most of Keyman's more powerful features from the Layout editor, but it will be useful to get you started on your design.
  </p><p>
    Each key can have zero or more characters assigned to it. Each key can be assigned
    a different set of characters for each shift state. You can change the shift state
    by clicking on the Shift, Ctrl, and Alt keys.
  </p><p>
    There are two ways to assign characters to the keys:
  </p><div class="itemizedlist"><ul type="disc"><li><p>Click on a key, and then type the character's code or the character in quotes into the Character Value field.</p></li><li><p>
        Select the character from the Character Map and drag and drop it onto the appropriate key.
        This will set the key to output that character.
      </p></li><li><p>
        To add the character to a key with existing characters, hold <span class="keycap"><strong>Ctrl</strong></span> while dropping it onto the key.
      </p></li></ul></div><p>
    Note that any key that does not have a character assigned to it will output what the selected Windows layout specifies.
  </p><table class="simplelist" border="0" summary="Simple list"></table><h3><a name="id670665"></a>3. Icon</h3><p>
    Here you can create an icon for the keyboard, or import an existing icon to use. This icon is displayed in the
    taskbar when the keyboard is selected and should be clearly associated with your keyboard or product.
  </p><h3><a name="id671358"></a>4. On-Screen</h3><p>
    The On-Screen Keyboard tab is used to create a layout for the Keyman Desktop On Screen Keyboard. You can import
    the setup of the Layout tab with the Fill from Layout button if the keyboard source is not too complex to generate
    the On Screen Keyboard from.
  </p><h3><a name="id672077"></a>5. Source</h3><p>
    The Source Editor is used to add more complex rules or comments to the keyboard source.
  </p><h3><a name="id671592"></a>6. Compile</h3><p>
    After you have finished the keyboard, press Ctrl+S (or choose File, Save) to save.
  </p><table class="simplelist" border="0" summary="Simple list"><tr><td>Compile Keyboard</td><td>Uninstall a keyboard from Keyman Desktop.</td></tr><tr><td>Complies the keyboard, checking for errors.</td><td>Upload to Tavultesoft</td></tr><tr><td>Start Debugging</td><td>To share a keyboard with others on the web.</td></tr><tr><td>If an error is reported when compiling the debugging process will help isolate the problem.</td><td>Open Containing Folder</td></tr><tr><td>Install</td><td>Will open the folder containing the opened keyboard.</td></tr><tr><td>Install a keyboard into Keyman Desktop.</td><td>Add to Project</td></tr><tr><td>Uninstall</td><td>Add the keyboard to an existing project.</td></tr></table><p>
    You can compile the keyboard for testing and installation by clicking the <span class="guibutton">Compile</span> button,
    or selecting Keyboard, Compile Keyboard.
  </p><p>
    To test your keyboard, press View Source, then press F5 to start the debugger or
    just press F9 to open the test window.
  </p><p>
    The Keyboard Wizard generates a .kmn Keyman Source File.  You can view the source for the keyboard
    by clicking the <span class="guibutton">View Source</span> button.  When you edit the source directly, you can perform many
    more advanced functions.  To learn how to create or edit keyboards using the source, read the <a class="link" href="tutorial_keyboard.php" title="Keyboard Tutorial">tutorial</a>.
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="context_frmProject.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="context.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="context_frmDebug.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Project Window </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Debug Window</td></tr></table></div>
