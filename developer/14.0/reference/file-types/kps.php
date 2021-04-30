<?php
  require_once('includes/template.php');

  head([
    'title' => "KPS files"
  ]);
?>

<h1>KPS files</h1>

<dl>
  <dt>Used by:</dt>
  <dd><span class="application">Keyman Developer</span>.</dd>

  <dt>Description:</dt>
  <dd>A .KPS file is a Keyman package source file.</dd>

  <dt>Details:</dt>
  <dd>A .KPS file is created using the Package Editor in <span class="application">Keyman Developer</span>. It specifies what
    files are to be included in the package. It is compiled into a Keyman Package file (<a href='kmp'>.KMP</a>).</dd>

  <dt>Distributed with keyboard:</dt>
  <dd>No. This is a development file and should not be distributed.</dd>
</dl>

<h2>File format</h2>

<p>The optional <code class='language-markup'>&lt;Strings></code> section of the file can be included to customise the text in the bootstrap installer. The default
strings are shown below:</p>
<pre class='language-markup'><code>&lt;Strings>
  &lt;String Name="ssFontSize_Dialog" Value="16"/>
  &lt;String Name="ssFontSize_Title" Value="24"/>
  &lt;String Name="ssFontSize_InstallButton" Value="18"/>
  &lt;String Name="ssFontName_Dialog" Value=""/>
  &lt;String Name="ssFontName_Title" Value=""/>
  &lt;String Name="ssFontName_InstallButton" Value=""/>
  &lt;String Name="ssApplicationTitle" Value="Keyman Developer Setup"/>
  &lt;String Name="ssTitle" Value="%0:s Setup"/>
  &lt;String Name="ssWelcome_Plain" Value="Setup will install %0:s"/>
  &lt;String Name="ssSIL" Value="Created by SIL International"/>
  &lt;String Name="ssCheckForUpdates" Value="Check for &amp;amp;updates online before installing"/>
  &lt;String Name="ssInstallButton" Value="&amp;amp;Install Keyman Developer"/>
  &lt;String Name="ssExitButton" Value="E&amp;amp;xit"/>

  &lt;String Name="ssErrorDownloadingUpdate" Value="Error %0:d downloading update from server"/>
  &lt;String Name="ssErrorUnableToContactServer" Value="Unable to contact server"/>
  &lt;String Name="ssErrorUnableToContactServerDetailed" Value="Unable to contact server, error was: %0:s"/>

  &lt;String Name="ssStatusCheckingForUpdates" Value="Checking for updates online"/>
  &lt;String Name="ssStatusInstalling" Value="Installing Keyman Developer"/>
  &lt;String Name="ssStatusComplete" Value="Installation Complete"/>

  &lt;String Name="ssQueryUpdateVersion" Value="Version %1:s of Keyman Developer has been released and is available for download.
   This update is %0:dKB. Do you want to download and install the updated version (recommended)?"/>

  &lt;String Name="ssQueryRestart" Value="You must restart Windows before Setup can complete.  When you restart Windows, Setup will continue.  Restart now?"/>
  &lt;String Name="ssErrorUnableToAutomaticallyRestart" Value="Windows was not able to be automatically restarted.  You should restart Windows before you try and start Keyman."/>

  &lt;String Name="ssMustRestart" Value="You must restart Windows to complete Setup.  When you restart Windows, Setup will finish."/>
  &lt;String Name="ssCheckForUpdatesError" Value="The online update check failed with an error: %0:s"/>
&lt;/Strings>
</code></pre>
