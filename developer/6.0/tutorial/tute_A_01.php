<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

FORMAT( <<<ENDFORMAT
PAGE:           Tutorial - Introduction

TITLE:          Introduction

BODY

SECTION:        Overview
TEXT:           Welcome! In this tutorial, you will learn the basics of Keyman keyboards and
                create a simple French keyboard which can be used with any physical keyboard
                layout.

                The keyboard will use a basic English layout, and add some deadkeys to define
                vowel diacritics and a few other characters.
                
                
TEXT:           This keyboard will use Unicode. Unicode is a character encoding standard that
                supports most of the world's scripts, and includes support for user-defined
                scripts. Unicode is rapidly being accepted as a standard in modern
                applications and operating systems.

                At the bottom of each page in the tutorial, will be a link to both the previous
                page and the next page. You can use these links to work your way through the
                tutorial. You may also find links to reference information, which you can
                select to learn more about a particular aspect of creating Keyman keyboards.

ENDSECTION

SECTION:        Let's begin
TEXT:           Let's get started! Move on to the next topic to begin the first step,
                planning the keyboard.
ENDSECTION

ENDBODY

TUTENAV:    "", "", "Planning the Keyboard", "tute_A_02.html"

FOOTER

ENDPAGE
ENDFORMAT
);
?>