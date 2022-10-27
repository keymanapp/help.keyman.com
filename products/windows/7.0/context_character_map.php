<?php
  require_once('includes/template.php');
  
  head([
    'title' => 'Keyman Support | Type to the world in your language',
    'css' => ['template.css','keyboard.css','keys.css','Kmhelp.css']
  ]);
?>
<body bgcolor="white" text="black" link="#0000FF" vlink="#840084" alink="#0000FF"><div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">On Screen Keyboard - Character Map</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="context_font_helper.php">Prev</a> </td><th width="60%" align="center">Chapter 5. Context Help</th><td width="20%" align="right"> <a accesskey="n" href="context_splash.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="context_character_map">On Screen Keyboard - Character Map</h2></div></div></div><p>The Character Map tool in the <a class="link" href="context_onscreenkeyboard.php" title="The On Screen Keyboard">On Screen Keyboard</a> can be used to find and insert any standard Unicode character into your text, although you may need special fonts to view or use some characters. The Character Map is only available in Keyman Desktop Professional and Keyman Desktop Corporate.</p><p>
    <span class="inlinemediaobject"><img src="images/context_charactermap_04.png"></span>
  </p><h3><a name="id762645"></a>
    <a name="usingthecharactermap"></a>Using the Character Map</h3><p>To insert a character from the Character Map into a document:</p><div class="orderedlist"><ol type="1"><li><p>Position the text cursor in your document where you want to insert the character.</p></li><li><p>Locate the desired character in the Character Map window.</p></li><li><p>Insert the character by:</p><div class="itemizedlist"><ul type="disc"><li><p>Selecting the character and pressing the Enter key.</p></li><li><p>Double-clicking on the character.</p></li><li><p>Right-clicking on the character and selecting Insert Character.</p></li></ul></div></li></ol></div><div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3><p>If the Insert Mode is set to Code or Name, pressing Enter or double-clicking         on a character will insert the Unicode code or Unicode name of the character, not the character itself!</p></div><h3><a name="id762717"></a>Character Map Options</h3><p>The following menu options are displayed when you right click on the Character map.</p><div class="informaltable"><table border="0"><colgroup><col><col></colgroup><tbody><tr><td>
            <p>Insert Character</p>
          </td><td>
            <p>Inserts the selected character at the cursor position in your document. See <a class="link" href="context_character_map.php#usingthecharactermap">Using the Character Map</a> above.</p>
          </td></tr><tr><td>
            <p>Filter...</p>
          </td><td>
            <p>Sends the curser to the Filter By entry field. See <a class="link" href="context_character_map.php#filtering">Filtering</a>below.</p>
          </td></tr><tr><td>
            <p>Goto...</p>
          </td><td>
            <p>Displays the Goto dialog box. See <a class="link" href="context_character_map.php#goto">Goto</a> below.</p>
          </td></tr><tr><td>
            <p>Font...</p>
          </td><td>
            <p>Allows you to choose a different font for use in the Character Map. This will not affect the font being used in your document! See <a class="link" href="context_character_map.php#fonts">Fonts and Characters</a> below.</p>
          </td></tr><tr><td>
            <p>Insert Mode</p>
          </td><td>
            <p>Allows you to select your desired character insert mode. See<a class="link" href="context_character_map.php#insertmodes">Insert Modes</a> below.</p>
          </td></tr><tr><td>
            <p>Display Quality</p>
          </td><td>
            <p>Allows you to set the desired display quality for the characters in the Character Map. See <a class="link" href="context_character_map.php#displayquality">Display Quality</a> below.</p>
          </td></tr></tbody></table></div><h3><a name="id762883"></a>
    <a name="filtering"></a>Filtering</h3><p>You can search the Character Map by using the Filter By entry field at the bottom of the Character Map window.</p><p>
    <span class="inlinemediaobject"><img src="images/context_charactermap_05.png"></span>
  </p><p>When no search filter is applied, the Character Map shows all characters from the Unicode 5.0 standard. If a filter has been applied, the name of the filter will appear in the upper left corner of the Character Map window.</p><p>
    <span class="inlinemediaobject"><img src="images/context_charactermap.png"></span>
  </p><p>The following parameters define how the search filter in the Character Map works:</p><div class="itemizedlist"><ul type="disc"><li>The filter field searches for characters starting strictly from the beginning of their Unicode names. If no filter options are in use, the filter field will NOT match elements from later in a character's name.</li><li>Filter entries can use the letters A-Z, the numerals 0-9 and the punctuation marks underscore (_) and hyphen (-).</li><li>Filter entries are NOT case sensitive.</li><li>Spaces between words in a filter entry can be represented by either underscore (_) or space ( ). Spaces at the end of a filter entry must be represented by underscore; otherwise they will be discarded during the search.</li><li>Filters can be entered by Unicode character names or Unicode character ranges.</li><li>The filtering format for a character range is given below, where U+ is optional, XXXX is the starting Unicode value and YYYY is the finishing Unicode value.<pre class="programlisting">[U+]XXXX-[U+]YYYY</pre></li><li>The filtering options for character names are:<div class="itemizedlist"><ul type="circle"><li><p>"&gt;" placed at the start of an entry will only show characters in the currently selected Character Map font. This is helpful when trying to determine which characters a given font supports.</p></li><li><p>"&lt;" placed at the start of an entry will search Unicode block names instead of character names. This is helpful when searching for characters within related blocks (e.g. all Latin blocks).</p></li><li><p>Using "*" in an entry serves as a wildcard for any number of places in that entry. For example, searching for "greek*alpha" will find characters whose Unicode names begin with the word "Greek" and contain the word "Alpha" any number of places later. This is helpful when searching for characters that share a common element in their names (e.g. capital).</p></li><li><p>Using "?" anywhere in an entry serves as a wildcard for that single place in the entry. For example, searching for "s???e" will return both the SPACE and the SMILE characters, among others.</p></li><li><p>"[ - ]" is used to match any character in a set. For instance, [ac-z] matches all letters except "b". A set can be made up of ranges and individual characters, but cannot be made up of "?" or "*".</p></li><li><p>"$" placed at the end of an entry will match from the end of a Unicode character name. This option works best when used with "*" or "?".</p></li><li><p>As noted above, when no filtering options are in use, the filter field searches for characters starting strictly from the beginning of their Unicode names.</p></li></ul></div></li></ul></div><p>To help you edit filters, the Filter dialog is available from the Character Map by clicking the<span class="inlinemediaobject"><img src="images/context_charactermap_01.png"></span>button.</p><p>
    <span class="inlinemediaobject"><img src="images/context_charactermap_02.png"></span>
  </p><p>The following chart provides examples of filtering.</p><div class="informaltable"><table border="0"><colgroup><col><col></colgroup><tbody><tr><td>
            <p>Filter Entry</p>
          </td><td>
            <p>Filter Result</p>
          </td></tr><tr><td>
            <p>"latin capital letter a"</p>
          </td><td>
            <p>Searches for all Unicode characters whose names begin with the sequence "latin capital letter a".</p>
            <p>Finds all variations of the Latin capital letter A, plus the Latin capital letter Alpha and the Latin capital letter African d.</p>
          </td></tr><tr><td>
            <p>"latin * letter a"</p>
          </td><td>
            <p>Searches for all Unicode characters whose names begin with the word "Latin" and elsewhere contain the sequence "letter a".</p>
            <p>Finds all variations of the Latin letter A, capital and lower case, along with a small selection of other characters whose names fit the search.</p>
          </td></tr><tr><td>
            <p>"latin * letter [aeiou]"</p>
          </td><td>
            <p>Searches for all Unicode characters whose names begin with the word "Latin" and elsewhere contain the sequence "letter a", "letter e", "letter i", "letter o", or "letter u".</p>
            <p>Finds all variations of the Latin vowels A,E,I,O,U, both upper and lower case, along with a small selection of other characters whose names fit the search.</p>
          </td></tr><tr><td>
            <p>"&lt;latin"</p>
          </td><td>
            <p>Searches for all Unicode blocks which begin with the word "Latin".</p>
            <p>Finds all Latin blocks that begin with the word Latin (Latin-1 Supplement, Latin Extended-A, Latin Extended-B, Latin Extended Additional, Latin Extended-C, Latin Extended-D). Does not find Basic Latin.</p>
          </td></tr><tr><td>
            <p>"&gt;lao"</p>
          </td><td>
            <p>Searches the current Character Map font for all available characters whose names begin with the sequence "Lao".</p>
            <p>Finds all characters of Lao available in the current font.</p>
          </td></tr><tr><td>
            <p>"YI_"</p>
          </td><td>
            <p>Searches for all characters whose Unicode names begin with the sequence "YI" followed by a space.</p>
            <p>Finds all YI syllables and YI radicals. Note: You must use underscore (_) and not space ( ) at the end of a filter entry. Spaces at the end of a filter entry are discarded. If you had used "YI " instead of "YI_", the search would also return the character YIN_YANG.</p>
          </td></tr><tr><td>
            <p>"latin * letter a$"</p>
          </td><td>
            <p>Searches for all Unicode characters whose names begin with the word "Latin" and end with the sequence "latin a".</p>
            <p>Finds only "a", "A" and Latin subscript small letter a.</p>
          </td></tr><tr><td>
            <p>"1000-109F"</p>
          </td><td>
            <p>Searches for all Unicode characters in the range from U+1000 to U+109F (inclusive).</p>
            <p>Finds all characters - in this case, the Myanmar block.</p>
          </td></tr></tbody></table></div><h3><a name="id763227"></a>
    <a name="goto"></a>Goto</h3><p>The Goto tool can be used to move directly to a specific Unicode character or value.</p><div class="orderedlist"><ol type="1"><li><p>Right click on a character and select Goto. The <span class="guilabel">Enter Unicode character value or name</span>dialog box will be displayed:</p><p>
        <span class="inlinemediaobject"><img src="images/context_charactermap_03.png"></span>
      </p></li><li><p>Enter a Unicode character value (e.g. "006B" or "U+006B") OR enter the start of the character name (e.g. "Lao letter", which will go to the first matching character, "LAO_LETTER_KO")</p></li><li><p>Click OK. The Character Map will move to the chosen character, if available.</p></li></ol></div><h3><a name="id763281"></a>
    <a name="fonts"></a>Fonts and Characters</h3><p>You can choose the font for use in the Character Map tool by right clicking on the Character Map window and selecting Font. From the Font dialog, you can select to display the Character Map using any of the fonts available on your system. If a character is not available in the selected font, the Character Map will fall back to Code2000, Code2001, Code2002, Arial Unicode MS and Lucida Sans Unicode fonts.  If the character is not found in these fallback fonts, the Character Map will use font linking to attempt to find a character from other fonts installed on your system. As a last resort, the Character Map will show square boxes or questions marks if no suitable font can be found for a character.</p><h3><a name="id763292"></a>
    <a name="insertmodes"></a>Insert Modes</h3><p>Characters can be inserted from the Character Map using one of three insert modes - Code, Character and Name:</p><div class="itemizedlist"><ul type="disc"><li><p>Code - Inserts the character's Unicode code.</p></li><li><p>Character - Inserts the character itself.</p></li><li><p>Name - Inserts the character's Unicode name.</p></li></ul></div><p>To change the character insert mode:</p><div class="orderedlist"><ol type="1"><li><p>Right-click on the Character Map.</p></li><li><p>Highlight the Insert Mode submenu.</p></li><li><p>Choose the desired insert mode from the submenu.</p></li></ol></div><h3><a name="id758176"></a>
    <a name="displayquality"></a>Display Quality</h3><p>There are three options for the display quality of characters in the Character Map.</p><div class="itemizedlist"><ul type="disc"><li><p>Plain - Uses no font smoothing.</p></li><li><p>Antialiased - Uses the Windows standard font smoothing.</p></li><li><p>ClearType - Uses the Windows ClearType font smoothing.</p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="context_font_helper.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="context.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="context_splash.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">On Screen Keyboard - Font Helper </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Splash Screen</td></tr></table></div>
  <script src="topicresponse.js" type="text/javascript"></script>
</body></html>
