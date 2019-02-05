<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:           Introducing Keyman Developer

TITLE:          Introducing Keyman Developer

BODY

SECTION:        Welcome to Keyman Developer
TEXT:           Keyman Developer allows you to create your own keyboard layouts for use with
                Tavultesoft Keyman.  Tavultesoft Keyman Developer allows you to create Unicode 
                and ANSI keyboard layouts for use under Windows 95, 98, Me, NT, 2000 and XP.
                There are two applications included in Keyman Developer: TIKE, and
                KMComp.

HEADING:        TIKE

TEXT:           TIKE (or the Tavultesoft Integrated Keyboard Editor) is a complete
                environment for designing, developing, testing, and
                packaging your keyboards for distribution.  Some of the major features 
                of TIKE are:

BULLETLIST:     Keyboard Wizard, for creating keyboards visually
                Package Editor, for creating a package of keyboard, fonts and files for distribution
                Installer Editor, for creating a Keyman runtime that includes your keyboards
                Integrated Compiler, to compile keyboards and packages
                Test Window, for testing your keyboards
                Character Map, which supports viewing Unicode fonts under all Windows versions
                Visual Keyboard editor, for creating visual representations of keyboards
                Projects, for managing complex keyboard projects

HEADING:        KMComp		

TEXT:           KMComp, the command-line compiler, is a simple tool that lets you compile keyboards,
                packages, and installers from the command-line.  This is useful if you want to use batch 
                builds or Makefiles.

ENDSECTION

ENDBODY

PAGENAV		"Back to Contents", "contents.html"

FOOTER

ENDPAGE
ENDFORMAT
);
?>
