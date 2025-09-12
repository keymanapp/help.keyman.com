<?php
  require_once('includes/template.php');

  head([
    'title' => "Registry Settings"
  ]);
?>

<h1 class="title" id="reference__struct_registry">Registry Settings</h1>

<p><span class="emphasis"><em>This document refers to Keyman 6.0: please contact Tavultesoft Support if you need further information about
Keyman registry settings.</em></span></p>

<p>Keyman makes changes to the registry in the following locations (the values modified are not listed here, only the general
locations):</p>

<table class='display'>
  <tbody>
    <tr>
      <th>Location</th>
      <th>Information</th>
    </tr>

    <tr>
      <td>
        HKEY_CLASSES_ROOT\.kmx<br/>
        HKEY_CLASSES_ROOT\.kmp<br/>
        HKEY_CLASSES_ROOT\Keyman.File.Keyboard<br/>
        HKEY_CLASSES_ROOT\Keyman.File.Package
      </td>
      <td>File associations in Explorer</td>
    </tr>

    <tr>
      <td>HKEY_CURRENT_USER\Software\Tavultesoft\Keyman\6.0</td>
      <td>Keyman user settings</td>
    </tr>

    <tr>
      <td>HKEY_CURRENT_USER\Software\Tavultesoft\Keyman\6.0\Active Keyboards</td>
      <td>Per-user keyboard settings</td>
    </tr>

    <tr>
      <td>HKEY_CURRENT_USER\Software\Tavultesoft\Keyman\6.0\Active Languages</td>
      <td>Language associations</td>
    </tr>

    <tr>
      <td>HKEY_CURRENT_USER\Software\Tavultesoft\Keyman\6.0\Installed Keyboards</td>
      <td>Keyman user keyboards</td>
    </tr>

    <tr>
      <td>HKEY_CURRENT_USER\Software\Tavultesoft\Keyman\6.0\Installed Packages</td>
      <td>Keyman user packages</td>
    </tr>

    <tr>
      <td>HKEY_CURRENT_USER\Software\Tavultesoft\Keyman\6.0\Add-ins</td>
      <td>Keyman user add-ins</td>
    </tr>

    <tr>
      <td>HKEY_CURRENT_USER\Software\Microsoft\Windows\CurrentVersion\Run</td>
      <td>Keyman startup with Windows</td>
    </tr>

    <tr>
      <td>HKEY_LOCAL_MACHINE\Software\Tavultesoft\Keyman\6.0</td>
      <td>Keyman global settings</td>
    </tr>

    <tr>
      <td>HKEY_LOCAL_MACHINE\Software\Tavultesoft\Keyman\6.0\Installed Keyboards</td>
      <td>Keyman global keyboards</td>
    </tr>

    <tr>
      <td>HKEY_LOCAL_MACHINE\Software\Tavultesoft\Keyman\6.0\Installed Packages</td>
      <td>Keyman global packages</td>
    </tr>

    <tr>
      <td>HKEY_LOCAL_MACHINE\Software\Tavultesoft\Keyman\6.0\Add-ins</td>
      <td>Keyman global packages</td>
    </tr>

    <tr>
      <td>HKEY_LOCAL_MACHINE\Software\Microsoft\Windows\CurrentVersion\Uninstall\Keyman Keyboard *</td>
      <td>Keyman keyboard uninstall keys</td>
    </tr>

    <tr>
      <td>HKEY_LOCAL_MACHINE\Software\Microsoft\Windows\CurrentVersion\Uninstall\Tavultesoft Keyman 6.0</td>
      <td>Keyman runtime uninstall key</td>
    </tr>

    <tr>
      <td>HKEY_LOCAL_MACHINE\System\CurrentControlSet\Control\Keyboard Layouts\0000xxFE</td>
      <td>Keyman associated Windows keyboards</td>
    </tr>
  </tbody>
</table>
