<?php
  require_once('includes/template.php');

  head([
    'title' => "Package Editor",
    'css' => ['template.css','index.css','kmguides.css']
  ]);
?>

<h1>Package Editor</h1>

<p>The Package Editor allows you to edit a .kps package source file, which will be compiled into a .kmp package file. These files contain
a set of keyboards, documentation, fonts, and other related files, which make distribution and installation of a keyboard in Keyman
simple.</p>

<h2 id="files">Files tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/110/ui/frmPackageEditor_Files.png') ?>" alt="Package Editor - Files tab" /></p>

<p>Use the <span class="guibutton">Add</span> button to select the files to be included in the package, such as .kmx and .js keyboard files,
documentation, and related fonts; but you can include any type of file here as well.</p>

<p>If you add another .kmp package file, it will also be installed when this package is installed, but will be managed separately and uninstalled
separately.</p>

<h2 id="keyboards">Keyboards tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/110/ui/frmPackageEditor_Keyboards.png') ?>" alt="Package Editor - Keyboards tab" /></p>

<p>The Keyboards tab shows you some status information of keyboards you've added to the package. There are also optional
    font dropdowns and a required "Languages" section. The fields on the tab are:</p>

  <dl id="keyboards-status-fields">
    <dt>Description</dt>
    <dd>The keyboard name. Status.</dd>

    <dt>Files</dt>
    <dd>This shows if the added keyboard files are .js and/or .kmx files. Status.</dd>

    <dt>Version</dt>
    <dd>The keyboard version. Status.</dd>

    <dt>Is right-to-left</dt>
    <dd>Currently, this is only applicable to .js keyboards. This reflects the checkbox in the
      <a href="./keyboard-editor#details-fields">Details tab</a> of the Keyboard editor. Status.

      <aside>
        <h3>Note</h3>
        <p>Is right-to-left will only be true if the following occur:
          <ul>
            <li>"Keyboard is right-to-left" is checked in the Keyboard editor</li>
            <li>.js keyboard is added to package</li>
          </ul>
        </p>
      </aside>
    </dd>
  </dl>

<p>
  <dl id="keyboards-font-fields">
    <dt>Keyboard font</dt>
    <dd>When font files are added to the package, this dropdown tells the Keyman apps installing .js keyboards which font
        to use when rendering keyboard output. Optional.</dd>

    <dt>Display font</dt>
    <dd>When font files are added to the package, this dropdown tells the Keyman apps installing .js keyboards which font
        to use when rendering the OSK. Optional.</dd>
  </dl>

  <dl id="keyboards-languages-fields">
    <dt>Languages</dt>
    <dd>Because the language information in the .kmn source is deprecated, the "Languages" section is required.
        Use the <span class="guibutton">Add</span> button to bring up the "Select BCP 47 Tag" dialog. When Keyman installs the keyboard package,
        it will associate the keyboard with the language(s) you select here. Required.</dd>
  </dl>
</p>

<p><img src="<?= cdn('img/developer/110/ui/frmPackageEditor_Select_BCP_47_Tag.png') ?>" alt="Package Editor - Select BCP 47 Tag dialog" /></p>

<h2 id="details">Details tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/110/ui/frmPackageEditor_Details.png') ?>" alt="Package Editor - Details tab" /></p>

<p>Enter the name of the package into the Package Name field; this will be automatically filled from the name of the first keyboard you add to the package.</p>

<p>Select a HTML readme file if you have one to include in the package; this will be displayed before the package is installed as information about the package.</p>

<p>Version numbers should be in the form major.minor[.subversion]. Subversion is optional but is helpful for small bug fix releases.
Each of the sections of the version should be an integer. Keyman Desktop does integer comparisons on the version numbers, so, for
example, version 2.04 is regarded as newer than version 2.1. Alphabetic or date formats should be avoided as the installer for the
keyboard cannot determine which version is older reliably.</p>

<p>You can also tick the checkbox labelled "Package version follows keyboard version" to have the package version automatically track the keyboard version.</p>

<p>The Copyright indicates the overall copyright of the package and all its contents.</p>

<p>Fill in the individual or organisation who authored the package in the Author field, and a contact email address into the E-mail address field. These fields are optional.</p>

<p>A web site is encouraged and should be filled in the web site field, including the initial "http://" or "https://".</p>

<p>A package can optionally include a 140x250 JPEG or PNG image file to be shown during installation. This image file must be added to the
Files list in step 1, then selected from the list here.</p>

<h2 id="shortcuts">Shortcuts tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/110/ui/frmPackageEditor_Shortcuts.png') ?>" alt="Package Editor - Shortcuts tab" /></p>

<p>You can optionally have the package create a Start Menu folder, and populate it with shortcuts to the files in the package, and
optionally also a shortcut for uninstallation.</p>

<p>To add an entry, click New, and set the description, and choose a program or document to load.</p>

<p>An uninstall shortcut is no longer recommended; uninstall should be managed by the user in Keyman Configuration.</p>

<h2>Source tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/110/ui/frmPackageEditor_Source.png') ?>" alt="Package Editor - Source tab" /></p>

<p>The source of the .kps file in XML format. All details from previous tabs can be seen in the Source tab, and changes in either the Source tab or the other tabs will be 
reflected immediately in the other.</p>

<h2 id="compile">Compile tab</h2>

<p class='context-main-image'><img src="<?= cdn('img/developer/110/ui/frmPackageEditor_Build.png') ?>" alt="Package Editor - Compile tab" /></p>

<p>The final step is building the package. You must save the package file before building, then choose Compile Package to build the
package file. You can then test the package to verify that it will install correctly with the Install Package button.</p>

<p>Once you are satisfied with your package, you should consider submitting the keyboard to the <a href="/developer/keyboards/">
  Keyman Cloud Keyboards Repository</a>.</p>

<h2>Package Installers</h2>

<p>A Package Installer will install both Keyman Desktop and the package at the same time, using the same bootstrap installer that
Keyman Desktop uses. You will need to find the .msi file that is associated with the version of Keyman Desktop that you want to bundle
the keyboard with.</p>

<p>There are two ways to obtain the Keyman Desktop .msi installer</p>
<ol>
  <li>Downloading from Keyman <a href="https://downloads.keyman.com/windows/">Downloads</a></li>
  <li> Extracting the .msi installer that is embedded in the .exe installer using the "-x" option. For example, run
    <pre class="language-clike" ><code>keymandesktop-11.0.1309.0.exe -x .</code></pre> to extract the .msi file into the current folder.</li>
</ol>

<p>You cannot select the .exe file for the Package Installer - it must be an .msi file. If you create your own custom product,
  you can also use the .msi file generated in this instance here.</p>

<p>The bootstrapper installer used for a Package Installer has several command line parameters that can be used.
  <a class="link" href="../reference/tools/setup" title="Setup Bootstrapper">More information on the bootstrapper installer</a>.</p>