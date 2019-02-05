<?php include_once( "kmdev.php" );
FORMAT( <<<ENDFORMAT
PAGE:           Package Editor

BODY

SECTION:        Package Editor

HEADING:        1. Files

TEXT:           Use the <b>Add</b> button to select the files to be included in the package, such as
                keyboard files, documentation, and related fonts; but you can include any type of file
                here as well.
                
                If you add a .kmp package file, it will also be installed when this package is installed,
                but will have its own uninstall entry in Control Panel.

TEXT:           New in version 6.2.176.0: you can add a file called "welcome.htm" to your package (simple
                packages only), that will be displayed automatically after a user has installed the package.
                This is the ideal place to give instructions on initial use of your keyboard, such as fonts,
                keyboard layout, and where to find further help.  You can also include information about what
                your package includes - a visual keyboard, fonts, and documentation.  You might also want to 
                include the welcome.htm file in the Start Menu links.

TEXT:           The welcome.htm file can use your fonts (so it doesn't have to be in English!), and you can 
                also include images (just don't forget to add the images to the package file).  You might want
                to include an image of the keyboard layout (use the Visual Keyboard Editor in TIKE to create 
                one quickly!)

HEADING:        2. Package Type

TEXT:           There are two types of packages: simple packages, which require Keyman to be installed
                on the user's machine, and redistributable installers, which contain the Keyman install
                program as well as the other files, and do not need Keyman to be already installed.
                
                For distribution within an organisation, redistributable installers may be preferable,
                as you can have Keyman and many keyboards to be used with it distributed in one file.
                For distribution over the internet, simple packages are better, because they are smaller,
                and you will not be distributing a possibly older version of Keyman with them.


HEADING:        3. Options

TEXT:           Here you can select one of the files in your package to be displayed during installation,
                for example, a readme file or licence information. You can also run a program or load a
                document after installation, by entering it into the Command Line box.


HEADING:        4. Info

TEXT:           Here you set the package name, version number, and copyright information, as well as
                contact or web site information for the author. You can also include any additional
                information with the More button.


HEADING:        5. Image/Startup Image (Professional edition only)

TEXT:           A simple package can optionally include a 140x250 image file to be shown during installation.
                This image file must be added to the Files list in step 1, then selected from the list here.
                
                A redistributable installer can have an arbitrarily sized image file to be shown before installation.
                This image file will have three buttons on it, for Install, About and Cancel. You can use the Buttons
                Editor to set the positions of the buttons.


HEADING:        6. Start Menu Options

TEXT:           You can optionally have the package create a Start Menu folder, and populate it with shortcuts
                to the files in the package, and optionally also a shortcut for uninstallation.
                
                To add an entry, click New, and set the description, and choose a program or document to load.


HEADING:        7. Build

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
