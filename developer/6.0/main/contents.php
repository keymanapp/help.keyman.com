<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT

PAGE:           Tavultesoft Keyman Developer 6.2

TITLE:          Tavultesoft Keyman Developer 6.2

BODY

SECTION:        Introducing Keyman Developer
LINKSLIST:      "Introducing Keyman Developer", "intro.html"
                "What's New", "whatsnew.html"
                "Registering Keyman Developer", "registering.html"
                "Contacting Tavultesoft", "contact.html"
                "Keyman Developer Website", "website.html"
ENDSECTION

SECTION:        Using Keyman Developer
LINKSLIST:      "Creating Keyboards", "creating_keyboards.html"
                "Creating Packages", "creating_packages.html"
                "Licencing of Keyboards and the Runtime", "licencing.html"
                "Programmer's Guide to KMN Language", "guide.html"
                "Creating Input Method Extension DLLs for Keyman", "../imx/imxintro.html"
                "Keyman Developer Environment Reference", "../context/context.html"
ENDSECTION

SECTION:        Reference
LINKSLIST:      "Keywords by type", "../reference/_keywordsbytype.html"
                "Keywords by name", "../reference/_keywordsbyname.html"
                "Language", "../reference/_struct.html"
                "Registry settings", "../reference/_registry.html"
                "Package files", "../reference/_package.html"
                "Redistributable installer", "../reference/_redistinstaller.html"
ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
