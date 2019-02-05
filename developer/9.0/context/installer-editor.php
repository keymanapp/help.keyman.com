<?php
  require_once('includes/template.php');

  head([
    'title' => "Distribution Editor"
  ]);
?>

<h1>Distribution Editor</h1>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmProductEditor_Licence.png') ?>" alt="Distribution editor" /></p>

<p>The Distribution Editor allows you to create an installer for a product based on Keyman Engine for Windows. This component is part of the Branding Pack. You
do not need to create an installer for a Keyman Desktop package, only if you are creating your own product.</p>

<p>See the Distribution Guide and Tutorial contained therein for more detail on the Distribution Editor.</p>

<ul type="disc">
  <li><a href="../guides/distribute/" title="Distribution Guide">Distribution Guide</a></li>
  <li><a href="../reference/tools/wix" title="Windows Installer XML (WiX)">Windows Installer XML (WiX)</a></li>
</ul>

<aside>
  <h3 class="title">Note</h3>

  <p>You must purchase a licence for the Branding Pack before you can use the Branding Editor or the Distribution Editor in Keyman
  Developer.</p>
</aside>

<p>Note: If you copy an installer source file, you must delete the GUID (globally unique identifier) section from the file because the
GUIDs are specific to that particular installer file. Keyman Developer will then regenerate the GUIDs as needed.</p>

<h2>Licence tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmProductEditor_Licence.png') ?>" alt="Distribution editor - Licence tab" /></p>

<p>This tab selects the branding .kct file that should determine the licensing and product for this installer. Keyboards compiled into this 
installer either directly or indirectly through a package installer will be rebased onto this .kct file's ProductID and will only be installable
into this product.</p>

<p>It is possible to create multiple installers with the same branding .kct file, but this is not recommended, because they will not coexist
cleanly on the same system when installing or uninstalling.</p>

<h2>Files tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmProductEditor_Files.png') ?>" alt="Distribution editor - Files tab" /></p>

<p>This tab lists all the files that are required for the install. The Keyman Engine itself will be added during compilation and does not need to
be included here. If addins are available for embedding, they will be listed in the Addins list box. The only required file is the branding .kct file,
which is specified on the Licence tab.</p>

<p>A EULA file should be included, in .rtf format.</p>

<p>Typically .kmp packages will not be included here, but rather a bundled installer will be created with the Package Installer functionality in
the Package Wizard.</p>

<h2>Details tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmProductEditor_Details.png') ?>" alt="Distribution editor - Details tab" /></p>

<p>This tab defines the product-specific metadata which will be embedded into the .msi file. All fields are required, except for EULA, Command line, and Locale Folder.</p>

<dl>
  <dt>Destination path</dt>
  <dd>Defines the default install folder for the product. This will be in the (x86) version of Program Files.</dd>
  
  <dt>EULA</dt>
  <dd>Defines a .rtf format End User License Agreement. If one is not specified, the Keyman Desktop EULA will be used by default.</dd>
  
  <dt>Product Name</dt>
  <dd>The name of the product, extracted from the .kct branding file by default.</dd>
  
  <dt>Version</dt>
  <dd>The installer version. This must be a dotted triplet of integers - major, minor, patch, and must always increment. That is, <code>1.0.1</code> > <code>1.0.0</code>, and 
  <code>1.3.0</code> > <code>1.2.9</code>, and <code>1.0.10</code> > <code>1.0.2</code>. The version number must always be updated when any changes are made to any files in an
  installer, if previous versions are already in use.</dd>
  
  <dt>Copyright</dt>
  <dd>Your product copyright</dd>
  
  <dt>Author</dt>
  <dd>The author of the product. This can be a person's name or a company name.</dd>
  
  <dt>E-mail address</dt>
  <dd>The support email address for the product. This may be displayed in Windows user interface.</dd>
  
  <dt>Web Site</dt>
  <dd>The home page for the product, including the http:// or https:// prefix.</dd>
  
  <dt>Command line</dt>
  <dd>Details a specific program to run after installation.</dd>
  
  <dt>Locale folder</dt>
  <dd>If you have translations for your product, reference the source folder here.</dd>
</dl>

<h2>Shortcuts tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmProductEditor_Shortcuts.png') ?>" alt="Distribution editor - Shortcuts tab" /></p>

<p>This tab details the shortcuts that will be created when you install the product. The typical shortcuts will include (Start Product) and (Product Configuration).</p>

<h2>Source tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmProductEditor_Source.png') ?>" alt="Distribution editor - Source tab" /></p>

<p>The source of the .kpp file in XML format. All details from previous tabs can be seen in the Source tab, and changes in either the Source tab or the other tabs will be 
reflected immediately in the other.</p>

<h2>Compile tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmProductEditor_Compile.png') ?>" alt="Distribution editor - Compile tab" /></p>

<dl>
  <dt>Compile product</dt>
  <dd>Compile product generates an .msi file, with a licensed and copy-protected product file.</dd>

  <dt>Install product</dt>
  <dd>Runs the installer for test purposes.</dd>
  
  <dt>Export to WiX</dt>
  <dd>Exports the intermediate .wxs files for this product so that the installer can be further customised. This is a one-way operation; changes to the product 
  will require generating the WiX files again.</dd>
  
  <dt>Upload to Tavultesoft</dt>
  <dd>Allows you to upload the completed installer to Tavultesoft for distribution; typically you will share a Package Installer instead.</dd>
  
  <dt>Open Containing Folder</dt>
  <dd>Opens the folder where the .kpp file is stored in Windows Explorer.</dd>
  
  <dt>Add to Project</dt>
  <dd>Adds the current product file to the active project in Keyman Developer.</dd>
</dl>
