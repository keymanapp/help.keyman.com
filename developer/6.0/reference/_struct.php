<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT

PAGE:           Language Structure

BODY

SECTION:        Language structure

HEADING:        Language elements

LINKSLIST:      "Keywords", "_keywordsbytype.html"
                "Strings", "_struct_strings.html"
                "Virtual keys and virtual character keys", "_struct_vkeys.html"
                "US English keyboard layout (reference for positional keyboards)", "_english.html"
                "Unicode and ANSI", "_struct_unicode.html"
                "Headers and System Stores", "_struct_headers.html"
                "Comments", "_struct_comments.html"
                "Long Lines", "_struct_longlines.html"
                "Stores", "_struct_stores.html"
                "Named Constants", "_struct_constants.html"
                "Groups", "_struct_groups.html"
                "Compatibility with SilKey for the Apple Macintosh", "_struct_silkey.html"
                "Change history", "_struct_history.html"

RELATED:        "Keywords by type",   "_keywordsbytype.html"
                "Keywords by name",   "_keywordsbyname.html"

ENDSECTION

ENDBODY

FOOTER

ENDPAGE
ENDFORMAT
);
?>
