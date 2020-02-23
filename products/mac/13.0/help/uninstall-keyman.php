<?php
  require_once('includes/template.php');

  head([
    'title' => "Uninstalling Keyman for macOS"
  ]);
?>
<h1>Uninstalling Keyman for macOS</h1>

<p>To uninstall Keyman for macOS:</p>
<ol type="1">
  <li><p>Choose Apple menu > System Preferences.</p>
      <p><span class="inlinemediaobject"><img src="images/apple_menu.png"></span></p></li>
  <li><p>Click Keyboard, then click Input Sources.</p></li>
  <li><p>Select Keyman, then click <span class="inlinemediaobject"><img src="images/remove.png"></span></p>
      <p><span class="inlinemediaobject"><img src="images/remove_keyman.png" style="max-width:660px"></span></p></li>
  <li><p>In Finder, on the Go menu, click Go to Folder...</p></li>
  <li><p>Type "~/Library/Input Methods", then click Go</p>
      <p><span class="inlinemediaobject"><img src="images/go_to_folder.png"></span></p></li>
  <li><p>Right-click Keyman.app and choose Move to Trash</p>
      <div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3>
      <p>If you get the error 'The item "Keyman.app" can't be moved to the Trash because it's open', log out and log back in or restart your Mac and repeat the last step.</p>
      </div>
  </li>
</ol>

