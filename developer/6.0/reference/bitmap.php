<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:    &amp;Bitmap store and BITMAP statement

CODE:       store( &Bitmap ) "%bmpfile%"

            BITMAP %bmpFile%

TEXT:       Specifies the bitmap associated with the keyboard file.  The bmpFile can be specified as a full path, 
            or relative to the keyboard, or, if in the same directory, simply as the name of the file without the 
            '.bmp' extension.  The bitmap filename must be enclosed in quotes when using the store() syntax.

TEXT:       The bitmap statement is not required in Keyman 5.  However, if you leave it out, a black box will currently 
            be displayed.  This may be changed in the future for a simple generic image.

EXAMPLE:    store( &Bitmap ) "keyboard.bmp"

HISTORY:    This statement replaces the BITMAPS statement from Keyman 3.x.  Keyman 4 only required one bitmap.  Keyman 
            5 now makes the statement completely optional.

REF
); ?>
