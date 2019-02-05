<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 1: Planning the Keyboard"
  ]);
?>

<h1>Step 1: Planning the Keyboard</h1>


<h2>Choosing the characters</h2>

<p>First of all, we need to decide which characters we want the keyboard to produce. Next, we must find out the codes used to represent
them, using a program such as Character Map, or with the Character Map in Keyman Developer (go to <span class="menu-ref">View</span>,
<span class="menu-ref">Character Map</span>).</p>

<p>French uses the same 26 letters as English, with some additions. As our keyboard is based on English, we only need to work with
these additional letters. Note that for completeness, we will design our keyboard to produce a few other accented vowels that are not
used in French. Also, we want our keyboard to include the angled quotes <samp>«</samp> and <samp>»</samp>.</p>

<p>These characters, with both uppercase and lowercase forms, are listed in the table below along with their Unicode codes.</p>

<table class='display'>
  <tr>
    <td><samp>À</samp></td>
    <td><code>U+00C0</code></td>
    <td><samp>à</samp></td>
    <td><code>U+00E0</code></td>
    <td></td>
    <td><samp>Á</samp></td>
    <td><code>U+00C1</code></td>
    <td><samp>á</samp></td>
    <td><code>U+00E1</code></td>
  </tr>
  <tr>
    <td><samp>È</samp></td>
    <td><code>U+00C8</code></td>
    <td><samp>è</samp></td>
    <td><code>U+00E8</code></td>
    <td></td>
    <td><samp>É</samp></td>
    <td><code>U+00C9</code></td>
    <td><samp>é</samp></td>
    <td><code>U+00E9</code></td>
  </tr>
  <tr>
    <td><samp>Ì</samp></td>
    <td><code>U+00CC</code></td>
    <td><samp>ì</samp></td>
    <td><code>U+00EC</code></td>
    <td></td>
    <td><samp>Í</samp></td>
    <td><code>U+00CD</code></td>
    <td><samp>í</samp></td>
    <td><code>U+00ED</code></td>
  </tr>
  <tr>
    <td><samp>Ò</samp></td>
    <td><code>U+00D2</code></td>
    <td><samp>ò</samp></td>
    <td><code>U+00F2</code></td>
    <td></td>
    <td><samp>Ó</samp></td>
    <td><code>U+00D3</code></td>
    <td><samp>ó</samp></td>
    <td><code>U+00F3</code></td>
  </tr>
  <tr>
    <td><samp>Ù</samp></td>
    <td><code>U+00D9</code></td>
    <td><samp>ù</samp></td>
    <td><code>U+00F9</code></td>
    <td></td>
    <td><samp>Ú</samp></td>
    <td><code>U+00DA</code></td>
    <td><samp>ú</samp></td>
    <td><code>U+00FA</code></td>
  </tr>
  <tr>
    <td><samp>Â</samp></td>
    <td><code>U+00C2</code></td>
    <td><samp>â</samp></td>
    <td><code>U+00E2</code></td>
    <td></td>
    <td><samp>Ä</samp></td>
    <td><code>U+00C4</code></td>
    <td><samp>ä</samp></td>
    <td><code>U+00E4</code></td>
  </tr>
  <tr>
    <td><samp>Ê</samp></td>
    <td><code>U+00CA</code></td>
    <td><samp>ê</samp></td>
    <td><code>U+00EA</code></td>
    <td></td>
    <td><samp>Ë</samp></td>
    <td><code>U+00CB</code></td>
    <td><samp>ë</samp></td>
    <td><code>U+00EB</code></td>
  </tr>
  <tr>
    <td><samp>Î</samp></td>
    <td><code>U+00CE</code></td>
    <td><samp>î</samp></td>
    <td><code>U+00EE</code></td>
    <td></td>
    <td><samp>Ï</samp></td>
    <td><code>U+00CF</code></td>
    <td><samp>ï</samp></td>
    <td><code>U+00EF</code></td>
  </tr>
  <tr>
    <td><samp>Ô</samp></td>
    <td><code>U+00D4</code></td>
    <td><samp>ô</samp></td>
    <td><code>U+00F4</code></td>
    <td></td>
    <td><samp>Ö</samp></td>
    <td><code>U+00D6</code></td>
    <td><samp>ö</samp></td>
    <td><code>U+00F6</code></td>
  </tr>
  <tr>
    <td><samp>Û</samp></td>
    <td><code>U+00DB</code></td>
    <td><samp>û</samp></td>
    <td><code>U+00FB</code></td>
    <td></td>
    <td><samp>Ü</samp></td>
    <td><code>U+00DC</code></td>
    <td><samp>ü</samp></td>
    <td><code>U+00FC</code></td>
  </tr>
  <tr>
    <td><samp>Ý</samp></td>
    <td><code>U+00DD</code></td>
    <td><samp>ý</samp></td>
    <td><code>U+00FD</code></td>
    <td></td>
    <td><samp>Ç</samp></td>
    <td><code>U+00C7</code></td>
    <td><samp>ç</samp></td>
    <td><code>U+00E7</code></td>
  </tr>
  <tr>
    <td><samp>«</samp></td>
    <td><code>U+00AB</code></td>
    <td><samp>»</samp></td>
    <td><code>U+00BB</code></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
  </tr>
</table>

<p>If you are not familiar with the hexadecimal (base-16) numbering system, don't worry: you can use the Character Map in Keyman
Developer to find the character you want, and then drag-and-drop or copy-and-paste its character code into your keyboard.</p>

<p>Note that you must be careful to use the right character: The Unicode standard has many characters with the same shape as
another, but a different meaning; an example of this is the Greek capital letter Sigma (<code>U+03A3</code> <samp>Σ<samp>) and 
the mathematical summation symbol (<code>U+2211</code>, <samp>∑</samp>). An application supporting Unicode would treat these two
characters differently. If in doubt whether a character is the right one, you can look up the reference tables at 
<a class="ulink" href="http://www.unicode.org/" target="_blank">www.unicode.org</a>.</p>

<h2>Designing the layout</h2>

<p>After choosing the characters we want our keyboard to use, we must decide how we want the user to be able to enter them. For some
languages, you might replace each letter on the English keyboard with a letter from the language. In this case, however, most of the
letters are accented vowels, we will use two keystrokes for each: one for the accent, and one for the vowel.</p>

<table class='display centered'>
  <tr>
    <th>Character</th>
    <th>Keystrokes</th>
  </tr>

  <tr>
    <td><samp>À, à, ...</samp></td>
    <td>back-quote (<kbd>`</kbd>), then the vowel key.</td>
  </tr>

  <tr>
    <td><samp>Á, á, ...</samp></td>
    <td>quote (<kbd>'</kbd>), then the vowel key.</td>
  </tr>

  <tr>
    <td><samp>Â, â, ...</samp></td>
    <td>caret (<kbd>^</kbd>), then the vowel key.</td>
  </tr>

  <tr>
    <td><samp>Ä, ä, ...</samp></td>
    <td>double-quote (<kbd>"</kbd>), then the vowel key.</td>
  </tr>

  <tr>
    <td><samp>Ç, ç</samp></td>
    <td>quote (<kbd>'</kbd>), then lower- or uppercase C.</td>
  </tr>

  <tr>
    <td><samp>«, »</samp></td>
    <td>two less-than (<kbd>&lt;&lt;</kbd>) or greater-than (<kbd>>></kbd>) symbols.</td>
  </tr>
</table>

<p>Now that we have decided which character to use and how the user can enter them, we can start to write the keyboard.</p>

<p><a href="step-2.php" title="Step 2: Writing the Header">Step 2: Writing the Header</a></p>
