<?php include_once( "kmdev.php" );
FORMAT( <<<ENDFORMAT
PAGE:           KMComp Command-line Options

BODY

SECTION:        KMComp Command-line Options
TEXT:           KMComp is the command-line compiler included in Keyman Developer.

TEXT:           The following parameters are available:

TUTECODE:       kmcomp [-s] [-d] [-pKeymanPath] infile [outfile.kmx [error.log]]

TEXT:           <code>infile</code> can be either a .kmn file or .kps file<br>
                <code>outfile.kmx</code> is optional, and can only be specified for a .kmn infile<br>
                <code>error.log</code> is optional, and can only be specified when outfile.kmx is specified.

TEXT:           <code>-d</code> include debug information in the compiled file<br>
                <code>-s</code> silent; don't display unnecessary information on screen<br>
                <code>-p</code> set Keyman program path to KeymanPath (when building a redistributable installer)

ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
