<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:           Tutorial - The Keyboard Header

TITLE:          The Keyboard Header

BODY

SECTION:        Comments

TUTECODE:       c Simplified French Keyboard for Keyman 6.2

TEXT:           Most of the header in this example is made up of comments. A comment is used
                to make notes about the keyboard, or to provide information on the workings of
                the keyboard. The comments are readable by anyone looking at the source code of
                the keyboard.

                A comment always starts with a lowercase 'c', followed by one or more spaces,
                and continues to the end of the line. Keyman Developer will ignore comments
                when compiling a keyboard.

                Comments can take up a whole line, or can start in the middle of the line.
                The latter is useful for making short notes about individual lines. As you
                can see we have used both kinds of comments in the header
ENDSECTION

SECTION:        The VERSION statement

TUTECODE:       VERSION 6.0                 c This keyboard is for use with Keyman 6.0 or later

TEXT:           The VERSION statement identifies the Keyman version for which this keyboard
                was written; this keyboard is for use with Keyman 6.0. The VERSION statement
                is a required part of each keyboard header.
ENDSECTION

SECTION:        The NAME statement

TUTECODE:       NAME "Quick French"

TEXT:           The NAME statement specifies a descriptive name for the keyboard, which can be
                up to eighty characters long, and must be enclosed in double quotes ("). The
                name we have given to this keyboard is "Quick French". The NAME statement is
                also a required part of the keyboard header.
ENDSECTION

SECTION:        The BITMAP statement

TUTECODE:       BITMAP "qfrench.bmp"

TEXT:           The optional BITMAP statement tells Keyman which picture to use for the
                keyboard's icon. The picture should be in the standard Windows .BMP format,
                and should be 16x16, 16 colours (4 bits per pixel). The filename should be
                enclosed in quotes. For this keyboard we will be using the following bitmap:
                <img src="../img/qfrench.gif" width=16 height=16>; it is found in the Keyman Developer
                folder, under <i>Samples\ Examples\ qfrench.bmp</i> - you should copy it into
                the same folder in which you will save your keyboard.
ENDSECTION

SECTION:        The &MnemonicLayout store

TUTECODE:       store(&MnemonicLayout) "1"

TEXT:           This tells Keyman that the layout is meant to conform to the user's keyboard layout; for example, if the user presses
                the quote key (') on their keyboard (whether they are using a US English, UK English, French, German, Swedish, etc.) it
                should work in the same way. The opposite of this is a positional layout (the default), which is intended for keyboards for 
                which there is no correspondence between what is printed on the keyboard and what is output.

ENDSECTION

SECTION:        The begin statement

TUTECODE:       begin Unicode > use(Main)

TEXT:           The begin statement tells Keyman which group of rules to process first when it
                receives a keystroke. The use of multiple groups is an advanced feature, and
                unnecessary for this tutorial, so we will use a single group, called Main. The
                begin statement is required in every keyboard, and marks the start of the
                keyboard body. A keyboard can have one or two begin statements, for Unicode and/or
                ANSI. We will be using Unicode.
ENDSECTION

RELATED:    "Comments", "../reference/_struct_comments.html"
            "VERSION",  "../reference/version.html"
            "NAME",     "../reference/name.html"
            "BITMAP",   "../reference/bitmap.html"
            "mnemoniclayout", "../reference/mnemonic.html"
            "begin",    "../reference/begin.html"

ENDBODY

TUTENAV:    "Writing the Header", "tute_A_03.html", "The Keyboard Body", "tute_A_05.html"

FOOTER

ENDPAGE
ENDFORMAT
);
?>