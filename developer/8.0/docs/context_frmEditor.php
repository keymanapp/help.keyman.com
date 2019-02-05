<?php
  require_once('includes/template.php');

  head([
    'title' => "Editor Window"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Editor Window</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="context_frmOSKEditor.php">Prev</a> </td><th width="60%" align="center">Chapter 5. Context Help</th><td width="20%" align="right"> <a accesskey="n" href="context_frmNew.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="context_frmEditor">Editor Window</h2></div></div></div><p>
        The Editor window in TIKE supports standard Windows keystrokes.  If the coloured text bothers you, it
        can be turned off or modified from the default in the <span class="guimenu">Tools</span>|<span class="guimenuitem">Options</span> dialog.
      </p><p>
        You can switch between the editor window and the Keyboard Wizard window with tje <span class="guimenu">View</span>|<span class="guimenuitem">Open in Wizard</span> 
        menu item.
      </p><p>
        Clicking right mouse button on a BITMAP or store(&amp;bitmap) line will allow you to open the 
        bitmap for editing.
      </p><h3><a name="id672480"></a>Special Functionality</h3><p>
        Aside from standard Windows keys, the following keystrokes are defined for the editor:
      </p><table><tbody><tr>
      <th>Keystroke</th>
      <th>Action</th>
    </tr><tr>
      <td>Ctrl + Shift + number</td>
      <td>Set a bookmark at the current line</td>
    </tr><tr>
      <td>Ctrl + number</td>
      <td>Move cursor to bookmark position</td>
    </tr><tr>
      <td>Alt + selection key/mouse</td>
      <td>Box selection functionality</td>
    </tr><tr>
      <td>Insert</td>
      <td>Toggle between insert and overwrite mode</td>
    </tr><tr>
      <td>Ctrl + Shift + M</td>
      <td>Toggle message window visibility</td>
    </tr><tr>
      <td>Ctrl + Shift + C</td>
      <td>Open character map</td>
    </tr><tr>
      <td>Ctrl + Shift + W</td>
      <td>Open current keyboard in Keyboard Wizard</td>
    </tr><tr>
      <td>Ctrl + F, Ctrl + Shift + F</td>
      <td>Find text</td>
    </tr><tr>
      <td>Ctrl + H, Ctrl + Shift + H</td>
      <td>Find text</td>
    </tr></tbody></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="context_frmOSKEditor.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="context.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="context_frmNew.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">On Screen Keyboard Editor </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> New File Dialog</td></tr></table></div>
