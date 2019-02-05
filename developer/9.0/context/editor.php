<?php
  require_once('includes/template.php');

  head([
    'title' => "Editor Window"
  ]);
?>

<h1>Editor Window</h1>

<p>Editor windows in Keyman Developer supports standard Windows editing keystrokes. Some file formats, including .kmn, .kps, .kpp, .xml, .html, .js and .json, support syntax highlighting.
Syntax highlighting for .kmn formats can be modified in Tools|Options.</p>

<h2>Special Functionality</h2>

<p>Aside from standard Windows keys, the following keystrokes are defined for the editor:</p>

<table class='display'>
  <tbody>
    <tr>
      <th>Keystroke</th>
      <th>Action</th>
    </tr>

    <tr>
      <td><kbd>Ctrl</kbd> + <kbd>Shift</kbd> + number</td>
      <td>Set a bookmark at the current line</td>
    </tr>

    <tr>
      <td><kbd>Ctrl</kbd> + number</td>
      <td>Move cursor to bookmark position</td>
    </tr>

    <tr>
      <td><kbd>Alt</kbd> + selection key/mouse</td>
      <td>Box selection functionality</td>
    </tr>

    <tr>
      <td><kbd>Insert</kbd></td>
      <td>Toggle between insert and overwrite mode</td>
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
      <td><kbd>Ctrl</kbd> + <kbd>F</kbd>, <kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>F</kbd></td>
      <td>Find text</td>
    </tr>

    <tr>
      <td><kbd>Ctrl</kbd> + <kbd>H</kbd>, <kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>H</kbd></td>
      <td>Replace text</td>
    </tr>
    
    <tr>
      <td><kbd>Ctrl</kbd> + <kbd>Shift</kbd> + <kbd>U</kbd></td>
      <td>Convert the selection to/from characters to code values</td>
    </tr>
  </tbody>
</table>
