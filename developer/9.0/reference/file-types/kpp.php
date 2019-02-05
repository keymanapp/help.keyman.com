<?php
  require_once('includes/template.php');

  head([
    'title' => "KPP files"
  ]);
?>

<h1>KPP files</h1>

<dl>
  <dt>Used by:</dt>
  <dd><span class="application">Keyman Developer</span>.</dd>

  <dt>Description:</dt>
  <dd>A .KPP file is a Keyman product installer source file.</dd>

  <dt>Details:</dt>
  <dd>.KPP files are created using the Distribution Editor in <span class="application">Keyman Developer.</span>. They contain
    all the details for creating a custom product installer, including what customisation file (<a href='kct'>.KCT</a>) to use, 
    what keyboard packages to include, and what shortcuts and Start Menu items to set up when the custom product is installed.
    A .KPP file is compiled (with all the files specified in it) into a Windows Installer (.MSI) file for distribution.</dd>

  <dt>Distributed with keyboard:</dt>
  <dd>No. This is a development file and should not be distributed.</dd>
</dl>

<h2>Custom Registry Settings</h2>

<p>The product file format supports adding custom registry values into the .msi file that is generated. Under the 
<code class='language-markup'>&lt;Registry&gt;</code> key
in the XML source, add <code class='language-markup'>&lt;RegistryKey&gt;</code> entries, with the following attributes:</p>

<dl>
  <dt>Root</dt>
  <dd><code class="language-none">HKCU</code>, <code class="language-none">HKCR</code> or <code class="language-none">HKLM</code>: 
  These values correspond to <code class="language-none">HKEY_CURRENT_USER</code>, <code class="language-none">HKEY_CLASSES_ROOT</code>
  and <code class="language-none">HKEY_LOCAL_MACHINE</code>, respectively</dd>

  <dt>Key</dt>
  <dd>The path to the registry key, for instance <code class="language-none">Software\Tavultesoft\Keyman Engine\8.0</code></dd>

  <dt>Name</dt>
  <dd>The name of the registry value to set</dd>

  <dt>ValueType</dt>
  <dd>The data type of the registry value. Use <code>S</code> for string and <code>D</code> for DWORD. Other types are not
  currently supported</dd>

  <dt>Value</dt>
  <dd>The value, as a decimal integer for <code>D</code> type entries, and a string for <code>S</code> type entries.</dd>
</dl>

<p>The following sample shows some of the values that may be used:</p>

<pre class='language-markup'><code>&lt;Registry>
  &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0' Name='hotkeys are toggles' ValueType='D' Value='1' />
  &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0' Name='simulate altgr' ValueType='D' Value='0' />
  &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0' Name='enable hints' ValueType='D' Value='0' />
  &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0\Product Options\mycustomproduct' Name='show startup' ValueType='D' Value='0' />
  &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0\Product Options\mycustomproduct' Name='show welcome' ValueType='D' Value='0' />
  &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0\Product Options\mycustomproduct' Name='check for updates' ValueType='D' Value='0' />
  &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0' Name='test keyman functioning' ValueType='D' Value='0' />
  &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0' Name='release shift keys after key press' ValueType='D' Value='0' />
  &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0' Name='auto open osk' ValueType='D' Value='0' />
  &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0' Name='auto switch osk pages' ValueType='D' Value='0' />
  &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0' Name='switch language with keyboard' ValueType='D' Value='0' />
  &lt;RegistryKey Root='HKCU' Key='Software\Tavultesoft\Keyman Engine\8.0' Name='switch language for all applications' ValueType='D' Value='0' />
&lt;/Registry>
</code></pre>
