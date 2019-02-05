<?php
  require_once('includes/template.php');

  head([
    'title' => "Using the Character Map"
  ]);
?>

<h1>Using the Character Map</h1>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmCharacterMapNew.png') ?>" alt="Character Map tool" /></p>

<p>To display the Character Map:</p>

<ul>
  <li>Press <kbd>Ctrl></kbd>+<kbd>Shift</kbd>+<kbd>C</kbd>, or</li>
  <li>Select View | Character Map</li>
</ul>

<p>The Character Map will appear by default docked to the right hand side of the IDE but can be undocked or re-docked on any side of the window.</p>

<h3><a name="id579283" id="id579283"></a>Using the Character Map</h3>

<p>To insert a character:</p>

<ol type="1">
  <li>Position the text cursor where you want to insert the character.</li>

  <li>Locate the desired character in the Character Map and insert it by:</p>

    <ul type="disc">
      <li>selecting the character and pressing the Enter key, or</li>
      <li>double-clicking on the character, or</li>
      <li>right-clicking on the character and selecting Insert Character.</li>
    </ul>

    <aside>
      <h3 class="title">Note</h3>

      <p>If the Insert Mode is set to Code or Name, pressing Enter or double-clicking on the character will insert the Unicode code
      or name of the character, not the character itself. These options are most useful when writing or editing keyboard source files
      (.KMN).</p>
    </aside>
  </li>
</ol>

<h3><a name="id579313" id="id579313"></a>Insert Modes</h3>

<p>There are three insert modes: Code, Character and Name:</p>

<ul type="disc">
  <li>Code inserts the character's Unicode code</li>
  <li>Character inserts the character itself</li>
  <li>Name inserts the character's Unicode name</li>
</ul>

<p>To change the insert mode:</p>

<ol type="1">
  <li>Right-click on the Character Map.</li>
  <li>Highlight the Insert Mode submenu.</li>
  <li>Choose the desired mode from the Insert Mode submenu.</li>
</ol>

<h3><a name="id579387" id="id579387"></a>Character Map Options</h3>

<p>When you right click on the Character Map, the following menu options are displayed:</p>

<dl>
  <dt>Insert Character</dt>
  <dd>Inserts the selected character at the cursor position in your document.</dd>

  <dt>Filter...</dt>
  <dd>Displays the Filter dialog box. See Filtering below.</dd>

  <dt>Goto...</dt>
  <dd>Displays the Goto dialog box. See Using Goto below.</dd>

  <dt>Font...</dt>

  <dd>Allows you to choose a different font for viewing the Character Map. Note: This does not affect the font being used in your
  document!</dd>

  <dt>Insert Mode</dt>
  <dd>Allows you to select the character insert mode you want. See Insert Modes above.</dd>

  <dt>Display Quality</dt>
  <dd>
    Allows you to select a different font display quality for the Character Map. The options are:

    <ul type="disc">
      <li>Plain - no font smoothing</li>
      <li>Antialiased - uses the Windows standard font smoothing</li>
      <li>ClearType - uses the Windows ClearType font smoothing method</li>
    </ul>
  </dd>
</dl>
      
<h3><a name="id579511" id="id579511"></a>Characters and Fonts</h3>

<p>When a character is not available in the selected font, the Character Map will fall back to Code2000, Code2001, Code2002, Arial
Unicode MS and Lucida Sans Unicode fonts. If the character is not found in these fallback fonts, the Character Map will use font
linking to attempt to find a character from other fonts installed on the system, and as a last resort, will show a square box if no
suitable font can be found.</p>

<p>If a character is not displayed from other than the selected font, it will be shown in blue instead of black.</p>

<h3><a name="id579525" id="id579525"></a>Filtering</h3>

<p class='context-main-image'><img src="<?= cdn('img/developer/90/ui/frmCharacterMapFilter.png') ?>" alt="Character Map Filter dialog" /></p>

<p>The Character Map can be filtered by Unicode character name or character range. Filters can be entered in the Filter By field at the
bottom of the Character Map; a quick reference user interface dialog to help you edit the filter is available by clicking the [...]
button.</p>

<p>When no filter is applied, the Character Map will show all characters from the Unicode 8.0 standard.</p>

<p>All filter strings are case insensitive. Character names use the letters <code>A-Z</code>, numerals <code>0-9</code>, and punctuation underscore (<code>_</code>) and
hyphen (<code>-</code>).</p>

<p>Spaces between words in the filter are represented either by underscore (<code>_</code>) or space (<code> </code>) and can be used interchangeably.</p>

<p>A filter can be for a range or on the Unicode Character Name.</p>

<p>The filter format for a range is: <code>[U+]XXXX-[U+]YYYY</code>, where <code>U+</code> is optional, <code>XXXX</code> is the starting Unicode value and <code>YYYY</code> is the finishing Unicode value.</p>

<p>The filtering options for Unicode Character Names are:</p>

<h3><a name="id579535" id="id579535"></a>Examples</h3>

<table class='display'>
  <colgroup>
    <col>
    <col>
  </colgroup>

  <tbody>
    <tr>
      <th>Filter</th>
      <th>Result</th>
    </tr>

    <tr>
      <td><code>LATIN CAPITAL LETTER A</code></td>
      <td>Finds all Latin capital A variations</td>
    </tr>

    <tr>
      <td><code>LATIN * LETTER A</code></td>
      <td>finds all Latin capital and lower case A variations</td>
    </tr>

    <tr>
      <td><code>LATIN * LETTER [AEIOU]</code></td>
      <td>finds all all Latin A,E,I,O or U vowel combinations</td>
    </tr>

    <tr>
      <td><code>&lt;Thai</code></td>
      <td>finds the Thai Unicode block</td>
    </tr>

    <tr>
      <td><code>>LAO</code></td>
      <td>finds all characters with names starting in "LAO" in the current font</td>
    </tr>

    <tr>
      <td><code>YI_</code></td>
      <td>finds all characters with names starting in "YI " - you must use <code>_</code> (underscore) and 
      not <code> </code> (space) at the end of a search string. Note that without the <code>_</code>, this 
      search also matches YIN_YANG.</td>
    </tr>

    <tr>
      <td><code>LATIN * LETTER A$</code></td>
      <td>finds only "a" and "A"</td>
    </tr>

    <tr>
      <td><code>1000-119F</code></td>
      <td>finds all characters between U+1000 and U+119F (inclusive) - the Myanmar alphabet in this case</td>
    </tr>
  </tbody>
</table>

<h3><a name="id579672" id="id579672"></a>Goto</h3>

<p>The Goto tool can be used to move directly to a specific Unicode character or value.</p>

<ol type="1">
  <li>Right click on a character and select Goto.<br/>
    The <span class="guilabel">Enter Unicode character value or name</span> dialog box will be displayed:</li>

  <li>Enter the Unicode character value - e.g. <code>006B</code> or <code>U+006B</code><br/>
    OR enter the start of the character name, e.g. <code>LAO_LETTER</code> will go to <strong>LAO_LETTER_KO</strong>, being 
    the first character that matches. You can substitute spaces for underscores if you prefer.</li>

  <li>Click OK. The character map will attempt to move to the character you specified.</li>
</ol>
