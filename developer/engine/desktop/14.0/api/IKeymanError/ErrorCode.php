<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanError::ErrorCode Property"
  ]);
?>

<h1>IKeymanError::ErrorCode Property</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanError::ErrorCode</code> property returns an integer error code for the
error.</p>

<h2>Specification</h2>

<pre class="language-clike"><code>readonly long ErrorCode</code></pre>

<h2>Defined Error Codes</h2>

<table class='display'>
  <!-- see /engine/kmcomapi/util/KeymanErrorCodes.xlsx in Keyman source for way of generating this table -->
  <thead>
    <tr><th>Code</th><th>Identifier</th><th>Message</th><th>Source</th></tr>
  </thead>
  <tbody>
    <tr>
      <td>0xA0000200</td>
      <td>KMN_E_Install_InvalidFile</td>
      <td>The file %0:s could not be installed because of the following error: %1:s</td>
      <td>InstallKeyboard</td>
    </tr>
    <tr>
      <td>0xA0000201</td>
      <td>KMN_E_Install_AlreadyInstalled</td>
      <td>A keyboard with the name %0:s is already installed.</td>
      <td>InstallKeyboard</td>
    </tr>
    <tr>
      <td>0xA0000202</td>
      <td>KMN_E_Install_FailureToCreateDirectories</td>
      <td>Failure to create directories for keyboard %0:s.</td>
      <td>InstallKeyboard</td>
    </tr>
    <tr>
      <td>0xA0000203</td>
      <td>KMN_E_Uninstall_InvalidKeyboard</td>
      <td>The keyboard %0:s could not be uninstalled because it was invalid.</td>
      <td>UninstallKeyboard</td>
    </tr>
    <tr>
      <td>0xA0000204</td>
      <td>KMN_E_Uninstall_KeyboardPartOfPackage</td>
      <td>The keyboard %0:s could not be uninstalled because it was part of package %1:s.</td>
      <td>UninstallKeyboard</td>
    </tr>
    <tr>
      <td>0xA0000205</td>
      <td>KMN_E_Uninstall_AdminKeyboardInstalled</td>
      <td>You do not have sufficient privileges to uninstall keyboard %0:s.</td>
      <td>UninstallKeyboard</td>
    </tr>
    <tr>
      <td>0x20000206</td>
      <td>KMN_W_UninstallFileNotFound</td>
      <td>The file %0:s was not found during the uninstall.</td>
      <td>UninstallKeyboard</td>
    </tr>
    <tr>
      <td>0x20000207</td>
      <td>KMN_W_UninstallFileInUse</td>
      <td>The file %0:s is currently in use and will be removed after the next reboot.</td>
      <td>UninstallKeyboard</td>
    </tr>
    <tr>
      <td>0x20000208</td>
      <td>KMN_W_UninstallError_UnableToDeleteKeyboardRegistrySetting</td>
      <td>Unable to delete keyboard %0:s registry key %1:s</td>
      <td>UninstallKeyboard</td>
    </tr>
    <tr>
      <td>0x20000209</td>
      <td>KMN_W_UninstallError_UnableToRemoveDirectory</td>
      <td>Unable to remove directory for keyboard %0:s (error %1:s)</td>
      <td>UninstallKeyboard</td>
    </tr>
    <tr>
      <td>0xA000020A</td>
      <td>KMN_E_PackageInstall_UnableToGetTempPath</td>
      <td>Unable to find a temp path to install package.</td>
      <td>InstallPackage</td>
    </tr>
    <tr>
      <td>0xA000020B</td>
      <td>KMN_E_PackageInstall_UnableToGetTempFileName</td>
      <td>Unable to get a temp file name to install package.</td>
      <td>InstallPackage</td>
    </tr>
    <tr>
      <td>0xA000020C</td>
      <td>KMN_E_PackageInstall_UnableToCreateTemporaryDirectory</td>
      <td>Unable to create temporary folder to install package.</td>
      <td>InstallPackage</td>
    </tr>
    <tr>
      <td>0xA000020D</td>
      <td>KMN_E_PackageInstall_UnableToFindInfFile</td>
      <td>Unable to locate inf file from package - it may be damaged.  Please download the package again and try again.</td>
      <td>InstallPackage</td>
    </tr>
    <tr>
      <td>0xA000020E</td>
      <td>KMN_E_PackageInstall_PackageAlreadyInstalled</td>
      <td>The package is already installed.</td>
      <td>InstallPackage</td>
    </tr>
    <tr>
      <td>0xA000020F</td>
      <td>KMN_E_PackageInstall_UnableToCopyFile</td>
      <td>Unable to copy file %0:s for the package to %1:s - you may have insufficient privileges, or you may have run out of disk space.</td>
      <td>InstallPackage</td>
    </tr>
    <tr>
      <td>0x20000210</td>
      <td>KMN_W_InstallPackage_UnableToFindProgramsFolder</td>
      <td>Unable to find Start Menu folder</td>
      <td>InstallPackage</td>
    </tr>
    <tr>
      <td>0x20000211</td>
      <td>KMN_W_InstallPackage_UnableToCreateStartMenuEntry</td>
      <td>Unable to create Start Menu entry %0:s</td>
      <td>InstallPackage</td>
    </tr>
    <tr>
      <td>0x20000212</td>
      <td>KMN_W_InstallPackage_CannotRunExternalProgram</td>
      <td>Cannot run external program %0:s (error %1:s)</td>
      <td>InstallPackage</td>
    </tr>
    <tr>
      <td>0x20000213</td>
      <td>KMN_W_InstallFont_CannotInstallFont</td>
      <td>Cannot install font %0:s (error %2:d: %1:s)</td>
      <td>InstallFont</td>
    </tr>
    <tr>
      <td>0x20000214</td>
      <td>KMN_W_InstallFont_CannotInstallFontAdmin</td>
      <td>Cannot install font registry settings: %0:s</td>
      <td>InstallFont</td>
    </tr>
    <tr>
      <td>0xA0000215</td>
      <td>KMN_E_Collection_InvalidIndex</td>
      <td>Index %0:s out of bounds</td>
      <td>Collection</td>
    </tr>
    <tr>
      <td>0xA0000216</td>
      <td>KMN_E_PackageUninstall_NotFound</td>
      <td>Cannot find the package to uninstall</td>
      <td>UninstallPackage</td>
    </tr>
    <tr>
      <td>0xA0000217</td>
      <td>KMN_E_PackageUninstall_AdminRequired</td>
      <td>This package requires administrator access to uninstall</td>
      <td>UninstallPackage</td>
    </tr>
    <tr>
      <td>0x20000218</td>
      <td>KMN_W_PackageUninstall_FileInUse</td>
      <td>The file %0:s is in use and will be removed on next reboot</td>
      <td>UninstallPackage</td>
    </tr>
    <tr>
      <td>0x20000219</td>
      <td>KMN_W_UninstallFont_FontInUse</td>
      <td>The font %0:s is in use and will be removed on next reboot.  Please reboot before attempting to install any additional fonts</td>
      <td>UninstallFont</td>
    </tr>
    <tr>
      <td>0xA000021A</td>
      <td>KMN_E_VisualKeyboard_Install_AlreadyInstalled</td>
      <td>A visual keyboard is already installed for keyboard %0:s</td>
      <td>InstallVisualKeyboard</td>
    </tr>
    <tr>
      <td>0xA000021B</td>
      <td>KMN_E_VisualKeyboard_Install_CouldNotInstall</td>
      <td>The visual keyboard %0:s could not be installed</td>
      <td>InstallVisualKeyboard</td>
    </tr>
    <tr>
      <td>0xA000021C</td>
      <td>KMN_E_VisualKeyboard_Install_KeyboardNotInstalled</td>
      <td>The visual keyboard %0:s could not be installed because the keyboard %1:s was not found</td>
      <td>InstallVisualKeyboard</td>
    </tr>
    <tr>
      <td>0xA000021D</td>
      <td>KMN_E_KeymanControl_CannotLoadKeyman32</td>
      <td>Could not load keyman32.dll.  Windows returned the error code %0:8x (%1:s)</td>
      <td>Control</td>
    </tr>
    <tr>
      <td>0xA000021E</td>
      <td>KMN_E_KeymanControl_CannotStartProduct</td>
      <td>Could not find %0:s to start Keyman Product %1:s</td>
      <td>Control</td>
    </tr>
    <tr>
      <td>0xA000021F</td>
      <td>KMN_E_KeymanControl_CannotRegisterControllerWindow</td>
      <td>Could not register controller window</td>
      <td>Control</td>
    </tr>
    <tr>
      <td>0xA0000220</td>
      <td>KMN_E_KeymanControl_CannotUnregisterControllerWindow</td>
      <td>Could not unregister controller window</td>
      <td>Control</td>
    </tr>
    <tr>
      <td>0xA0000221</td>
      <td>KMN_E_KeyboardInstall_UnableToCopyFile</td>
      <td>Unable to copy file %0:s to %1:s - you may have insufficient privileges, or you may have run out of disk space.</td>
      <td>InstallKeyboard</td>
    </tr>
    <tr>
      <td>0xA0000222</td>
      <td>KMN_E_Install_KeyboardMustBeInstalledByAdmin</td>
      <td>Error installing keyboard %0:s: Keyman requires keyboards to be installed by administrator</td>
      <td>InstallKeyboard</td>
    </tr>
    <tr>
      <td>0x20000223</td>
      <td>KMN_W_KeyboardUninstall_ProfileNotFound</td>
      <td>A language profile for %0:s could not be uninstalled for %1:s (it may be missing)</td>
      <td>UninstallKeyboardLanguageProfile</td>
    </tr>
    <tr>
      <td>0xA0000224</td>
      <td>KMN_E_ProfileInstall_MustBeAllUsers</td>
      <td>You do not have sufficient privileges to install the language profile for %0:s</td>
      <td>InstallKeyboardLanguageProfile</td>
    </tr>
    <tr>
      <td>0xA0000225</td>
      <td>KMN_E_ProfileUninstall_MustBeAllUsers</td>
      <td>You do not have sufficient privileges to uninstall the language profile for %0:s</td>
      <td>UninstallKeyboardLanguageProfile</td>
    </tr>
    <tr>
      <td>0xA0000226</td>
      <td>KMN_E_ProfileInstall_KeyboardNotFound</td>
      <td>The keyboard %0:s is not installed</td>
      <td>InstallKeyboardLanguageProfile</td>
    </tr>
    <tr>
      <td>0xA0000227</td>
      <td>KMN_E_RecompileMnemonicLayout_mcompileFailed</td>
      <td>The keyboard %2:s was not generated because mcompile failed to start with error %0:d (%1:s)</td>
      <td>RecompileMnemonicKeyboard</td>
    </tr>
    <tr>
      <td>0xA0000228</td>
      <td>KMN_E_RecompileMnemonicLayout_mcompileError</td>
      <td>The keyboard %2:s was not generated because mcompile failed with error %0:d: %1:s</td>
      <td>RecompileMnemonicKeyboard</td>
    </tr>
    <tr>
      <td>0xA0000229</td>
      <td>KMN_E_RecompileMnemonicLayout_mcompileUnexpected</td>
      <td>The keyboard %0:s was not generated due to an unknown error.</td>
      <td>RecompileMnemonicLayout</td>
    </tr>
    <tr>
      <td>0x2000022A</td>
      <td>KMN_W_KeyboardInstall_InvalidIcon</td>
      <td>The icon for keyboard %0:s was not converted due to an error: %1:s</td>
      <td>InstallKeyboard</td>
    </tr>
    <tr>
      <td>0x2000022B</td>
      <td>KMN_W_TSF_COMError</td>
      <td>Error %0:s updating TSF</td>
      <td>TSF</td>
    </tr>
  </tbody>
</table>