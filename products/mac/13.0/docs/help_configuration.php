<?php
require_once('includes/template.php');

head([
  'title' => "Help - Keyman for macOS Configuration"
]);
?>

<div class="navheader">
  <table width="100%" summary="Navigation header">
    <tr>
      <th colspan="3" align="center">Keyman for macOS Configuration</th>
    </tr>
    <tr>
      <td width="20%" align="left"><a accesskey="p" href="help.php">Prev</a> </td>
      <th width="60%" align="center">Chapter 4. Additional Help</th>
      <td width="20%" align="right"> <a accesskey="n" href="help_uninstall_keyman.php">Next</a></td>
    </tr>
  </table>
  <hr>
</div>

<div class="section" lang="en">
  <div class="titlepage"><h2 class="title" style="clear: both" id="help_configuration">Help - Keyman for macOS
      Configuration</h2></div>

  <p>The Configuration window allows you to change several things about the way Keyman works, as well as access
    information about installed keyboards. To display the Configuration window, do the following:</p>
  <div class="orderedlist">
    <ol type="1">
      <li><span class="inlinemediaobject"><img src="images/menu_bar_keyman.png"></span>
        <p>Make sure that Keyman for macOS is the active input source (as shown above). For more information, see <a
            href="start_tutorial.php">Getting Started with Keyman for macOS</a>.</p></li>
      <li><p>Click the Keyman icon to display the Input menu.</p></li>
      <li><p>On the Input menu, in the section for Keyman, click Configuration. Note: If you just installed Keyman and
          the Configuration menu is not available, please restart the computer.</p>
        <p><span class="inlinemediaobject"><img src="images/keyman_menu_config.png"></span></p></li>
  </div>
  <p>The Keyman Configuration window appears:<span class="inlinemediaobject"><img src="images/keyman_config.png"></span>
  </p>

  <p>Following are instructions for performing various tasks in the Configuration window:
  <p>

  <h3>Enable and Disable a Keyboard</h3>
  <p>Keyman keyboards can be enabled and disabled. Disabling a Keyman keyboard removes it from the Keyman menu and
    Keyman Toolbox but does not uninstall the keyboard. This is useful if:</p>
  <div class="itemizedlist">
    <ul type="disc">
      <li>You are using a single keyboard layout from a package with multiple keyboards and you want to remove the extra
        keyboards from the Keyman Toolbox and menu.
      </li>
      <li>You have a keyboard layout installed which you aren't currently using but don't want to uninstall.</li>
    </ul>
  </div>
  <p>To disable a Keyman keyboard, untick the corresponding checkbox. To enable a disabled keyboard, tick the
    checkbox.</p>

  <h3>Remove Keyboards</h3>
  <p>Removing a Keyman keyboard package uninstalls and deletes the entire package. Although you can disable individual
    keyboards (as described above), if an installed package contains more than one keyboard, you cannot remove them
    individually. To remove a keyboard package, click the delete button <span class="inlinemediaobject"><img
        src="images/remove_button.png"></span> in the far right of the row with the package name.</p>

  <h3>Display Keyboard Information</h3>
  <p>All Keyman keyboard packages contain some basic metadata information, such as the name and version, included fonts,
    author, and copyright. To display this information, click the information button <span
      class="inlinemediaobject"><img src="images/information_button.png"></span> to the right of the package name.</p>

  <h3>Display Keyboard Help</h3>
  <p>Many Keyman keyboard packages contain help files, with instructions for learning to use the keyboard(s) to type
    special characters. This is especially helpful for keyboards that use multiple key sequences to generate characters,
    since it is not usually possible to convey this information via an on-screen keyboard showing the individual
    characters associated with the keys on the physical keyboard. To open a window that will allow you to view the
    keyboard help, click the help button <span class="inlinemediaobject"><img src="images/help_button.png"></span> to
    the right of the package name. (If this button is disabled, it means that no help files were included in the
    package.)</p>

  <h3>Keyman Configuration Options</h3>
  <p>If you select the <b>Options</b> tab on the Keyman Configuration window, you will see that there are two
    configuration options that affect the general behavior of Keyman, regardless of which keyboard is active:</p>
  <div class="itemizedlist">
    <ul type="disc">
      <li><b>Always show on-screen keyboard</b>: If this option is ticked, the on-screen keyboard will be displayed
        automatically whenever Keyman becomes the active input source.
      </li>
      <li><b>Use verbose Console logging</b>: If this option is ticked, advanced troubleshooting information will be
        sent to the system log. If the Keyman development team is assisting you to resolve a problem, they might
        instruct you to enable this option so you can supply them with a log of important debugging messages from
        Keyman. You can view this log information yourself using the Console utility, by filtering to show only messages
        from the Keyman process (although it probably won't be very meaningful to you unless you are a computer
        programmer and you are looking at the Keyman for macOS source code). Console is a log viewer developed by Apple
        Inc. and included with macOS.
      </li>
    </ul>
  </div>

  <h3>Keyman Configuration Support</h3>
  <p>The <b>Support</b> tab on the Keyman Configuration window displays the same program help information available
    on-line at <a href="http://help.keyman.com/products/mac/">help.keyman.com/products/mac</a>.</p>

</div>
<div class="navfooter">
  <hr>
  <table width="100%" summary="Navigation footer">
    <tr>
      <td width="40%" align="left"><a accesskey="p" href="help.php">Prev</a> </td>
      <td width="20%" align="center"><a accesskey="u" href="help.php">Up</a></td>
      <td width="40%" align="right"> <a accesskey="n" href="help_uninstall_keyman.php">Next</a></td>
    </tr>
    <tr>
      <td width="40%" align="left" valign="top">Chapter 4. Additional Help </td>
      <td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td>
      <td width="40%" align="right" valign="top"> Help - Uninstall Keyman for macOS</td>
    </tr>
  </table>
</div>
