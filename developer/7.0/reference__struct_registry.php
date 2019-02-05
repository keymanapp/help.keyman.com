<?php  require_once('includes/template.php');    head([    'title' => 'Keyman Support | Type to the world in your language',    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']  ]);?><body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Registry Settings</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference__package.php">Prev</a> </td><th width="60%" align="center">Language Structure</th><td width="20%" align="right"> <a accesskey="n" href="reference__struct.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title"><a name="reference__struct_registry"></a>Registry Settings</h4></div></div></div><p>
    <span class="emphasis"><em>This document is incomplete: please contact Tavultesoft Support if you need further information about
        Keyman registry settings.</em></span>
  </p><p>
        Keyman makes changes to the registry in the following locations (the values modified are not listed here,
        only the general locations):
      </p><table><tbody><tr>
      <th>Location</th>
      <th>Information </th>
    </tr><tr>
      <td>
        <p>HKEY_CLASSES_ROOT\.kmx</p>
        <p>HKEY_CLASSES_ROOT\.kmp</p>
        <p>HKEY_CLASSES_ROOT\Keyman.File.Keyboard</p>
        <p>HKEY_CLASSES_ROOT\Keyman.File.Package</p>
      </td>
      <td>File associations in Explorer </td>
    </tr><tr>
      <td>HKEY_CURRENT_USER\Software\Tavultesoft\Keyman\\6.0 </td>
      <td>Keyman user settings </td>
    </tr><tr>
      <td>HKEY_CURRENT_USER\Software\Tavultesoft\Keyman\\6.0\Active Keyboards </td>
      <td>Per-user keyboard settings </td>
    </tr><tr>
      <td>HKEY_CURRENT_USER\Software\Tavultesoft\Keyman\\6.0\Active Languages </td>
      <td>Language associations </td>
    </tr><tr>
      <td>HKEY_CURRENT_USER\Software\Tavultesoft\Keyman\\6.0\Installed Keyboards </td>
      <td>Keyman user keyboards </td>
    </tr><tr>
      <td>HKEY_CURRENT_USER\Software\Tavultesoft\Keyman\\6.0\Installed Packages </td>
      <td>Keyman user packages </td>
    </tr><tr>
      <td>HKEY_CURRENT_USER\Software\Tavultesoft\Keyman\\6.0\Add-ins </td>
      <td>Keyman user add-ins </td>
    </tr><tr>
      <td>HKEY_CURRENT_USER\Software\Microsoft\Windows\CurrentVersion\Run </td>
      <td>Keyman startup with Windows </td>
    </tr><tr>
      <td>HKEY_LOCAL_MACHINE\Software\Tavultesoft\Keyman\\6.0 </td>
      <td>Keyman global settings </td>
    </tr><tr>
      <td>HKEY_LOCAL_MACHINE\Software\Tavultesoft\Keyman\\6.0\Installed Keyboards </td>
      <td>Keyman global keyboards </td>
    </tr><tr>
      <td>HKEY_LOCAL_MACHINE\Software\Tavultesoft\Keyman\\6.0\Installed Packages </td>
      <td>Keyman global packages </td>
    </tr><tr>
      <td>HKEY_LOCAL_MACHINE\Software\Tavultesoft\Keyman\\6.0\Add-ins </td>
      <td>Keyman global packages </td>
    </tr><tr>
      <td>HKEY_LOCAL_MACHINE\Software\Microsoft\Windows\CurrentVersion\Uninstall\Keyman Keyboard * </td>
      <td>Keyman keyboard uninstall keys </td>
    </tr><tr>
      <td>HKEY_LOCAL_MACHINE\Software\Microsoft\Windows\CurrentVersion\Uninstall\Tavultesoft Keyman 6.0 </td>
      <td>Keyman runtime uninstall key </td>
    </tr><tr>
      <td>HKEY_LOCAL_MACHINE\System\CurrentControlSet\Control\Keyboard Layouts\\0000xxFE </td>
      <td>Keyman associated Windows keyboards </td>
    </tr></tbody></table></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference__package.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_language_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference__struct.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Package Files </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Language Structure</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
