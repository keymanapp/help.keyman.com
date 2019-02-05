<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:           Package Editor

BODY

SECTION:        Package Editor

HEADING:        Overview

TEXT:           After you have created a keyboard, you will probably want to package it up
                for distribution on the Internet or elsewhere.  Keyman Developer provides a facility for
                doing this simply with its Package Editor.
                
                To create a new package, choose <b>File, New, Package</b>. The Package Editor breaks up the
                task of creating a package into seven steps.

HEADING:        1. Choose the files

TEXT:           Use the <b>Add</b> button to select the files to be included in the package, such as
                keyboard files, documentation, and related fonts; but you can include any type of file
                here as well.
                
                If you add a .kmp package file, it will also be installed when this package is installed,
                but will have its own uninstall entry in Control Panel.


HEADING:        2. Select a package type

TEXT:           There are two types of packages: simple packages, which require Keyman to be installed
                on the user's machine, and redistributable installers, which contain the Keyman install
                program as well as the other files, and do not need Keyman to be already installed.
                
                For distribution within an organisation, redistributable installers may be preferable,
                as you can have Keyman and many keyboards to be used with it distributed in one file.
                For distribution over the internet, simple packages are better, because they are smaller,
                and you will not be distributing a possibly older version of Keyman with them.


HEADING:        3. Set options

TEXT:           Here you can select one of the files in your package to be displayed during installation,
                for example, a readme file or licence information. You can also run a program or load a
                document after installation, by entering it into the Command Line box.


HEADING:        4. Enter package information

TEXT:           Here you set the package name, version number, and copyright information, as well as
                contact or web site information for the author. You can also include any additional
                information with the More button.


HEADING:        5. Choose an image or startup image  (Professional edition only)

TEXT:           A simple package can optionally include a 140x250 image file to be shown during installation.
                This image file must be added to the Files list in step 1, then selected from the list here.
                
                A redistributable installer can have an arbitrarily sized image file to be shown before installation.
                This image file will have three buttons on it, for Install, About and Cancel. You can use the Buttons
                Editor to set the positions of the buttons.


HEADING:        6. Set Start Menu options

TEXT:           You can optionally have the package create a Start Menu folder, and populate it with shortcuts
                to the files in the package, and optionally also a shortcut for uninstallation.
                
                To add an entry, click New, and set the description, and choose a program or document to load.


HEADING:        7. Build the package

TEXT:           The final step is building the package. You must save the package file before building, then
                choose Create Package to build the package file or redistributable installer. You can then test
                the package to verify that it will install correctly with the Test Package button.


ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
