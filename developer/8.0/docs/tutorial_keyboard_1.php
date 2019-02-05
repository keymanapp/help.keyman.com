<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 1: Planning the Keyboard"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 1: Planning the Keyboard</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_keyboard.php">Prev</a> </td><th width="60%" align="center">Keyboard Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_keyboard_2.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="tutorial_keyboard_1">Step 1: Planning the Keyboard</h3></div></div></div><h4><a name="id661280"></a>Choosing the characters</h4><p>
    First of all, we need to decide which characters we want the keyboard to
    produce. Next, we must find out the codes used to represent them, using
    a program such as Character Map, or with the Character Map in Keyman Developer
    (go to <span class="guimenu">View</span>, <span class="guimenuitem">Character Map</span>).
  </p><p>
    French uses the same 26 letters as English, with some additions. As our
    keyboard is based on English, we only need to work with these additional
    letters. Note that for completeness, we will design our keyboard to produce
    a few other accented vowels that are not used in French. Also, we want our
    keyboard to include the angled quotes « and ».
  </p><p>
    These characters, with both uppercase and lowercase forms, are listed in the
    table below along with their Unicode codes.
  </p><table><tr>
      <td>À </td>
      <td>U+00C0 </td>
      <td>à </td>
      <td>U+00E0 </td>
      <td> </td>
      <td>Á </td>
      <td>U+00C1 </td>
      <td>á </td>
      <td>U+00E1 </td>
    </tr><tr>
      <td>È </td>
      <td>U+00C8 </td>
      <td>è </td>
      <td>U+00E8 </td>
      <td> </td>
      <td>É </td>
      <td>U+00C9 </td>
      <td>é </td>
      <td>U+00E9 </td>
    </tr><tr>
      <td>Ì </td>
      <td>U+00CC </td>
      <td>ì </td>
      <td>U+00EC </td>
      <td> </td>
      <td>Í </td>
      <td>U+00CD </td>
      <td>í </td>
      <td>U+00ED </td>
    </tr><tr>
      <td>Ò </td>
      <td>U+00D2 </td>
      <td>ò </td>
      <td>U+00F2 </td>
      <td> </td>
      <td>Ó </td>
      <td>U+00D3 </td>
      <td>ó </td>
      <td>U+00F3 </td>
    </tr><tr>
      <td>Ù </td>
      <td>U+00D9 </td>
      <td>ù </td>
      <td>U+00F9 </td>
      <td> </td>
      <td>Ú </td>
      <td>U+00DA </td>
      <td>ú </td>
      <td>U+00FA </td>
    </tr><tr>
      <td>Â </td>
      <td>U+00C2 </td>
      <td>â </td>
      <td>U+00E2 </td>
      <td> </td>
      <td>Ä </td>
      <td>U+00C4 </td>
      <td>ä </td>
      <td>U+00E4 </td>
    </tr><tr>
      <td>Ê </td>
      <td>U+00CA </td>
      <td>ê </td>
      <td>U+00EA </td>
      <td> </td>
      <td>Ë </td>
      <td>U+00CB </td>
      <td>ë </td>
      <td>U+00EB </td>
    </tr><tr>
      <td>Î </td>
      <td>U+00CE </td>
      <td>î </td>
      <td>U+00EE </td>
      <td> </td>
      <td>Ï </td>
      <td>U+00CF </td>
      <td>ï </td>
      <td>U+00EF </td>
    </tr><tr>
      <td>Ô </td>
      <td>U+00D4 </td>
      <td>ô </td>
      <td>U+00F4 </td>
      <td> </td>
      <td>Ö </td>
      <td>U+00D6 </td>
      <td>ö </td>
      <td>U+00F6 </td>
    </tr><tr>
      <td>Û </td>
      <td>U+00DB </td>
      <td>û </td>
      <td>U+00FB </td>
      <td> </td>
      <td>Ü </td>
      <td>U+00DC </td>
      <td>ü </td>
      <td>U+00FC </td>
    </tr><tr>
      <td>Ý </td>
      <td>U+00DD </td>
      <td>ý </td>
      <td>U+00FD </td>
      <td> </td>
      <td>Ç </td>
      <td>U+00C7 </td>
      <td>ç </td>
      <td>U+00E7 </td>
    </tr><tr>
      <td>« </td>
      <td>U+00AB </td>
      <td>» </td>
      <td>U+00BB </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
      <td> </td>
    </tr></table><p>
    If you are not familiar with the hexadecimal (base-16) numbering system, don't
    worry: you can use the Character Map in Keyman Developer to find the character
    you want, and then drag-and-drop or copy-and-paste its character code into
    your keyboard.
  </p><p>
    Note that you must be careful to use the right character: The Unicode standard
    has several characters with the same shape as another, but a different meaning;
    an example of this is the Greek capital letter Sigma (U+03A3 Σ) and the 
    mathematical summation symbol (U+2211, ∑). An application supporting 
    Unicode would treat these two characters differently. If in doubt whether a 
    character is the right one, you can look up the reference tables at
    <a class="ulink" href="http://www.unicode.org/" target="_blank">www.unicode.org</a>.
  </p><h4><a name="id661749"></a>Designing the layout</h4><p>
    After choosing the characters we want our keyboard to use, we must decide
    how we want the user to be able to enter them. For some languages, you
    might replace each letter on the English keyboard with a letter from the
    language. In this case, however, most of the letters are accented vowels,
    we will use two keystrokes for each: one for the accent, and one for the
    vowel.
  </p><table><tr>
      <th>Character </th>
      <th>Keystrokes </th>
    </tr><tr>
      <td>À, à, ... </td>
      <td>back-quote (`), then the vowel key. </td>
    </tr><tr>
      <td>Á, á, ... </td>
      <td>quote ('), then the vowel key. </td>
    </tr><tr>
      <td>Â, â, ... </td>
      <td>caret (^), then the vowel key. </td>
    </tr><tr>
      <td>Ä, ä, ... </td>
      <td>double-quote ("), then the vowel key. </td>
    </tr><tr>
      <td>Ç, ç </td>
      <td>quote ('), then lower- or uppercase C. </td>
    </tr><tr>
      <td>«, » </td>
      <td>two less-than (&lt;&lt;) or greater-than (&gt;&gt;) symbols. </td>
    </tr></table><p>
    Now that we have decided which character to use and how the user can enter
    them, we can start to write the keyboard.
  </p><p>
    <a class="xref" href="tutorial_keyboard_2.php" title="Step 2: Writing the Header">Step 2: Writing the Header</a>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_keyboard.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_keyboard.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_keyboard_2.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Keyboard Tutorial </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Step 2: Writing the Header</td></tr></table></div>
