<?php include_once( "kmdev.php" );
require_once('includes/template.php');
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['keyboard.css','keys.css','Kmhelp.css','kmdist.css','kmdistprint.css','kmhelpprint.css','template-header-footer.css']
  ]);

REFERENCE( <<<REF

SECTION:      Strings

TEXT:         A string is a sequence of characters.  Strings can be 
              made up of multiple concatenated substrings.  There is no general limit on the length of a string,
              although Keyman does impose limits on strings in various situations.

TEXT:         The following string formats are available:

VTABLE:       "140",  "180",         "180"
              "Type", "Description", "Example"
              "Quoted strings", "a list of characters, enclosed either by &quot; or ' quote characters.  Can only use characters in the range decimal 32 - 255.  To use quotes in the string, enclose with the other quote type.", "<pre class='example'>store&nbsp;(vowels)&nbsp;&quot;aeiou&quot;<br>+&nbsp;'&quot;'&nbsp;>&nbsp;'quote'</pre>"
              "Decimal character codes", "a single character, in decimal format.  Range d32 - d1114111.", "<pre class='example'>+&nbsp;d32&nbsp;>&nbsp;'space'</pre>"
              "Hexadecimal character codes", "a single character in hexadecimal format. Range x20 - x10FFFF.", "<pre class='example'>+&nbsp;x20&nbsp;>&nbsp;'space'</pre>"
              "Octal character codes", "a single character in octal format.  Not recommended - only included for historical reasons.  Range 40 - 4177777.", "<pre class='example'>+&nbsp;40&nbsp;>&nbsp;'space'</pre>"
              "Unicode character codes", "a single character in U+xxxxxx format.  Recommended for Unicode.  Range U+0020 - U+10FFFF.", "<pre class='example'>+&nbsp;U+0020&nbsp;>&nbsp;'space'</pre>"

TEXT:         Strings are concatenated by listing them together, separated by spaces. For example, the following two lines are equivalent:

CODELINE:     U+0041 U+0042 d67 d68 "abc" 

              "ABCDabc"

REF
); ?>
