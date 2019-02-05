<?php
  require_once('includes/template.php');

  head([
    'title' => "Package Files"
  ]);
?>

<h1 class="title" id="reference__package">Distribute keyboards to Keyman Desktop and Keyman for Mac OS X</h1>

<p>Package files contain a one or more keyboards, along with readme files, fonts and any other files you wish to include. You should
create a package file to bundle your keyboard with fonts and help into a simple, single file that is easy for an end-user to
install.</p>

<p>Keyman Desktop can install package files, including installing fonts, creating Start Menu shortcuts, and adding appropriate registry entries
for uninstallation. Keyman for Mac OS X will also install package files with fonts and keyboards, and shortcuts in the package will be available 
through the keyboard's entry in Keyman Configuration.</p>

<p>Internally, as well as your own files, the package file will contain a file "kmp.inf", which lists the details Keyman
needs to install the package. The package file is a ZIP compatible archive.</p>

<p>On Windows, the context menu for a package file has one additional entry: "Install".</p>

<h2>Package file contents</h2>

<p>A package can have a variety of different files contained within. The following files and file types are recognised by the package installer:</p>

<dl>
  <dt>*.kmx</dt>
  <dd>Keyboard files. Each of these will be installed. Keyman Configuration will not allow installation or uninstallation of a single keyboard from a package. 
  They will always be treated as a group for installation and uninstallation.</dd>
  
  <dt>*.kvk</dt>
  <dd>On Screen Keyboard files, associated with each keyboard file.</dd>
  
  <dt>welcome.htm</dt>
  <dd>Introductory help for the keyboard, HTML format. This will normally be displayed when the package is installed by the user, and is also the entry point 
  for help when accessed via Keyman's help system or Keyman Configuration.</dd>
  
  <dt>readme.htm</dt>
  <dd>Displayed before a package is installed, together with brief metadata about the package, to allow the user to determine if they wish to continue installation
  of the package.</dd>
  
  <dt>kmp.inf</dt>
  <dd>A Windows .ini format file that lists each of the files in the package, together with metadata.</dd>
  
  <dt>*.ttf, *.otf, *.ttc</dt>
  <dd>Truetype font files that will be installed with the package, and uninstalled when the package is removed.</dd>
</dl>