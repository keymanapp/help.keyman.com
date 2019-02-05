<?php
  require_once('includes/template.php');

  head([
    'title' => "KPS files"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">KPS files</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="filetype_kpp.php">Prev</a> </td><th width="60%" align="center">File Types</th><td width="20%" align="right"> <a accesskey="n" href="filetype_kvk.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="filetype_kps">KPS files</h3></div></div></div><p>
    Used by: <span class="application">Keyman Developer</span>.
  </p><p>
    Description: A .KPS file is a Keyman package source file.
  </p><p>
    Details: A .KPS file is created using the Package Editor in <span class="application">Keyman Developer</span>. It specifies
    what files are to be included in the package. It is compiled into a Keyman Package file (.KMP).
  </p><p>
    Distributed with keyboard: No. This is a development file and should not be distributed.
  </p><h4><a name="id670743"></a>File Format</h4><p>The optional &lt;Strings&gt; section of the file can be included to customise the text in the bootstrap installer.  The default strings are shown below:</p><pre class="programlisting">
  &lt;Strings&gt;
    &lt;String Name="ssFontSize_Dialog" Value="16"/&gt;
    &lt;String Name="ssFontSize_Title" Value="24"/&gt;
    &lt;String Name="ssFontSize_InstallButton" Value="18"/&gt;
    &lt;String Name="ssFontName_Dialog" Value=""/&gt;
    &lt;String Name="ssFontName_Title" Value=""/&gt;
    &lt;String Name="ssFontName_InstallButton" Value=""/&gt;
    &lt;String Name="ssApplicationTitle" Value="Tavulteoft Keyman Desktop Setup"/&gt;
    &lt;String Name="ssTitle" Value="%0:s Setup"/&gt;
    &lt;String Name="ssWelcome_Keyboards" Value="Setup will install %0:s and the following keyboards:"/&gt;
    &lt;String Name="ssWelcome_Plain" Value="Setup will install %0:s"/&gt;
    &lt;String Name="ssCheckForUpdates" Value="Check for &amp;amp;updates online before installing"/&gt;
    &lt;String Name="ssInstallButton" Value="&amp;amp;Install Keyman Desktop"/&gt;
    &lt;String Name="ssExitButton" Value="E&amp;amp;xit"/&gt;
    &lt;String Name="ssPackageMissing" Value="Package %0:s (%1:s) is missing.  Setup can continue but will not install this package."/&gt;
    &lt;String Name="ssErrorDownloadingUpdate" Value="Error %0:d downloading update from server"/&gt;
    &lt;String Name="ssErrorUnableToContactServer" Value="Unable to contact server"/&gt;
    &lt;String Name="ssErrorUnableToContactServerDetailed" Value="Unable to contact server, error was: %0:s"/&gt;
    &lt;String Name="ssStatusCheckingWindowsInstaller" Value="Checking Windows Installer version"/&gt;
    &lt;String Name="ssStatusCheckingInternetExplorer" Value="Checking Internet Explorer version"/&gt;
    &lt;String Name="ssStatusCheckingMSXML" Value="Checking MSXML version"/&gt;
    &lt;String Name="ssStatusCheckingForUpdates" Value="Checking for updates online"/&gt;
    &lt;String Name="ssStatusInstalling" Value="Installing Keyman Desktop"/&gt;
    &lt;String Name="ssStatusInstallingPackage" Value="Installing package %0:s"/&gt;
    &lt;String Name="ssStatusComplete" Value="Installation Complete"/&gt;
    &lt;String Name="ssQueryUpdateWindowsInstaller" Value="An updated version of Windows Installer is required to install Keyman Desktop.  Do you want to download and install it now?"/&gt;
    &lt;String Name="ssQueryUpdateInternetExplorer" Value="Internet Explorer 5.5 or later is required to install Keyman Desktop.  Do you want to download it now?"/&gt;
    &lt;String Name="ssQueryUpdateMSXML" Value="MSXML 3.0 is required to install Keyman Desktop.  Do you want to download it now?"/&gt;
    &lt;String Name="ssQueryUpdateVersion" Value="Version %1:s of Keyman Desktop has been released and is available for download.  This update is %0:dKB.  Do you want to download and install the updated version (recommended)?"/&gt;
    &lt;String Name="ssQueryUpdatePackage" Value="The package %0:s is already installed.  Do you wish to update it now?"/&gt;
    &lt;String Name="ssQueryRestart" Value="You must restart Windows before Setup can complete.  When you restart Windows, Setup will continue.  Restart now?"/&gt;
    &lt;String Name="ssErrorUnableToAutomaticallyRestart" Value="Windows was not able to be automatically restarted.  You should restart Windows before you try and start Keyman."/&gt;
    &lt;String Name="ssRedistIEUpdateRequired" Value="Internet Explorer 5.5 or later is required to install Keyman Desktop."/&gt;
    &lt;String Name="ssMustRestart" Value="You must restart Windows to complete Setup.  When you restart Windows, Setup will finish."/&gt;
    &lt;String Name="ssRedistRequired" Value="A redistributable %0:s is required but is not available in the install path.  This redistributable can be downloaded from the Tavultesoft website."/&gt;
  &lt;/Strings&gt;
  </pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="filetype_kpp.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="filetype.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="filetype_kvk.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">KPP files </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> KVK files</td></tr></table></div>
