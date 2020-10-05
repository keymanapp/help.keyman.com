<?php
  require_once('includes/template.php');
  require_once('../__interface-hierarchy.php');
  head([
    'title' => "IKeymanPackage Interface"
  ]);
?>

<h1>IKeymanPackage Interface</h1>

<h2>Introduction</h2>

<p>The <code>IKeymanPackage</code> interface describes a keyboard package in Keyman Engine for Windows API. It is a base class
and describes both installed packages and package files. A keyboard package file is a bundle that contains keyboard layout(s),
visual keyboards, documentation, fonts and any other related files to simplify distribution of keyboard layouts.</p>

<h2>Interface Hierarchy</h2>

<?php print_interface_hierarchy('IKeymanPackage', '../'); ?>

<h2>Properties</h2>

<dl>
  <dt><a href='Author'><code>Author</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the author as listed in the package file.</dd>

  <dt><a href='AuthorEmail'><code>AuthorEmail</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the email address of the author as listed in the package file.</dd>
  
  <dt><a href='Copyright'><code>Copyright</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the copyright message from the package file.</dd>
  
  <dt><a href='Filename'><code>Filename</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the fully-qualified filename of the package file.</dd>

  <dt><a href='Files'><code>Files</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanPackageContentFiles'><code>IKeymanPackageContentFiles</code></a> reference which lists the files
  included within the package.</dd>

  <dt><a href='Fonts'><code>Fonts</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanPackageContentFonts'><code>IKeymanPackageContentFonts</code></a> reference which lists the fonts
  included within the package.</dd>

  <dt><a href='Graphic'><code>Graphic</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <code>IPicture</code> reference for the install screen graphic included within the package, 
  or <code>null</code> if no install screen graphic was included.</dd>

  <dt><a href='GraphicFile'><code>GraphicFile</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanPackageContentFile'><code>IKeymanPackageContentFile</code></a> reference for the install
  screen graphic included within the package, or <code>null</code> if no install screen graphic was included.</dd>

  <dt><a href='ID'><code>ID</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the identifier for the package, which is the base name of the package file without extension.</dd>

  <dt><a href='Keyboards'><code>Keyboards</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanPackageContentKeyboards'><code>IKeymanPackageContentKeyboards</code></a> reference which lists the keyboard
  layouts included within the package.</dd>

  <dt><a href='Name'><code>Name</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the descriptive name of the package file.</dd>

  <dt><a href='ReadmeFile'><code>ReadmeFile</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanPackageContentFile'><code>IKeymanPackageContentFile</code></a> reference for the install
  Readme HTML file included within the package, or <code>null</code> if no Readme file was included.</dd>
  
  <dt><a href='Version'><code>Version</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the version string from the package file.</dd>

  <dt><a href='Website'><code>Website</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns the website of the package as listed in the package file.</dd>

  <dt><a href='WelcomeFile'><code>WelcomeFile</code></a> <span class='readonly'>read only</span></dt>
  <dd>Returns an <a href='../IKeymanPackageContentFile'><code>IKeymanPackageContentFile</code></a> reference for the 
  welcome.htm documentation HTML file included within the package, or <code>null</code> if no documentation was included.</dd>
</dl>
