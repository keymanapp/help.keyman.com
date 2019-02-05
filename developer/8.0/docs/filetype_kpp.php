<?php
  require_once('includes/template.php');

  head([
    'title' => "KPP files"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">KPP files</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="filetype_kpj.php">Prev</a> </td><th width="60%" align="center">File Types</th><td width="20%" align="right"> <a accesskey="n" href="filetype_kps.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="filetype_kpp">KPP files</h3></div></div></div><p>
    Used by: <span class="application">Keyman Developer</span>.
  </p><p>
    Description: A .KPP file is a Keyman product installer source file.
  </p><p>
    Details: .KPP files are created using the Distribution Editor in <span class="application">Keyman Developer.</span>. They
    contain all the details for creating a custom product installer, including what customisation file (.KCT) to use,
    what keyboard packages to include, and what shortcuts and Start Menu items to set up when the custom product is installed.
  </p><p>
    A .KPP file is compiled (with all the files specified in it) into a Windows Installer (.MSI) file for distribution.
  </p><p>
    Distributed with keyboard: No. This is a development file and should not be distributed.
  </p><h4><a name="id670624"></a>Custom Registry Settings</h4><p>
    The product file format supports adding custom registry values into the .msi file that is generated.  Under the &lt;Registry&gt; 
    key in the XML source, add &lt;RegistryKey&gt; entries, with the following attributes:
  </p><div class="itemizedlist"><ul type="disc"><li>Root: HKCU, HKCR or HKLM: These values correspond to HKEY_CURRENT_USER, HKEY_CLASSES_ROOT and HKEY_LOCAL_MACHINE, respectively</li><li>Key: The path to the registry key, for instance 'Software\Tavultesoft\Keyman Engine\8.0'</li><li>Name: The name of the registry value to set</li><li>ValueType: The data type of the registry value.  Use "S" for string and "D" for DWORD.  Other types are not currently supported</li><li>Value: The value, as a decimal integer for "D" type entries, and a string for "S" type entries.</li></ul></div><p>The following sample shows some of the values that may be used:</p><pre class="programlisting">
    &lt;Registry&gt;
      &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0' Name='hotkeys are toggles' ValueType='D' Value='1' /&gt;
      &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0' Name='simulate altgr' ValueType='D' Value='0' /&gt;
      &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0' Name='enable hints' ValueType='D' Value='0' /&gt;
      &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0\Product Options\mycustomproduct' Name='show startup' ValueType='D' Value='0' /&gt;
      &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0\Product Options\mycustomproduct' Name='show welcome' ValueType='D' Value='0' /&gt;
      &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0\Product Options\mycustomproduct' Name='check for updates' ValueType='D' Value='0' /&gt;
      &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0' Name='test keyman functioning' ValueType='D' Value='0' /&gt;
      &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0' Name='release shift keys after key press' ValueType='D' Value='0' /&gt;
      &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0' Name='auto open osk' ValueType='D' Value='0' /&gt;
      &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0' Name='auto switch osk pages' ValueType='D' Value='0' /&gt;
      &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0' Name='switch language with keyboard' ValueType='D' Value='0' /&gt;
      &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0' Name='switch language for all applications' ValueType='D' Value='0' /&gt;
    &lt;/Registry&gt;
  </pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="filetype_kpj.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="filetype.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="filetype_kps.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">KPJ files </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> KPS files</td></tr></table></div>
