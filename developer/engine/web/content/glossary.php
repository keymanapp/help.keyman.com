<?php /*
  Name:             glossary
  Copyright:        Copyright (C) 2005 Tavultesoft Pty Ltd.
  Documentation:    
  Description:      
  Create Date:      18 Sep 2009

  Modified Date:    18 Sep 2009
  Authors:          mcdurdin
  Related Files:    
  Dependencies:     

  Bugs:             
  Todo:             
  Notes:            
  History:          18 Sep 2009 - mcdurdin - Polish
*/
  $pagename = 'Glossary';
  $pagetitle = 'Glossary';
  $style = <<<END
  .glossterm { font-style: italic }
END;
  $MainPage = true;
  
  require_once('header.php');
  
  $glossary = array(
  
  "Unicode" => "The standard for digital representation of the characters used in writing all of the world's languages. 
                Unicode provides a uniform means for storing, searching, and interchanging text in any language. It is 
                used by all modern computers and is the foundation for processing text on the Internet. Unicode is developed 
                and maintained by the Unicode Consortium: <a href='http://www.unicode.org/'>www.unicode.org</a>.",
  
  "Phonetic Keyboard" => "A keyboard layout for a non-Latin script language that maps the letters of that language
                          to corresponding English keys on the keyboard, according to the sounds of the letters.  Many
                          languages have a few letters that are not in the English alphabet, and these will often be
                          mapped to keys that are not used for that language (e.g. English keys such as Z or X are often
                          used for this purpose).  A phonetic keyboard will usually be faster to type in for a user who
                          is familiar with the English keyboard layout.",
  
  "Mnemonic Layout" => "See [Phonetic Keyboard].",
  
  "Keyboard Layout" => "The configuration of a keyboard for a given language, as defined by software.  This is mapped
                        onto your [Underlying Keyboard]",
  
  "Underlying Keyboard" => "The basic keyboard layout of your hardware keyboard, as shown on the key caps of your
                            physical hardware keyboard.",
  
  "Font" => "A file which defines the look and style of text for a language.  If no font file can be found for
             a language, then a [Replacement Character] is shown for each letter of that language.",
  
  "System Font" => "A [font] that is stored on your computer and can be used in any program on your computer",
  
  "Embedded Font" => "A [font] that is downloaded from the Internet and used just for the webpage that references
                      it.  Some web browsers do not support embedded fonts.",
  
  "Replacement Character" => "A character that is shown on the screen when no [font] can be found to display it.
                              The replacement character is typically an empty square box or a box with a code
                              number in it.",
                              
  "Script" => "A collection of letters and other written signs used to represent textual information in one or
               more writing systems. For example, Russian is written with a subset of the Cyrillic script;
               Ukranian is written with a different subset. The Japanese writing system uses several scripts.");
                  
  ksort($glossary);
  
  echo "<div class='body_text'><ul p style='margin-top: 16px'>";
  
  function cleanterm($strings)
  {
    $term = $strings[0];
    $term = substr($term, 1, strlen($term)-2);
    $termclean = str_replace(' ','_',strtolower($term));
    return "<a href='#$termclean'>$term</a>";
  }
  
  foreach ($glossary as $term => $definition) {
    $termclean = str_replace(' ','_',strtolower($term));
    
    $definition = preg_replace_callback('/\[.*?\]/', 'cleanterm', $definition);
    
  	echo "<li><span id='$termclean' class='glossterm'>$term</span>.  <span class='glossdef'>$definition</span></li>";
  }
  
  echo "</ul></div>";

 require_once('footer.php');
?>
