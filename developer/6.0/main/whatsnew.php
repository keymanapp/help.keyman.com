<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);


FORMAT( <<<ENDFORMAT
PAGE:           What's New in Keyman Developer

TITLE:          What's New in Keyman Developer

BODY

SECTION:        What's New in Keyman Developer

TEXT:           Keyman Developer 6.2 is designed to work with <a href="http://www.unicode.org/">Unicode.</a>
                Unicode is a character encoding standard that supports most of the world's more common
                languages, and includes support for user-defined languages.  Instead of a 256 character
                (8 bit) standard such as the 8 bit ANSI keyboards supported in Keyman 4.0, Keyman 6.2
                and Keyman Developer 6.2 support keyboards with over 1 million characters.

TEXT:           Keyman Developer 6.2 has been split into two editions -- Standard and Professional.  We recognised that
                many keyboard developers did not need all the advanced features that are available in the Professional
                edition.  The tables below list the new features in version 6.2, and tells you which edition they are 
                available in.  Pricing for the two editions is available 
                <a href="http://www.tavultesoft.com/keymandev/register/" target="_blank">here</a>.

TEXT:           The Evaluation edition of Keyman Developer provides access to both Standard and Professional features.  When
                using the Evaluation edition, professional features are clearly highlighted with the use of a simple 
                watermark.

TEXT:           The features listed below are broken down into New Program features, New Keyboard Language features, 
                and New Packaging and Distribution features.

ENDSECTION

SECTION:        New Program Features

FEATURELIST:    Standard,Pro

FEATURE:        Visual Keyboard Editor
                T
                T
                Allows you to create an on-screen representation of your keyboard which 
                users print for reference or even enter text with.  It can be created automatically 
                from most keyboards.  The on-screen display can be transparent under Windows 2000 and Windows XP,
                increasing the useable screen space.
                
FEATURE:        Describe visual keyboard as XML
                No
                T
                Lets you export a visual keyboard to an XML file, allowing for a standardised description of the keyboard.
                
FEATURE:        Export keyboard images to HTML, PNG, BMP
                T
                T
                Enables exporting of visual keyboards to PNG, BMP, or interactive HTML formats for documentation.
                
FEATURE:        Keyboard debugger
                No
                T
                Makes finding and eliminating bugs from complex keyboards much simpler, and allows for better testing.  
                It includes:<ul>
                <li>Fully interactive step-by-step program tracing.
                <li>Breakpoints: highlighting a particular rule to that you can trace a problem with that rule
                <li>Store information: shows the stores associated with the current rule, and highlights relevant characters 
                in the store.
                <li>Current deadkey states: shows visually the current deadkeys.
                <li>Call stack: shows the execution path through multiple group keyboards.</ul>
                                
FEATURE:        Keyboard regression testing
                No
                T
                When creating a complex keyboard, it can be difficult sometimes to add a new rule without affecting 
                existing rules.  Regression testing allows you to automatically test your keyboard to ensure you haven't
                changed the behaviour in an undesired manner.  You can specify tests either through XML or interactively,
                and save the tests for the future.
                
FEATURE:        Warning about possible viruses in Word-format documentation
                T
                T
                Warns the user about the possibility of viruses in Word documents included in packages.
                
FEATURE:        Different fonts in editor for quoted text
                T
                T
                Allows comments and string in the keyboard editor to be displayed in a different font than
                the remainder of the code.  This helps where using a language that is not in the usual editor fonts.
                
FEATURE:        Grouping files into projects
                No
                T
                Facilitates development of complex keyboard projects which might include multiple keyboards as well  
                as related documents and packages.  You can build all keyboards and packages automatically after making
                modifications.
                
FEATURE:        Print preview and coloured syntax printing
                T
                T
                Allows you to preview how the keyboard source will appear before printing, and also enables 
                printing the syntax highlighting.
                
FEATURE:        HTML and XML editing with syntax highlighting
                T
                T
                Makes editing HTML and XML files simple, with the use of coloured syntax highlighting specific to
                each file type.
                
FEATURE:        Enhanced character map
                :partial
                T
                The dockable character map displays all ANSI or Unicode characters in a font, along with their 
                codes and properties.  It includes support for Unicode character names (Pro edition only) and 
                an improved interface.
                
FEATURE:        Enhanced keyboard wizard
                T
                T
                The keyboard wizard is an visual display of the keyboard, and now supports multiple shift states per
                key.  It integrates the bitmap editor and has a much improved user interface.

FEATURE:        Welcome dialog
                T
                T
                When you start Keyman Developer 6.2, a Welcome Dialog with the most common tasks and recently used
                files will be displayed, increasing the user-friendliness of TIKE.

FEATURE:        Registration wizard
                T
                T
                A registration wizard is included to simplify the process of registering Keyman Developer online.
                
ENDFEATURELIST

TEXT:

COMMENT:        ********************************************************************************

ENDSECTION

SECTION:        New Keyboard Programming Language Features

FEATURELIST:    Standard,Pro

FEATURE:        UTF-8 and UTF-16 file format support
                T
                T
                Allows keyboard source files to contain Unicode text in comments or strings.  Also can edit text files,
                XML files, and HTML files in UTF-8 or UTF-16 formats.
                
FEATURE:        Positional and Mnemonic keyboards
                T
                T
                A positional keyboard is one that has an unvarying layout -- no matter what physical keyboard
                the user has, the layout will not change.  A mnemonic layout, on the other hand,
                adapts itself to the user's layout, thus, for example, enabling phonetic input on a range of 
                European keyboards.

FEATURE:        Named character constants
                T
                T
                Provides an easy, readable way to refer to Unicode characters within a keyboard file.  Characters
                can be assigned names which allows you to avoid using their character value, making your keyboard
                files much clearer.

FEATURE:        Unicode character name constants
                No
                T
                Implements all official Unicode character names as named character constants.

FEATURE:        Input method extensions
                No
                T
                Allows practically unlimited extension of Keyman keyboards with custom DLLs.

FEATURE:        Deadkeys and virtual keys in stores
                T
                T
                In Keyman 5, deadkeys and virtual keys were not allowed in store statements.  Keyman 6
                allows you to do this, reducing the complexity of many keyboards.

FEATURE:        Context(n)
                T
                T
                Allows output of a single character from the context.

FEATURE:        Index, Context(n) in context
                T
                T
                Keyman 6 allows you to use the index and context statements in the context part of the rule.

FEATURE:        Ethnologue code support
                T
                T
                Allows the user to store the <a href="http://www.ethnologue.com/">SIL Ethnologue</a> language code in 
                the keyboard, for use by third-party applications.

FEATURE:        Named deadkeys
                T
                T
                Provides a meaningful name for a deadkey, where previously only numbers were allowed,
                simplifying the keyboard source.

ENDFEATURELIST

TEXT:

COMMENT:        ********************************************************************************

ENDSECTION

SECTION:        New Package and Distribution Features

FEATURELIST:    Standard,Pro

FEATURE:        Install splash image
                No
                T
                Allows a custom image or logo to be displayed when installing a package.

FEATURE:        Redistributable installers and packages with one editor
                T
                T
                Simplifies the process of creating packages and installers.  The editor has
                also been vastly improved.  Multiple keyboards can be included in a single package,
                and packages can be included inside other packages.

FEATURE:        Run a program after package installation
                No
                T
                Allows for integration of package installation with other programs.

FEATURE:        Graphical splash dialog for redistributable installers
                No
                T
                Allows a custom image or logo with user-defined buttons to be displayed on startup of
                the redistributable installer.

FEATURE:        UTF-8 and UTF-16 file format support.
                T
                T
                Readme documents can now contain Unicode characters.

ENDFEATURELIST

ENDSECTION

ENDBODY

PAGENAV:	"Back to Contents", "contents.html"

FOOTER

ENDPAGE
ENDFORMAT
);
?>
