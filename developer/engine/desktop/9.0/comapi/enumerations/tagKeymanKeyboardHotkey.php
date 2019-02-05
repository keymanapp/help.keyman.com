<?php
  require_once('includes/template.php');

  head([
    'title' => "tagKeymanKeyboardHotkey Enumeration"
  ]);
?>

<h1>tagKeymanKeyboardHotkey Enumeration</h1>

    <p>The hotkey flags for a Keyman hotkey. Hotkeys are stored as a DWORD, with the high word being shift state: HK_ALT = $00010000,
    HK_CTRL = $00020000, HK_SHIFT = $00040000, and the low word is the virtual key code.</p>

    <h5><a name="id578405" id="id578405"></a>Enumeration Members</h5>

    <table id="id578408">
      <tr>
        <th>Member Name</th>

        <th>Member Value</th>
      </tr>

      <tr>
        <td>HK_ALT</td>

        <td>65536</td>
      </tr>

      <tr>
        <td>HK_CTRL</td>

        <td>131072</td>
      </tr>

      <tr>
        <td>HK_SHIFT</td>

        <td>262144</td>
      </tr>
    </table>
