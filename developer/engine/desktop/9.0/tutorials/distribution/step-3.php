<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 3: Fill in details about the distribution"
  ]);
?>

<h1>Step 3: Fill in details about the distribution</h1>

<p>In the Distribution Editor, select the <span class="guibutton">Details</span> tab.</p>

<h4><a name="id482490" id="id482490"></a>Destination Path</h4>

<p>Choose the destination path for your product. Note that the "C:\Program Files\" label is only descriptive - the actual
name of the Program Files folder depends on the installed locale of the destination computer. You can include subfolders in the path
name, for example "Tavultesoft\Quick French Sample" - the Distribution Editor will understand this and create a subfolder
accordingly.</p>

<h4><a name="id482527" id="id482527"></a>EULA</h4>

<p>Next, select the End User Licence Agreement (EULA) file for your product. Due to restrictions in Windows Installer, the EULA must be
in RTF format. Most word processing applications support RTF.</p>

<h4><a name="id482546" id="id482546"></a>Product Name</h4>

<p>The product name displayed on this page is not editable - it has been extracted from the .kct file and is displayed for reference
only.</p>

<h4><a name="id482532" id="id482532"></a>Version Number</h4>

<p>The version number for the product must be a 3 part number, for example "1.0.3". Whenever you make an updated version of
your product, you must increment this version number. Changing the version number tells the Distribution Editor to setup an upgrade for
the product and sets the internal GUIDs accordingly.</p>

<p>After updating the version number, the new installer will install cleanly over existing installations, upgrading any files necessary
automatically. The user will not need to uninstall the old version first.</p>

<p>It is also possible to generate a .msp patch file from the old and new versions of the .msi files, using WiX and the Windows
Installer SDK, but that is beyond the scope of this tutorial. Patch files created in this manner can be sent to Tavultesoft in order
for the Online Update functionality in Keyman Engine to be available automatically in your product. Please contact Tavultesoft Support
for further information.</p>

<aside>
  <h3 class="title">Note</h3>

  <p>If you distribute an updated version of Keyman Engine at any time, you should also increment the version number of your
  product.</p>
</aside>

<h4><a name="id482550" id="id482550"></a>Other Fields</h4>

<p>The Copyright, Author, Email and Website fields must be completed.</p>

<h4><a name="id482561" id="id482561"></a>Locale Folder</h4>

<p>If you have provided translations for the user interface in your product, you should include them in a locale subfolder, just as in
Keyman Desktop. Select this locale folder on this page in order to include all the files and subfolders there in the installer.</p>

<p><a href="step-4" title="Step 4: Create shortcuts">Step 4: Create shortcuts</a></p>
