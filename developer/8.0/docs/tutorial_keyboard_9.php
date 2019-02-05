<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 9: The Finished Keyboard"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 9: The Finished Keyboard</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_keyboard_8.php">Prev</a> </td><th width="60%" align="center">Keyboard Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_package.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="tutorial_keyboard_9">Step 9: The Finished Keyboard</h3></div></div></div><h4><a name="id662503"></a>The Quick French Keyboard</h4><p>
    Here is the completed keyboard:
  </p><pre class="programlisting">
c Simplified French Keyboard for Keyman 7.0
c
c This keyboard program uses a simplified set of keys
c for typing French, especially for those who don't know the
c standard French keyboard.
c
c NOTE: This keyboard was created from the Keyman keyboard
c programming tutorial.

store(&amp;Version) "7.0"             c This keyboard is for use with Keyman 7.0
store(&amp;Name)    "Quick French"
store(&amp;Bitmap)  "qfrench.ico"
store(&amp;MnemonicLayout) "1"        c This keyboard uses a mnemonic layout.

begin Unicode &gt; use(Main)

group( Main ) using keys

c Store the upper and lowercase vowels with different accents
store( plainvowels )  'a'    'e'    'i'    'o'    'u'      'A'    'E'    'I'    'O'    'U'
store( acutevowels )  U+00E1 U+00E9 U+00ED U+00F3 U+00FA   U+00C1 U+00C9 U+00CD U+00D3 U+00DA
store( gravevowels )  U+00E0 U+00E8 U+00EC U+00F2 U+00F9   U+00C0 U+00C8 U+00CC U+00D2 U+00D9
store( circumvowels ) U+00E2 U+00EA U+00EE U+00F4 U+00FB   U+00C2 U+00CA U+00CE U+00D4 U+00DB
store( dresisvowels ) U+00E4 U+00EB U+00EF U+00F6 U+00FC   U+00C4 U+00CB U+00CF U+00D6 U+00DC

c Output deadkeys only for the accent keys pressed
+ "'" &gt; dk(quote)     c Quote for acute accent
+ "`" &gt; dk(bkquote)   c Backquote for grave accent
+ "^" &gt; dk(caret)     c Caret for circumflex
+ '"' &gt; dk(dbquote)   c Double-quote for dieresis

c Rules for accented vowels
dk(quote)   + any( plainvowels ) &gt; index( acutevowels, 2 )
dk(bkquote) + any( plainvowels ) &gt; index( gravevowels, 2 )
dk(caret)   + any( plainvowels ) &gt; index( circumvowels, 2 )
dk(dbquote) + any( plainvowels ) &gt; index( dresisvowels, 2 )

c Rules for other characters
dk(quote) + "y" &gt; U+00FD  c Acute-accented Y
dk(quote) + "Y" &gt; U+00DD

dk(quote) + "c" &gt; U+00E7  c C-cedilla
dk(quote) + "C" &gt; U+00C7

"&lt;" + "&lt;" &gt; U+00AB        c Angled quotes
"&gt;" + "&gt;" &gt; U+00BB

c Rules for the accent character itself (type it twice)
dk(quote)   + "'" &gt; "'"   c Quote
dk(bkquote) + "`" &gt; "`"   c Backquote
dk(caret)   + "^" &gt; "^"   c Caret
dk(dbquote) + '"' &gt; '"'   c Double-quote

c End of keyboard
    </pre></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_keyboard_8.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_keyboard.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_package.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Step 8: Deadkeys </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Package Tutorial</td></tr></table></div>
