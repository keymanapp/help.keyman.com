<?php
  require_once('includes/template.php');

  head([
    'title' => "Editor Window"
  ]);
?>

<h1>Editor Window</h1>

<p>Editor windows in Keyman Developer supports standard Windows editing keystrokes. Many file formats, including .kmn, .kps, .xml, .html, .js and .json, support syntax highlighting.
The text editor in Keyman uses the Monaco component from Visual Studio Code, so all the functionality available in that editor is also available here.
</p>

<h2>Special Functionality</h2>

<p>Aside from standard Windows keys, the following keystrokes are defined for the editor:</p>

<table class='display'>
  <tbody>
    <tr>
      <th>Keystroke</th>
      <th>Action</th>
    </tr>

    <tr>
      <td><kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>M</kbd></td>
      <td>Toggle Message Window visibility</td>
    </tr>

    <tr>
      <td><kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>C</kbd></td>
      <td>Open Character Map</td>
    </tr>

    <tr>
      <td><kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>I</kbd></td>
      <td>Toggle Character Identifier visibility</td>
    </tr>

    <tr>
      <td><kbd>Ctrl</kbd> + <kbd>F</kbd></td>
      <td>Find text</td>
    </tr>

    <tr>
      <td><kbd>Ctrl</kbd> + <kbd>H</kbd></td>
      <td>Replace text</td>
    </tr>
    
    <tr>
      <td><kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>U</kbd></td>
      <td>Convert the selection to/from characters to code values</td>
    </tr>
  </tbody>
</table>
