<?php
  require_once('includes/template.php');

  head([
    'title' => "Using the Character Map"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Using the Character Map</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="context_kmcomp.php">Prev</a> </td><th width="60%" align="center">Chapter 5. Context Help</th><td width="20%" align="right"> <a accesskey="n" href="context_frmMessages.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h2 class="title" style="clear: both" id="context_frmCharacterMapNew">Using the Character Map</h2></div></div></div><p>
    To display the Character Map:
  </p><table class="simplelist" border="0" summary="Simple list"></table><h3><a name="id685239"></a>Using the Character Map</h3><p>
    To insert a character:
  </p><div class="orderedlist"><ol type="1"><li><p>
      Position the text cursor where you want to insert the character.
    </p></li><li><p>
      Locate the desired character in the Character Map and insert it by:
      </p><div class="itemizedlist"><ul type="disc"><li><p>selecting the character and pressing the Enter key,</p></li><li><p>double-clicking on the character, or</p></li><li><p>right-clicking on the character and selecting Insert Character.</p></li></ul></div><p>
    </p><div class="note" style="margin-left: 0.5in; margin-right: 0.5in;"><h3 class="title">Note</h3><p>
      If the Insert Mode is set to Code or Name, pressing Enter or double-clicking
      on the character will insert the Unicode code or name of the character, not the character itself.
      These options are most useful when writing or editing keyboard source files (.KMN).
    </p></div></li></ol></div><h3><a name="id685189"></a>Insert Modes</h3><p>
    There are three insert modes: Code, Character and Name:
  </p><div class="itemizedlist"><ul type="disc"><li><p>Code inserts the character's Unicode code</p></li><li><p>Character inserts the character itself</p></li><li><p>Name inserts the character's Unicode name</p></li></ul></div><p>
    To change the insert mode:
  </p><div class="orderedlist"><ol type="1"><li><p>
      Right-click on the Character Map.
    </p></li><li><p>
      Highlight the Insert Mode submenu.
    </p></li><li><p>
      Choose the desired mode from the Insert Mode submenu.
    </p></li></ol></div><h3><a name="id685143"></a>Character Map Options</h3><p>
    When you right click on the Character Map, the following menu options are displayed:
  </p><div class="informaltable"><table border="0"><colgroup><col><col></colgroup><tbody><tr><td>Insert Character</td><td>
          Inserts the selected character at the cursor position in your document.
        </td></tr><tr><td>Filter...</td><td>
          Displays the Filter dialog box. See Filtering below.
        </td></tr><tr><td>Goto...</td><td>
          Displays the Goto dialog box. See Using Goto below.
        </td></tr><tr><td>Font...</td><td>
          Allows you to choose a different font for viewing the Character Map. Note: This does not
          affect the font being used in your document!
        </td></tr><tr><td>Insert Mode</td><td>
          Allows you to select the character insert mode you want. See Insert Modes above.
        </td></tr><tr><td>Display Quality</td><td>
          Allows you to select a different font display quality for the Character Map. The options are:
          <div class="itemizedlist"><ul type="disc"><li><p>Plain - no font smoothing</p></li><li><p>Antialiased - uses the Windows standard font smoothing</p></li><li><p>ClearType - uses the Windows ClearType font smoothing method</p></li></ul></div>
        </td></tr></tbody></table></div><h3><a name="id685035"></a>Characters and Fonts</h3><p>
    When a character is not available in the selected font, the Character Map will fall back to Code2000, Code2001, Code2002, Arial Unicode MS 
    and Lucida Sans Unicode fonts.  If the character is not found in these fallback fonts, the Character Map will use font linking to attempt 
    to find a character from other fonts installed on the system, and as a last resort, will show a square box if no suitable font can be found.
  </p><h3><a name="id685029"></a>Filtering</h3><p>
    The Character Map can be filtered by Unicode character name or character range. Filters can be entered in the Filter By field
    at the bottom of the Character Map; a quick reference user interface dialog to help you edit the filter is available by clicking the
    [...] button.
  </p><p>
    When no filter is applied, the Character Map will show all characters from the Unicode 5.0 standard.
  </p><p>
    All filter strings are case insensitive.  Character names use the letters A-Z, numerals 0-9, and punctuation underscore (_) and hyphen (-).
  </p><p>
    Spaces between words in the filter are represented either by underscore (_) or space ( ) and can be used interchangeably.
  </p><p>
    A filter can be for a range or on the Unicode Character Name.
  </p><p>
    * The filter format for a range is:
    <code class="code">
      [U+]XXXX-[U+]YYYY
    </code>
  </p><p>
    Where U+ is optional, XXXX is the starting Unicode value and YYYY is the finishing Unicode value.
  </p><p>
    * The filtering options for Unicode Character Names are:
    </p><table class="simplelist" border="0" summary="Simple list"></table><p>
  </p><h3><a name="id684969"></a>Examples</h3><div class="informaltable"><table border="0"><colgroup><col><col></colgroup><tbody><tr><td>filter</td><td>result</td></tr><tr><td>"LATIN CAPITAL LETTER A"</td><td>Finds all Latin capital A variations</td></tr><tr><td>"LATIN * LETTER A"</td><td>finds all Latin capital and lower case A variations</td></tr><tr><td>"LATIN * LETTER [AEIOU]"</td><td>finds all all Latin A,E,I,O or U vowel combinations</td></tr><tr><td>"&lt;Thai"</td><td>finds the Thai Unicode block</td></tr><tr><td>"&gt;LAO"</td><td>finds all characters with names starting in "LAO" in the current font</td></tr><tr><td>"YI_"</td><td>finds all characters with names starting in "YI " - you must use _ and not ' ' at the end of a
      search string.  Note that without the _, this search also matches YIN_YANG.</td></tr><tr><td>"LATIN * LETTER A$"</td><td>finds only "a" and "A"</td></tr><tr><td>"1000-119F"</td><td>finds all characters between U+1000 and U+119F (inclusive) - the Myanmar alphabet in this case</td></tr></tbody></table></div><h3><a name="id684848"></a>Goto</h3><p>
    The Goto tool can be used to move directly to a specific Unicode character or value.
  </p><div class="orderedlist"><ol type="1"><li><p>
      Right click on a character and select Goto.
    </p><p>
      The <span class="guilabel">Enter Unicode character value or name</span> dialog box will be displayed:
    </p></li><li><p>
      Enter the Unicode character value - e.g. "006B" or "U+006B"
    </p><p>
      OR enter the start of the character name, e.g. "LAO_LETTER" will go to LAO_LETTER_KO, being
      the first character that matches.  You can substitute spaces for underscores if you prefer.
    </p></li><li><p>
      Click OK. The character map will attempt to move to the character you specified.
    </p></li></ol></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="context_kmcomp.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="context.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="context_frmMessages.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">KMComp Command-line Options </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Message Window</td></tr></table></div>
