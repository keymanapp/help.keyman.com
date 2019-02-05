<?php
  require_once('includes/template.php');

  head([
    'title' => "Package Editor"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Package Editor</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="context_frmDebugStatus.php">Prev</a> </td><th width="60%" align="center">Chapter 5. Context Help</th><td width="20%" align="right"> <a accesskey="n" href="context_frmKCTMain.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="context_frmPackageEditor">Package Editor</h2></div></div></div><h3><a name="id671446"></a>1. Files</h3><p>
        Use the <span class="guibutton">Add</span> button to select the files to be included in the package, such as
        keyboard files, documentation, and related fonts; but you can include any type of file
        here as well.
  </p><p>
        If you add a .kmp package file, it will also be installed when this package is installed,
        but will have its own uninstall entry in Control Panel.
  </p><h3><a name="id670983"></a>2. Package Type</h3><p>
        There are two types of packages: simple packages, which require Keyman Desktop to be installed
        on the user's machine, and package installers, which contain the Keyman Desktop install
        program as well as the other files, and do not need Keyman Desktop to be already installed.
  </p><p>
        For distribution within an organisation, package installers may be preferable,
        as you can have Keyman Desktop and many keyboards to be used with it distributed in one file.
        For distribution over the internet, simple packages are better, because they are smaller,
        and you will not be distributing a possibly older version of Keyman Desktop with them.
  </p><h3><a name="id671021"></a>3. Options</h3><p>
        Here you can select one of the files in your package to be displayed during installation,
        for example, a readme file or licence information. You can also run a program or load a
        document after installation, by entering it into the Command Line box.
  </p><h3><a name="id671620"></a>4. Info</h3><p>
        Here you set the package name, version number, and copyright information, as well as
        contact or web site information for the author. You can also include any additional
        information with the More button.
  </p><p>
        Version numbers should be in the form major.minor[.subversion].  Subversion is optional but 
        is helpful for small bug fix releases.  Each of the sections of the version should be an integer.
        Keyman Desktop does integer comparisons on the version numbers, so, for example, version 2.01 is 
        regarded as older than version 2.2.  Alphabetic or date formats should be avoided as the installer
        for the keyboard cannot determine which version is older reliably.
  </p><h3><a name="id671367"></a>5. Image/Startup Image</h3><p>
        A simple package can optionally include a 140x250 image file to be shown during installation.
        This image file must be added to the Files list in step 1, then selected from the list here.
  </p><p>
        A package installer can have an arbitrarily sized image file to be shown before installation.
        This image file will have three buttons on it, for Install, About and Cancel. You can use the Buttons
        Editor to set the positions of the buttons.
  </p><h3><a name="id671968"></a>6. Start Menu Options</h3><p>
        You can optionally have the package create a Start Menu folder, and populate it with shortcuts
        to the files in the package, and optionally also a shortcut for uninstallation.
  </p><p>
        To add an entry, click New, and set the description, and choose a program or document to load.
  </p><h3><a name="id672045"></a>7. Build</h3><p>
        The final step is building the package. You must save the package file before building, then
        choose Create Package to build the package file or package installer. You can then test
        the package to verify that it will install correctly with the Test Package button.
  </p><h3><a name="id671674"></a>Package Installers</h3><p>
		A Package Installer will install both Keyman Desktop and the package at the same time, using the
		same bootstrap installer that Keyman Desktop uses.  You will need to find the .msi file that is
		associated with the version of Keyman Desktop that you want to bundle the keyboard with.
	</p><p>
		The Keyman Desktop .msi installer is embedded in the .exe installer that can be downloaded from the
		Tavultesoft website.  You can extract the .msi installer using the "-x" option. For example, run
		"keymandesktoplight-7.0.243.0.exe -x ." to extract the .msi file into the current folder.
	</p><p>
		You cannot select the .exe file for this option - it must be an .msi file.  If you create your own
		custom product using the Branding Pack, you can also use the .msi file generated in this instance
		here.
	</p><p>
    The bootstrapper installer used for a Package Installer has several command line parameters that
    can be used.  <a class="link" href="reference_tools_setup.php" title="Setup Bootstrapper">More information on the bootstrapper installer</a>.
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="context_frmDebugStatus.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="context.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="context_frmKCTMain.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Debugger Status </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Branding Editor</td></tr></table></div>
