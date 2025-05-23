<?php /*
  Name:             keyboard_ekwtamil99uni
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
  History:          18 Sep 2009 - mcdurdin - Full help
*/
  require_once('servervars.php');
  $pagename = 'Tamil99 Keyboard Help';
  $pagetitle = 'Tamil99 Keyboard Help';
  $style = 'lang2 {font-size:130%}';

  $relatedSites = array("$keyman_com/tamil" => "Tamil Keyboards Home");
  require_once('header.php');
  ?>


<p style='margin:0px'>Keyboard &#169; 2008 thamizha.com and Tavultesoft</p>

<br/>
<a href="#Overview">Overview</a><br/>
<a href="#Using">Using this Keyboard</a><br/>
<a style='margin-left:20px' href="#osk">Keyboard Layout</a><br/>
<a style='margin-left:20px' href="#Quickstart">Quickstart</a><br/>
<a style='margin-left:20px' href="#Examples">Examples</a><br/>
<a style='margin-left:20px' href="#Documentation">Keyboard Details</a><br/>
<a style='margin-left:30px' href="chart.php">Complete Keyboard Reference Chart</a><br/>
<a href="#Troubleshooting">Troubleshooting</a><br/>
<a href="#Resources">Further Resources</a><br/>
<a style='margin-left:20px' href="#Related">Related Keyboard Layouts</a><br/>
<a href="#Technical">Technical Information</a><br/>
<a style='margin-left:20px' href="#Authorship">Authorship</a><br/>



<div id='Overview'>
		<!-- A brief introduction to the keyboard, including intended users and font/hardware requirements.  This is basically
the info available on the keyboard download site.  Instructions on using the keyboard DO NOT go here. -->

<h2>Overview</h2>
<p>
This keyboard is designed for the Tamil language, and uses the Tamil 99 standard which has been officially approved by the regional government of Tamil Nadu.  Typing follows a consonant-vowel pattern, and the Tamil characters are arranged to make typing simple and fast for users who are familiar with the script.  It is designed for use with a normal QWERTY (English) keyboard.
</p>
<p class='keymanweb'>
Most computers will automatically download a special font if needed to display this language correctly.
</p>
<p>
<a href="#Related">Click here</a> to see other keyboard layouts for Tamil.
</p>
</div>


<div id='Using'>
<h2>Using this Keyboard</h2>
</div>

<h3>Keyboard Layout</h3>
		<!-- On Screen Keyboard is automatically included here -->

<div id='osk'>
</div>

<div id='Quickstart'>
<h3>Quickstart</h3>
		<!-- Basic instructions designed to get users up and running with typing -->

<p>This keyboard layout was designed for ease of typing.  Characters are arranged on the keyboard according to how frequently they are used.  Grantha letters, which are used for typing Sanskrit, are typed using the <span class='keys'>[S*]</span> key.
Short and long vowels appear next to each other.  For example, <span class='highlightExample'>ஆ</span> (<span class='keys'>q</span> key) is above <span class='highlightExample'>அ</span> (<span class='keys'>a</span> key) , and <span class='highlightExample'>ஓ</span> (<span class='keys'>x</span> key) is beside <span class='highlightExample'>ஒ</span> (<span class='keys'>c</span> key).  Characters which normally appear together are also close together on the keyboard.</p>

<p>Most of the characters used in Tamil are combinations of consonants and vowels, and these do not appear on the keyboard. Combined consonant-vowel characters are entered by typing the consonant, then the vowel.  To enter <span class='highlightExample'>ஙா</span>, which is a combination of <span class='highlightExample'>ங</span> and <span class='highlightExample'>ஆ</span>, type <span class='keys'>b</span> then <span class='keys'>q</span>, and the combinant character will automatically be displayed.  Pressing Backspace once will delete only the vowel component, so the character displayed on the screen will change back to <span class='highlightExample'>ங</span>, and change again if a different vowel is typed.</p>


</div>

<div id="Examples">
<h3>Examples</h3>
		<!-- Simple example(s) illustrating the notes in the Quickstart section above -->

<?php renderLanguageExamples(); ?>
</div>

<div id="Documentation">
<h3>Keyboard Details</h3>
		<!-- The guts of the documentation: reasoning behind the keyboard layout; detailed instructions on typing & editing; instructions on special characters or keyboard behaviour, etc.; complete character/input chart or link to chart; -->

<p>This keyboard uses a consonant-vowel order for text input, so the consonant character is always typed before the vowel, regardless of where (relative to the consonant) the vowel marker symbol appears.  As syllables are typed, the characters entered are automatically converted to the appropriate consonant-vowel combinant.  While only the combinant characters are displayed on screen, the consonant and vowel are both stored, so that pressing Backspace once after a combinant deletes only the vowel component.  This means it is necessary to press Backspace twice to delete a combinant character.  However, pressing the Delete key with the cursor in front of a combinant character removes the whole character with one keystroke.</p>

<p>The full keyboard layout consists of the twelve vowels <span class='lang2'>அ ஆ இ ஈ உ ஊ எ ஏ ஐ ஒ ஓ ஔ</span>, the eighteen consonants <span class='lang2'>க ங ச ஞ ட ண த ந ப ம ய ர ல வ ழ ள ற ன</span>, the five Grantha consonants <span class='lang2'>ஸ ஷ ஜ ஹ க்ஷ</span>, the SRii consonant <span class='lang2'>ஸ்ரீ</span>, and the Pulli <span class='lang2'>்</span> and Aytham <span class='lang2'>ஃ</span> marks.</p>

<h4>Pulli Marks and Vowels</h4>
<p>Because the consonants contain the implicit vowel <span class='lang2'>அ</span>, to produce a pure consonant it is necessary to add the Pulli mark <span class='lang2'>்</span> by typing a lower case <span class='keys'>f</span> immediately after the consonant.  Typing the same consonant twice in a row will also convert the first consonant to a consonant-Pulli combinant.  This automatic conversion is then disabled, so that typing the same consonant a third time will not produce a Pulli mark on the second consonant.  Thus typing the same consonant repeatedly results in Pulli marks on the first, third, fifth and so on: <span class='lang2'>க்கக்கக்கக்க</span></p>
<p>Similarly, tying a soft consonant followed by the corresponding hard consonant automatically produces a Pulli mark on the first consonant: <span class='lang2'>ங்க</span></p>
<p>The first vowel <span class='lang2'>அ</span> is implicit in the consonants, so typing this vowel after a consonant will not display the vowel or change the consonant to a combinant.  However, this does de-link the consonant from the next keystroke, so that typing another vowel will result in that vowel being displayed independently, rather than combining with the consonant.  This also prevents the Pulli mark being entered.</p>
<p>In general, typing a vowel after anything other than a consonant produces an independent vowel.</p>

<h4>The SRii Character <img src='srii/tamil_srii.png' style='vertical-align:middle' /></h4>
<p>
This character is entered by typing <span class='keys'>T</span>.  <span class='keymanweb'>Currently, some browsers do not display this character correctly.  <a href="srii/tamil_srii.php">Click here</a> if you are having difficulty entering this character.</span>
</p>

<h4>Keystroke Examples</h4>
<p>Note: for a complete table of characters and keystrokes, <a href="chart.php">click here</a>.</p>
<p>The following table gives specific examples of how to input characters based on the consonant <span class='highlightExample'>க</span>.  The Grantha consonants, which are entered with <span class='keys'>[S*]</span> key combinations, use the same input method.  Examples of these with the consonant <span class='highlightExample'>ஜ</span> are also given below.</p>
<br/>
<table>
	<col width=80 span=3 />
	<col width=100 />
	<col width=40 />
	<col width=80 span=3 />
	<col width=100 />
	<tr style='text-align:center; font-weight:bold'>
		<td colspan=4>Tamil Consonants</td>
		<td></td>
		<td colspan=4>Grantha Consonants</td>
	<tr style='text-align:center; font-weight:normal'>
		<td>Consonant</td><td>Vowel/Pulli</td><td>Combinant</td><td>Keystrokes</td>
		<td></td>
		<td>Consonant</td><td>Vowel/Pulli</td><td>Combinant</td><td>Keystrokes</td>
	</tr>
	<tr style='text-align:center'>
		<td class='lang2'>க</td><td>்</td><td class='lang2'>க்</td><td><span class='keys'>hf</span></td>
		<td></td>
		<td class='lang2'>ஜ</td><td>்</td><td class='lang2'>ஜ்</td><td><span class='keys'>Ef</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>அ</td><td class='lang2'>க‍</td><td><span class='keys'>ha</span></td>
		<td></td>
		<td></td><td class='lang2'>அ</td><td class='lang2'>ஜ‍</td><td><span class='keys'>Ea</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஆ</td><td class='lang2'>கா</td><td><span class='keys'>hq</span></td>
		<td></td>
		<td></td><td class='lang2'>ஆ</td><td class='lang2'>ஜா</td><td><span class='keys'>Eq</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>இ</td><td class='lang2'>கி</td><td><span class='keys'>hs</span></td>
		<td></td>
		<td></td><td class='lang2'>இ</td><td class='lang2'>ஜி</td><td><span class='keys'>Es</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஈ</td><td class='lang2'>கீ</td><td><span class='keys'>hw</span></td>
		<td></td>
		<td></td><td class='lang2'>ஈ</td><td class='lang2'>ஜீ</td><td><span class='keys'>Ew</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>உ</td><td class='lang2'>கு</td><td><span class='keys'>hd</span></td>
		<td></td>
		<td></td><td class='lang2'>உ</td><td class='lang2'>ஜு</td><td><span class='keys'>Ed</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஊ</td><td class='lang2'>கூ</td><td><span class='keys'>he</span></td>
		<td></td>
		<td></td><td class='lang2'>ஊ</td><td class='lang2'>ஜூ</td><td><span class='keys'>Ee</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>எ</td><td class='lang2'>கெ</td><td><span class='keys'>hg</span></td>
		<td></td>
		<td></td><td class='lang2'>எ</td><td class='lang2'>ஜெ</td><td><span class='keys'>Eg</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஏ</td><td class='lang2'>கே</td><td><span class='keys'>ht</span></td>
		<td></td>
		<td></td><td class='lang2'>ஏ</td><td class='lang2'>ஜே</td><td><span class='keys'>Et</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஐ</td><td class='lang2'>கை</td><td><span class='keys'>hr</span></td>
		<td></td>
		<td></td><td class='lang2'>ஐ</td><td class='lang2'>ஜை</td><td><span class='keys'>Er</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஒ</td><td class='lang2'>கொ</td><td><span class='keys'>hc</span></td>
		<td></td>
		<td></td><td class='lang2'>ஒ</td><td class='lang2'>ஜொ</td><td><span class='keys'>Ec</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஓ</td><td class='lang2'>கோ</td><td><span class='keys'>hx</span></td>
		<td></td>
		<td></td><td class='lang2'>ஓ</td><td class='lang2'>ஜோ</td><td><span class='keys'>Ex</span></td>
	</tr>
	<tr style='text-align:center'>
		<td></td><td class='lang2'>ஔ</td><td class='lang2'>கௌ</td><td><span class='keys'>hz</span></td>
		<td></td>
		<td></td><td class='lang2'>ஔ</td><td class='lang2'>ஜௌ</td><td><span class='keys'>Ez</span></td>
	</tr>

</table>

<h4>Other Characters</h4>
<table>
	<col width=200 />
	<col width=80 span=2 />
	<col width=40 />
	<col width=200 />
	<col width=80 span=2 />
	<tr valign="top">
		<td style='text-align:left'>Apart from the Grantha consonants, several other characters are also typed using the <span class='keys'>[S*]</span> key.  These include:</td>
		<td style='text-align:center'>Character
		<p style='line-height:15px'><span class='lang2' >௳</span> (day)</p>
		<p style='line-height:15px'><span class='lang2' >௴</span> (month)</p>
		<p style='line-height:15px'><span class='lang2' >௵</span> (year)</p>
		<p style='line-height:15px'><span class='lang2' >௶</span> (debit)</p>
		<p style='line-height:15px'><span class='lang2' >௷</span> (credit)</p>
		<p style='line-height:15px'><span class='lang2' >௸</span> (etc.)</p>
		<p style='line-height:15px'><span class='lang2' >௹</span> (Rupee)</p>
		<p style='line-height:15px'><span class='lang2' >௺</span> (numeral)</p>
		</td>
		<td style='text-align:center'>Keystrokes
		<p style='line-height:15px'><span class='keys' >Z</span></p>
		<p style='line-height:15px'><span class='keys' >X</span></p>
		<p style='line-height:15px'><span class='keys' >C</span></p>
		<p style='line-height:15px'><span class='keys' >V</span></p>
		<p style='line-height:15px'><span class='keys' >B</span></p>
		<p style='line-height:15px'><span class='keys' >D</span></p>
		<p style='line-height:15px'><span class='keys' >A</span></p>
		<p style='line-height:15px'><span class='keys' >S</span></p>
		</td>
		<td width=50></td>
		<td style='text-align:left'>The caret mark (<span class='keys'>6</span>) is used to produce various other characters, such as the glyphs used as vowel modifiers.  These can be produced by typing the caret mark <span class='keys'>^</span> and then the corresponding vowel.  Other characters typed in combination with <span class='keys'>^</span> are given in the table on the right:</td>
		<td style='text-align:center'>Character
		<p style='line-height:15px'><span class='lang2'>‘</span></p>
		<p style='line-height:15px'><span class='lang2'>’</span></p>
		<p style='line-height:15px'><span class='lang2'>“</span></p>
		<p style='line-height:15px'><span class='lang2'>”</span></p>
		<p style='line-height:15px'><span class='lang2'>©</span></p>
		<p style='line-height:15px'><span class='lang2'>•</span></p>
		<p style='line-height:15px'><span class='lang2'>^</span></p>
		</td>
		<td style='text-align:center'>Keystrokes
		<p style='line-height:15px'><span class='keys'>^7</span></p>
		<p style='line-height:15px'><span class='keys'>^8</span></p>
		<p style='line-height:15px'><span class='keys'>^9</span></p>
		<p style='line-height:15px'><span class='keys'>^0</span></p>
		<p style='line-height:15px'><span class='keys'>^c</span></p>
		<p style='line-height:15px'><span class='keys'>^.</span></p>
		<p style='line-height:15px'><span class='keys'>^^</span></p>
		</td>
		</tr>
</table>

</div>

<div id="Troubleshooting">
		<!-- How to resolve common issues/difficulties using the keyboard; including link to Square Boxes help page -->

<h2>Troubleshooting</h2>
<div class='keymandesktop'>
<h4>Using Tamil keyboards with Word 2007</h4>
<p style='margin-bottom: 4px'>Sometimes when using Word 2007, the Pulli mark <span class='lang2'>்</span> is not suppressed correctly.  For example:</p>
  <table style='text-align:left'>
  <col width=180 span=3 />
  <tr><td>Key sequence</td><td>Correct output</td><td>Word output</td></tr>
  <tr class='lang2'><td>&#x0b95; + &#x0b85; + &#x0b95;</td><td>&#x0b95;&#x0b95;</td><td>&#x0b95;&#x0bcd;&#x0b95;</td></tr>
  <tr class='lang2'><td>&#x0b95; + &#x0b95; + &#x0b95;+ &#x0b95;</td>
    <td>&#x0b95;&#x0bcd;&#x0b95;&#x0b95;&#x0bcd;&#x0b95;</td>
    <td>&#x0b95;&#x0bcd;&#x0b95;&#x0bcd;&#x0b95;&#x0bcd;&#x0b95;</td>
  </tr>
  </table>

<p style='margin-top: 4px'>The easiest ways to deal with this are to move the cursor and press Backspace to delete the unwanted Pulli mark, or else enable the <span style='font-weight:bold'>Text Services Framework Add-In</span> if you are using Keyman Desktop Professional.
Disabling <span style='font-style:italic'>Tamil language editing</span> in <span style='font-style:italic'>Microsoft Office Language Settings</span> will also correct the input behaviour, but this is not recommended, as it makes selection of fonts more difficult.</p>
</div>

<h4> Fonts</h4>
<p>Some of the fonts included with Windows do not include all the Tamil characters that are available with this keyboard.  In order to display every character correctly, we recommend you download and install <span style="font-weight:bold">Tamil fonts</span>.</p>
<p class='keymanweb'>If the characters you type or those on the On Screen Keyboard do not appear to display correctly, please read the <a href="/troubleshooting/#boxes">KeymanWeb troubleshooting guide</a>.</p>

<h4>Problem Solving</h4>
<p>If the preceding consonant does not change to a vowel-consonant combinant character when you type a vowel, confirm that you have not typed a Pulli mark <span class='lang2'>்</span>, which identifies the consonant as a pure consonant, or the first vowel அ, which identifies the consonant as the implicit-vowel consonant.  Typing either of these after a consonant will prevent that consonant from changing to a combinant character.
</p>

</div>

<div id="Resources">
		<!-- List of places to go for further information  -->

<h2>Further Resources</h2>
<div id="Related">
		<!-- A list of links to related keyboards - to the help pages or to (download) the keyboards? -->

<h3>Related Keyboard Layouts</h3>
<p>Other Keyboard Layouts for the Tamil language:</p>
<p><a href="/go?language=tam&amp;keyboard=Keyboard_ekwbamuni">Suratha Bamuni (Bamini Typewriter)</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_ekwunitamil">Anjal Paangu</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_isis_tamil">ISIS Tamil</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_tamil">Inscript Tamil</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_visual_media_tamil_modular">Modular (Visual Media)</a><br/>
<a href="/go?language=tam&amp;keyboard=Keyboard_visual_media_tamil_typewriter">Typewriter (Visual Media)</a></p>

</div>
<h3>Other Internet Resources</h3>
<p><a target="_blank" href="http://www.tavultesoft.com/keyman/downloads/keyboards/details.php?KeyboardID=451&amp;FromKeyman=0">Download Tamil99 Keyboard for Keyman Desktop</a></p>
<p><a target="_blank" href="http://www.omniglot.com/writing/tamil.htm">Tamil Writing System at Omniglot.com</a><br/>
<a target="_blank" href="http://en.wikipedia.org/wiki/tamil_language">Tamil Language at Wikipedia.org</a><br/>
<a target="_blank" href="http://en.wikipedia.org/wiki/tamil_script.htm">Tamil Script at Wikipedia.org</a></p>

</div>




<div id="Technical">
<h2>Technical Information</h2>
<h3>System Requirements</h3>
<p>It is recommended that you use an English QWERTY hardware keyboard with this keyboard.
</p>
<h3>Unicode Version</h3>
<p>This keyboard complies with Unicode 5.1</p>

</div>


<div id="Authorship">
<h3>Keyboard Authorship</h3>
<p>
This keyboard was created by Mugunth (mugunth@gmail.com), Umar (csd_one@yahoo.com) and K. Sethu (skhome@gmail.com).  For more information about keyboards produced by these developers, see <a target="_blank" href="http://thamizha.com">http://thamizha.com</a>.  Tavultesoft gratefully acknowledges the contribution made by the authors in developing this keyboard and making it freely available for use with Keyman Desktop and KeymanWeb.  Their effort assists in enabling people to communicate in their own language.
</p>
<h3>Copyright and Terms of Use</h3>
<p>
The Tamil99 Keyboard for Keyman Desktop and KeymanWeb is Copyright thamizha.com and Tavultesoft.  It may be freely distributed and used, but must not be modified or adapted in any way without written permission from Tavultesoft.
</p>
<p>
THIS SOFTWARE IS PROVIDED BY TAVULTESOFT PTY LTD "AS IS" AND ANY
EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
DISCLAIMED. IN NO EVENT SHALL TAVULTESOFT PTY LTD BE LIABLE FOR ANY
DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES
(INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES;
LOSS OF USE, DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND
ON ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT
(INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY OUT OF THE USE OF THIS
SOFTWARE, EVEN IF ADVISED OF THE POSSIBILITY OF SUCH DAMAGE.
</p>
</div>

<h2>Keyboard Reference Chart</h2>
<p>The following chart lists all the characters available with this keyboard.  Below each character are the keystrokes required to type it.</p>

<table border=0 cellspacing=2 cellpadding=1>
	<col width=76 style='text-align:center; background-color:#dedede' />
	<col span=13 width=55 style='text-align:center; background-color:#ffffff' />
	<!-- tr style='text-align: left; font-weight:bold; background-color:#ffffff'>
		<td></td>
		<td style='background-color:#dedede' colspan=13>Pulli Mark & Vowels</td>
	</tr -->
	<tr style='text-align:center; font-weight:normal; background-color:#dedede'>
		<td style='text-align:right; font-weight:bold; background-color:#dedede' valign=bottom>\<span style='text-decoration:underline'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Vowels</span>&nbsp;<br/>Consonants\</td>
		<td><span class='lang2' >்</span><br/><span class='keys'>f</span></td>
		<td><span class='lang2' >அ</span><br/><span class='keys'>a</span></td>
		<td><span class='lang2' >ஆ</span><br/><span class='keys'>q</span></td>
		<td><span class='lang2' >இ</span><br/><span class='keys'>s</span></td>
		<td><span class='lang2' >ஈ</span><br/><span class='keys'>w</span></td>
		<td><span class='lang2' >உ</span><br/><span class='keys'>d</span></td>
		<td><span class='lang2' >ஊ</span><br/><span class='keys'>e</span></td>
		<td><span class='lang2' >எ</span><br/><span class='keys'>g</span></td>
		<td><span class='lang2' >ஏ</span><br/><span class='keys'>t</span></td>
		<td><span class='lang2' >ஐ</span><br/><span class='keys'>r</span></td>
		<td><span class='lang2' >ஒ</span><br/><span class='keys'>c</span></td>
		<td><span class='lang2' >ஓ</span><br/><span class='keys'>x</span></td>
		<td><span class='lang2' >ஔ</span><br/><span class='keys'>z</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >க</span><br/><span class='keys'>h</span></td>
		<td><span class='lang2' >க்</span><br/><span class='keys'>hf</span></td>
		<td><span class='lang2' >க‍</span><br/><span class='keys'>ha</span></td>
		<td><span class='lang2' >கா</span><br/><span class='keys'>hq</span></td>
		<td><span class='lang2' >கி</span><br/><span class='keys'>hs</span></td>
		<td><span class='lang2' >கீ</span><br/><span class='keys'>hw</span></td>
		<td><span class='lang2' >கு</span><br/><span class='keys'>hd</span></td>
		<td><span class='lang2' >கூ</span><br/><span class='keys'>he</span></td>
		<td><span class='lang2' >கெ</span><br/><span class='keys'>hg</span></td>
		<td><span class='lang2' >கே</span><br/><span class='keys'>ht</span></td>
		<td><span class='lang2' >கை</span><br/><span class='keys'>hr</span></td>
		<td><span class='lang2' >கொ</span><br/><span class='keys'>hc</span></td>
		<td><span class='lang2' >கோ</span><br/><span class='keys'>hx</span></td>
		<td><span class='lang2' >கௌ</span><br/><span class='keys'>hz</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ங</span><br/><span class='keys'>b</span></td>
		<td><span class='lang2' >ங்</span><br/><span class='keys'>bf</span></td>
		<td><span class='lang2' >ங‍</span><br/><span class='keys'>ba</span></td>
		<td><span class='lang2' >ஙா</span><br/><span class='keys'>bq</span></td>
		<td><span class='lang2' >ஙி</span><br/><span class='keys'>bs</span></td>
		<td><span class='lang2' >ஙீ</span><br/><span class='keys'>bw</span></td>
		<td><span class='lang2' >ஙு</span><br/><span class='keys'>bd</span></td>
		<td><span class='lang2' >ஙூ</span><br/><span class='keys'>be</span></td>
		<td><span class='lang2' >ஙெ</span><br/><span class='keys'>bg</span></td>
		<td><span class='lang2' >ஙே</span><br/><span class='keys'>bt</span></td>
		<td><span class='lang2' >ஙை</span><br/><span class='keys'>br</span></td>
		<td><span class='lang2' >ஙொ</span><br/><span class='keys'>bc</span></td>
		<td><span class='lang2' >ஙோ</span><br/><span class='keys'>bx</span></td>
		<td><span class='lang2' >ஙௌ</span><br/><span class='keys'>bz</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ச</span><br/><span class='keys'>[</span></td>
		<td><span class='lang2' >ச்</span><br/><span class='keys'>[f</span></td>
		<td><span class='lang2' >ச‍</span><br/><span class='keys'>[a</span></td>
		<td><span class='lang2' >சா</span><br/><span class='keys'>[q</span></td>
		<td><span class='lang2' >சி</span><br/><span class='keys'>[s</span></td>
		<td><span class='lang2' >சீ</span><br/><span class='keys'>[w</span></td>
		<td><span class='lang2' >சு</span><br/><span class='keys'>[d</span></td>
		<td><span class='lang2' >சூ</span><br/><span class='keys'>[e</span></td>
		<td><span class='lang2' >செ</span><br/><span class='keys'>[g</span></td>
		<td><span class='lang2' >சே</span><br/><span class='keys'>[t</span></td>
		<td><span class='lang2' >சை</span><br/><span class='keys'>[r</span></td>
		<td><span class='lang2' >சொ</span><br/><span class='keys'>[c</span></td>
		<td><span class='lang2' >சோ</span><br/><span class='keys'>[x</span></td>
		<td><span class='lang2' >சௌ</span><br/><span class='keys'>[z</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ஞ</span><br/><span class='keys'>]</span></td>
		<td><span class='lang2' >ஞ்</span><br/><span class='keys'>]f</span></td>
		<td><span class='lang2' >ஞ‍</span><br/><span class='keys'>]a</span></td>
		<td><span class='lang2' >ஞா</span><br/><span class='keys'>]q</span></td>
		<td><span class='lang2' >ஞி</span><br/><span class='keys'>]s</span></td>
		<td><span class='lang2' >ஞீ</span><br/><span class='keys'>]w</span></td>
		<td><span class='lang2' >ஞு</span><br/><span class='keys'>]d</span></td>
		<td><span class='lang2' >ஞூ</span><br/><span class='keys'>]e</span></td>
		<td><span class='lang2' >ஞெ</span><br/><span class='keys'>]g</span></td>
		<td><span class='lang2' >ஞை</span><br/><span class='keys'>]t</span></td>
		<td><span class='lang2' >ஞை</span><br/><span class='keys'>]r</span></td>
		<td><span class='lang2' >ஞொ</span><br/><span class='keys'>]c</span></td>
		<td><span class='lang2' >ஞோ</span><br/><span class='keys'>]x</span></td>
		<td><span class='lang2' >ஞௌ</span><br/><span class='keys'>]z</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ட</span><br/><span class='keys'>o</span></td>
		<td><span class='lang2' >ட்</span><br/><span class='keys'>of</span></td>
		<td><span class='lang2' >ட‍</span><br/><span class='keys'>oa</span></td>
		<td><span class='lang2' >டா</span><br/><span class='keys'>oq</span></td>
		<td><span class='lang2' >டி</span><br/><span class='keys'>os</span></td>
		<td><span class='lang2' >டீ</span><br/><span class='keys'>ow</span></td>
		<td><span class='lang2' >டு</span><br/><span class='keys'>od</span></td>
		<td><span class='lang2' >டூ</span><br/><span class='keys'>oe</span></td>
		<td><span class='lang2' >டெ</span><br/><span class='keys'>og</span></td>
		<td><span class='lang2' >டே</span><br/><span class='keys'>ot</span></td>
		<td><span class='lang2' >டை</span><br/><span class='keys'>or</span></td>
		<td><span class='lang2' >டொ</span><br/><span class='keys'>oc</span></td>
		<td><span class='lang2' >டோ</span><br/><span class='keys'>ox</span></td>
		<td><span class='lang2' >டௌ</span><br/><span class='keys'>oz</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ண</span><br/><span class='keys'>p</span></td>
		<td><span class='lang2' >ண்</span><br/><span class='keys'>pf</span></td>
		<td><span class='lang2' >ண‍</span><br/><span class='keys'>pa</span></td>
		<td><span class='lang2' >ணா</span><br/><span class='keys'>pq</span></td>
		<td><span class='lang2' >ணி</span><br/><span class='keys'>ps</span></td>
		<td><span class='lang2' >ணீ</span><br/><span class='keys'>pw</span></td>
		<td><span class='lang2' >ணு</span><br/><span class='keys'>pd</span></td>
		<td><span class='lang2' >ணூ</span><br/><span class='keys'>pe</span></td>
		<td><span class='lang2' >ணெ</span><br/><span class='keys'>pg</span></td>
		<td><span class='lang2' >ணே</span><br/><span class='keys'>pt</span></td>
		<td><span class='lang2' >ணை</span><br/><span class='keys'>pr</span></td>
		<td><span class='lang2' >ணொ</span><br/><span class='keys'>pc</span></td>
		<td><span class='lang2' >ணோ</span><br/><span class='keys'>px</span></td>
		<td><span class='lang2' >ணௌ</span><br/><span class='keys'>pz</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >த</span><br/><span class='keys'>l</span></td>
		<td><span class='lang2' >த்</span><br/><span class='keys'>lf</span></td>
		<td><span class='lang2' >த‍</span><br/><span class='keys'>la</span></td>
		<td><span class='lang2' >தா</span><br/><span class='keys'>lq</span></td>
		<td><span class='lang2' >தி</span><br/><span class='keys'>ls</span></td>
		<td><span class='lang2' >தீ</span><br/><span class='keys'>lw</span></td>
		<td><span class='lang2' >து</span><br/><span class='keys'>ld</span></td>
		<td><span class='lang2' >தூ</span><br/><span class='keys'>le</span></td>
		<td><span class='lang2' >தெ</span><br/><span class='keys'>lg</span></td>
		<td><span class='lang2' >தே</span><br/><span class='keys'>lt</span></td>
		<td><span class='lang2' >தை</span><br/><span class='keys'>lr</span></td>
		<td><span class='lang2' >தொ</span><br/><span class='keys'>lc</span></td>
		<td><span class='lang2' >தோ</span><br/><span class='keys'>lx</span></td>
		<td><span class='lang2' >தௌ</span><br/><span class='keys'>lz</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ந</span><br/><span class='keys'>;</span></td>
		<td><span class='lang2' >ந்</span><br/><span class='keys'>;f</span></td>
		<td><span class='lang2' >ந‍</span><br/><span class='keys'>;a</span></td>
		<td><span class='lang2' >நா</span><br/><span class='keys'>;q</span></td>
		<td><span class='lang2' >நி</span><br/><span class='keys'>;s</span></td>
		<td><span class='lang2' >நீ</span><br/><span class='keys'>;w</span></td>
		<td><span class='lang2' >நு</span><br/><span class='keys'>;d</span></td>
		<td><span class='lang2' >நூ</span><br/><span class='keys'>;e</span></td>
		<td><span class='lang2' >நெ</span><br/><span class='keys'>;g</span></td>
		<td><span class='lang2' >நே</span><br/><span class='keys'>;t</span></td>
		<td><span class='lang2' >நை</span><br/><span class='keys'>;r</span></td>
		<td><span class='lang2' >நொ</span><br/><span class='keys'>;c</span></td>
		<td><span class='lang2' >நோ</span><br/><span class='keys'>;x</span></td>
		<td><span class='lang2' >நௌ</span><br/><span class='keys'>;z</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ப</span><br/><span class='keys'>j</span></td>
		<td><span class='lang2' >ப்</span><br/><span class='keys'>jf</span></td>
		<td><span class='lang2' >ப‍</span><br/><span class='keys'>ja</span></td>
		<td><span class='lang2' >பா</span><br/><span class='keys'>jq</span></td>
		<td><span class='lang2' >பி</span><br/><span class='keys'>js</span></td>
		<td><span class='lang2' >பீ</span><br/><span class='keys'>jw</span></td>
		<td><span class='lang2' >பு</span><br/><span class='keys'>jd</span></td>
		<td><span class='lang2' >பூ</span><br/><span class='keys'>je</span></td>
		<td><span class='lang2' >பெ</span><br/><span class='keys'>jg</span></td>
		<td><span class='lang2' >பே</span><br/><span class='keys'>jt</span></td>
		<td><span class='lang2' >பை</span><br/><span class='keys'>jr</span></td>
		<td><span class='lang2' >பொ</span><br/><span class='keys'>jc</span></td>
		<td><span class='lang2' >போ</span><br/><span class='keys'>jx</span></td>
		<td><span class='lang2' >பௌ</span><br/><span class='keys'>jz</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ம</span><br/><span class='keys'>k</span></td>
		<td><span class='lang2' >ம்</span><br/><span class='keys'>kf</span></td>
		<td><span class='lang2' >மா</span><br/><span class='keys'>ka</span></td>
		<td><span class='lang2' >மா</span><br/><span class='keys'>kq</span></td>
		<td><span class='lang2' >மி</span><br/><span class='keys'>ks</span></td>
		<td><span class='lang2' >ம்மீ</span><br/><span class='keys'>kw</span></td>
		<td><span class='lang2' >மு</span><br/><span class='keys'>kd</span></td>
		<td><span class='lang2' >மூ</span><br/><span class='keys'>ke</span></td>
		<td><span class='lang2' >மெ</span><br/><span class='keys'>kg</span></td>
		<td><span class='lang2' >மே</span><br/><span class='keys'>kt</span></td>
		<td><span class='lang2' >மை</span><br/><span class='keys'>kr</span></td>
		<td><span class='lang2' >மொ</span><br/><span class='keys'>kc</span></td>
		<td><span class='lang2' >மோ</span><br/><span class='keys'>kx</span></td>
		<td><span class='lang2' >மௌ</span><br/><span class='keys'>kz</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ய</span><br/><span class='keys'>'</span></td>
		<td><span class='lang2' >ய்</span><br/><span class='keys'>'f</span></td>
		<td><span class='lang2' >ய‍</span><br/><span class='keys'>'a</span></td>
		<td><span class='lang2' >யா</span><br/><span class='keys'>'q</span></td>
		<td><span class='lang2' >யி</span><br/><span class='keys'>'s</span></td>
		<td><span class='lang2' >யீ</span><br/><span class='keys'>'w</span></td>
		<td><span class='lang2' >யு</span><br/><span class='keys'>'d</span></td>
		<td><span class='lang2' >யூ</span><br/><span class='keys'>'e</span></td>
		<td><span class='lang2' >யெ</span><br/><span class='keys'>'g</span></td>
		<td><span class='lang2' >யே</span><br/><span class='keys'>'t</span></td>
		<td><span class='lang2' >யை</span><br/><span class='keys'>'r</span></td>
		<td><span class='lang2' >யொ</span><br/><span class='keys'>'c</span></td>
		<td><span class='lang2' >யோ</span><br/><span class='keys'>'x</span></td>
		<td><span class='lang2' >யௌ</span><br/><span class='keys'>'z</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ர</span><br/><span class='keys'>m</span></td>
		<td><span class='lang2' >ர்</span><br/><span class='keys'>mf</span></td>
		<td><span class='lang2' >ர‍</span><br/><span class='keys'>ma</span></td>
		<td><span class='lang2' >ரா</span><br/><span class='keys'>mq</span></td>
		<td><span class='lang2' >ரி</span><br/><span class='keys'>ms</span></td>
		<td><span class='lang2' >ரீ</span><br/><span class='keys'>mw</span></td>
		<td><span class='lang2' >ரு</span><br/><span class='keys'>md</span></td>
		<td><span class='lang2' >ரூ</span><br/><span class='keys'>me</span></td>
		<td><span class='lang2' >ரெ</span><br/><span class='keys'>mg</span></td>
		<td><span class='lang2' >ரே</span><br/><span class='keys'>mt</span></td>
		<td><span class='lang2' >ரை</span><br/><span class='keys'>mr</span></td>
		<td><span class='lang2' >ரொ</span><br/><span class='keys'>mc</span></td>
		<td><span class='lang2' >ரோ</span><br/><span class='keys'>mx</span></td>
		<td><span class='lang2' >ரௌ</span><br/><span class='keys'>mz</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ல</span><br/><span class='keys'>n</span></td>
		<td><span class='lang2' >ல்</span><br/><span class='keys'>nf</span></td>
		<td><span class='lang2' >ல‍</span><br/><span class='keys'>na</span></td>
		<td><span class='lang2' >லா</span><br/><span class='keys'>nq</span></td>
		<td><span class='lang2' >லி</span><br/><span class='keys'>ns</span></td>
		<td><span class='lang2' >லீ</span><br/><span class='keys'>nw</span></td>
		<td><span class='lang2' >லு</span><br/><span class='keys'>nd</span></td>
		<td><span class='lang2' >லூ</span><br/><span class='keys'>ne</span></td>
		<td><span class='lang2' >லெ</span><br/><span class='keys'>ng</span></td>
		<td><span class='lang2' >லே</span><br/><span class='keys'>nt</span></td>
		<td><span class='lang2' >லை</span><br/><span class='keys'>nr</span></td>
		<td><span class='lang2' >லொ</span><br/><span class='keys'>nc</span></td>
		<td><span class='lang2' >லோ</span><br/><span class='keys'>nx</span></td>
		<td><span class='lang2' >லௌ</span><br/><span class='keys'>nz</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >வ</span><br/><span class='keys'>v</span></td>
		<td><span class='lang2' >வ்</span><br/><span class='keys'>vf</span></td>
		<td><span class='lang2' >வ‍</span><br/><span class='keys'>va</span></td>
		<td><span class='lang2' >வா</span><br/><span class='keys'>vq</span></td>
		<td><span class='lang2' >வி</span><br/><span class='keys'>vs</span></td>
		<td><span class='lang2' >வீ</span><br/><span class='keys'>vw</span></td>
		<td><span class='lang2' >வு</span><br/><span class='keys'>vd</span></td>
		<td><span class='lang2' >வூ</span><br/><span class='keys'>ve</span></td>
		<td><span class='lang2' >வெ</span><br/><span class='keys'>vg</span></td>
		<td><span class='lang2' >வே</span><br/><span class='keys'>vt</span></td>
		<td><span class='lang2' >வை</span><br/><span class='keys'>vr</span></td>
		<td><span class='lang2' >வொ</span><br/><span class='keys'>vc</span></td>
		<td><span class='lang2' >வோ</span><br/><span class='keys'>vx</span></td>
		<td><span class='lang2' >வௌ</span><br/><span class='keys'>vz</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ழ</span><br/><span class='keys'>/</span></td>
		<td><span class='lang2' >ழ்</span><br/><span class='keys'>/f</span></td>
		<td><span class='lang2' >ழ‍</span><br/><span class='keys'>/a</span></td>
		<td><span class='lang2' >ழா</span><br/><span class='keys'>/q</span></td>
		<td><span class='lang2' >ழி</span><br/><span class='keys'>/s</span></td>
		<td><span class='lang2' >ழீ</span><br/><span class='keys'>/w</span></td>
		<td><span class='lang2' >ழு</span><br/><span class='keys'>/d</span></td>
		<td><span class='lang2' >ழூ</span><br/><span class='keys'>/e</span></td>
		<td><span class='lang2' >ழெ</span><br/><span class='keys'>/g</span></td>
		<td><span class='lang2' >ழே</span><br/><span class='keys'>/t</span></td>
		<td><span class='lang2' >ழை</span><br/><span class='keys'>/r</span></td>
		<td><span class='lang2' >ழொ</span><br/><span class='keys'>/c</span></td>
		<td><span class='lang2' >ழோ</span><br/><span class='keys'>/x</span></td>
		<td><span class='lang2' >ழௌ</span><br/><span class='keys'>/z</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ள</span><br/><span class='keys'>y</span></td>
		<td><span class='lang2' >ள்</span><br/><span class='keys'>yf</span></td>
		<td><span class='lang2' >ள‍</span><br/><span class='keys'>ya</span></td>
		<td><span class='lang2' >ளா</span><br/><span class='keys'>yq</span></td>
		<td><span class='lang2' >ளி</span><br/><span class='keys'>ys</span></td>
		<td><span class='lang2' >ளீ</span><br/><span class='keys'>yw</span></td>
		<td><span class='lang2' >ளு</span><br/><span class='keys'>yd</span></td>
		<td><span class='lang2' >ளூ</span><br/><span class='keys'>ye</span></td>
		<td><span class='lang2' >ளெ</span><br/><span class='keys'>yg</span></td>
		<td><span class='lang2' >ளே</span><br/><span class='keys'>yt</span></td>
		<td><span class='lang2' >ளை</span><br/><span class='keys'>yr</span></td>
		<td><span class='lang2' >ளொ</span><br/><span class='keys'>yc</span></td>
		<td><span class='lang2' >ளோ</span><br/><span class='keys'>yx</span></td>
		<td><span class='lang2' >ளௌ</span><br/><span class='keys'>yz</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td><span class='lang2' >ற</span><br/><span class='keys'>u</span></td>
		<td><span class='lang2' >ற்</span><br/><span class='keys'>uf</span></td>
		<td><span class='lang2' >ற‍</span><br/><span class='keys'>ua</span></td>
		<td><span class='lang2' >றா</span><br/><span class='keys'>uq</span></td>
		<td><span class='lang2' >றி</span><br/><span class='keys'>us</span></td>
		<td><span class='lang2' >றீ</span><br/><span class='keys'>uw</span></td>
		<td><span class='lang2' >று</span><br/><span class='keys'>ud</span></td>
		<td><span class='lang2' >றூ</span><br/><span class='keys'>ue</span></td>
		<td><span class='lang2' >றெ</span><br/><span class='keys'>ug</span></td>
		<td><span class='lang2' >றே</span><br/><span class='keys'>ut</span></td>
		<td><span class='lang2' >றை</span><br/><span class='keys'>ur</span></td>
		<td><span class='lang2' >றொ</span><br/><span class='keys'>uc</span></td>
		<td><span class='lang2' >றோ</span><br/><span class='keys'>ux</span></td>
		<td><span class='lang2' >றௌ</span><br/><span class='keys'>uz</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ன</span><br/><span class='keys'>i</span></td>
		<td><span class='lang2' >ன்</span><br/><span class='keys'>if</span></td>
		<td><span class='lang2' >ன‍</span><br/><span class='keys'>ia</span></td>
		<td><span class='lang2' >னா</span><br/><span class='keys'>iq</span></td>
		<td><span class='lang2' >னி</span><br/><span class='keys'>is</span></td>
		<td><span class='lang2' >னீ</span><br/><span class='keys'>iw</span></td>
		<td><span class='lang2' >னு</span><br/><span class='keys'>id</span></td>
		<td><span class='lang2' >னூ</span><br/><span class='keys'>ie</span></td>
		<td><span class='lang2' >னெ</span><br/><span class='keys'>ig</span></td>
		<td><span class='lang2' >னே</span><br/><span class='keys'>it</span></td>
		<td><span class='lang2' >னை</span><br/><span class='keys'>ir</span></td>
		<td><span class='lang2' >னொ</span><br/><span class='keys'>ic</span></td>
		<td><span class='lang2' >னோ</span><br/><span class='keys'>ix</span></td>
		<td><span class='lang2' >னௌ</span><br/><span class='keys'>iz</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td colspan=14>&nbsp;</td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td style='text-align:left; font-weight:bold; background-color:#dedede' valign=bottom>Grantha Consonants</td>
		<td colspan=13></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ஜ</span><br/><span class='keys'>E</span></td>
		<td><span class='lang2' >ஜ்</span><br/><span class='keys'>Ef</span></td>
		<td><span class='lang2' >ஜ‍</span><br/><span class='keys'>Ea</span></td>
		<td><span class='lang2' >ஜா</span><br/><span class='keys'>Eq</span></td>
		<td><span class='lang2' >ஜி</span><br/><span class='keys'>Es</span></td>
		<td><span class='lang2' >ஜீ</span><br/><span class='keys'>Ew</span></td>
		<td><span class='lang2' >ஜு</span><br/><span class='keys'>Ed</span></td>
		<td><span class='lang2' >ஜூ</span><br/><span class='keys'>Ee</span></td>
		<td><span class='lang2' >ஜெ</span><br/><span class='keys'>Eg</span></td>
		<td><span class='lang2' >ஜே</span><br/><span class='keys'>Et</span></td>
		<td><span class='lang2' >ஜை</span><br/><span class='keys'>Er</span></td>
		<td><span class='lang2' >ஜொ</span><br/><span class='keys'>Ec</span></td>
		<td><span class='lang2' >ஜோ</span><br/><span class='keys'>Ex</span></td>
		<td><span class='lang2' >ஜௌ</span><br/><span class='keys'>Ez</span></td>
		</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td style='background-color:#dedede'><span class='lang2' >ஷ</span><br/><span class='keys'>W</span></td>
		<td><span class='lang2' >ஷ்</span><br/><span class='keys'>Wf</span></td>
		<td><span class='lang2' >ஷ‍</span><br/><span class='keys'>Wa</span></td>
		<td><span class='lang2' >ஷா</span><br/><span class='keys'>Wq</span></td>
		<td><span class='lang2' >ஷி</span><br/><span class='keys'>Ws</span></td>
		<td><span class='lang2' >ஷீ</span><br/><span class='keys'>Ww</span></td>
		<td><span class='lang2' >ஷு</span><br/><span class='keys'>Wd</span></td>
		<td><span class='lang2' >ஷூ</span><br/><span class='keys'>We</span></td>
		<td><span class='lang2' >ஷெ</span><br/><span class='keys'>Wg</span></td>
		<td><span class='lang2' >ஷே</span><br/><span class='keys'>Wt</span></td>
		<td><span class='lang2' >ஷை</span><br/><span class='keys'>Wr</span></td>
		<td><span class='lang2' >ஷொ</span><br/><span class='keys'>Wc</span></td>
		<td><span class='lang2' >ஷோ</span><br/><span class='keys'>Wx</span></td>
		<td><span class='lang2' >ஷௌ</span><br/><span class='keys'>Wz</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >ஸ</span><br/><span class='keys'>Q</span></td>
		<td><span class='lang2' >ஸ்</span><br/><span class='keys'>Qf</span></td>
		<td><span class='lang2' >ஸ‍</span><br/><span class='keys'>Qa</span></td>
		<td><span class='lang2' >ஸா</span><br/><span class='keys'>Qq</span></td>
		<td><span class='lang2' >ஸி</span><br/><span class='keys'>Qs</span></td>
		<td><span class='lang2' >ஸீ</span><br/><span class='keys'>Qw</span></td>
		<td><span class='lang2' >ஸு</span><br/><span class='keys'>Qd</span></td>
		<td><span class='lang2' >ஸூ</span><br/><span class='keys'>Qe</span></td>
		<td><span class='lang2' >ஸெ</span><br/><span class='keys'>Qg</span></td>
		<td><span class='lang2' >ஸே</span><br/><span class='keys'>Qt</span></td>
		<td><span class='lang2' >ஸை</span><br/><span class='keys'>Qr</span></td>
		<td><span class='lang2' >ஸொ</span><br/><span class='keys'>Qc</span></td>
		<td><span class='lang2' >ஸோ</span><br/><span class='keys'>Qx</span></td>
		<td><span class='lang2' >ஸௌ</span><br/><span class='keys'>Qz</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal'>
		<td style='background-color:#dedede'><span class='lang2' >ஹ</span><br/><span class='keys'>R</span></td>
		<td><span class='lang2' >ஹ்</span><br/><span class='keys'>Rf</span></td>
		<td><span class='lang2' >ஹ‍</span><br/><span class='keys'>Ra</span></td>
		<td><span class='lang2' >ஹா</span><br/><span class='keys'>Rq</span></td>
		<td><span class='lang2' >ஹி</span><br/><span class='keys'>Rs</span></td>
		<td><span class='lang2' >ஹீ</span><br/><span class='keys'>Rw</span></td>
		<td><span class='lang2' >ஹு</span><br/><span class='keys'>Rd</span></td>
		<td><span class='lang2' >ஹூ</span><br/><span class='keys'>Re</span></td>
		<td><span class='lang2' >ஹெ</span><br/><span class='keys'>Rg</span></td>
		<td><span class='lang2' >ஹே</span><br/><span class='keys'>Rt</span></td>
		<td><span class='lang2' >ஹை</span><br/><span class='keys'>Rr</span></td>
		<td><span class='lang2' >ஹொ</span><br/><span class='keys'>Rc</span></td>
		<td><span class='lang2' >ஹோ</span><br/><span class='keys'>Rx</span></td>
		<td><span class='lang2' >ஹௌ</span><br/><span class='keys'>Rz</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='background-color:#dedede'><span class='lang2' >க்ஷ</span><br/><span class='keys'>Y</span></td>
		<td><span class='lang2' >க்ஷ்</span><br/><span class='keys'>Yf</span></td>
		<td><span class='lang2' >க்ஷ‍</span><br/><span class='keys'>Ya</span></td>
		<td><span class='lang2' >க்ஷா</span><br/><span class='keys'>Yq</span></td>
		<td><span class='lang2' >க்ஷி</span><br/><span class='keys'>Ys</span></td>
		<td><span class='lang2' >க்ஷீ</span><br/><span class='keys'>Yw</span></td>
		<td><span class='lang2' >க்ஷு</span><br/><span class='keys'>Yd</span></td>
		<td><span class='lang2' >க்ஷூ</span><br/><span class='keys'>Ye</span></td>
		<td><span class='lang2' >க்ஷெ</span><br/><span class='keys'>Yg</span></td>
		<td><span class='lang2' >க்ஷே</span><br/><span class='keys'>Yt</span></td>
		<td><span class='lang2' >க்ஷை</span><br/><span class='keys'>Yr</span></td>
		<td><span class='lang2' >க்ஷொ</span><br/><span class='keys'>Yc</span></td>
		<td><span class='lang2' >க்ஷோ</span><br/><span class='keys'>Yx</span></td>
		<td><span class='lang2' >க்ஷௌ</span><br/><span class='keys'>Yz</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td colspan=14>&nbsp;</td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#ffffff'>
		<td style='text-align:left; font-weight:bold; background-color:#dedede' valign=top>Other Characters</td>
		<td><span class='lang2' >ஸ்ரீ்</span><br/><span class='keys'>T</span></td>
		<td><span class='lang2' >ஃ</span><br/><span class='keys'>F</span></td>
		<td><span class='lang2' >௳</span><br/><span class='keys'>Z</span></td>
		<td><span class='lang2' >௴</span><br/><span class='keys'>X</span></td>
		<td><span class='lang2' >௵</span><br/><span class='keys'>C</span></td>
		<td><span class='lang2' >௶</span><br/><span class='keys'>V</span></td>
		<td><span class='lang2' >௷</span><br/><span class='keys'>B</span></td>
		<td><span class='lang2' >௸</span><br/><span class='keys'>D</span></td>
		<td><span class='lang2' >௹</span><br/><span class='keys'>A</span></td>
		<td><span class='lang2' >௺</span><br/><span class='keys'>S</span></td>
		<td><span class='lang2' >[</span><br/><span class='keys'>O</span></td>
		<td><span class='lang2' >]</span><br/><span class='keys'>P</span></td>
		<td><span class='lang2' >/</span><br/><span class='keys'>M</span></td>
	</tr>
	<tr style='text-align:center; font-weight:normal; background-color:#eeeeee'>
		<td style='text-align:left; font-weight:bold; background-color:#dedede' valign=top></td>
		<td><span class='lang2' >"</span><br/><span class='keys'>K</span></td>
		<td><span class='lang2' >:</span><br/><span class='keys'>L</span></td>
		<td><span class='lang2' >;</span><br/><span class='keys'>:</span></td>
		<td><span class='lang2' >'</span><br/><span class='keys'>"</span></td>
		<td><span class='lang2' >‘</span><br/><span class='keys'>^7</span></td>
		<td><span class='lang2' >’</span><br/><span class='keys'>^8</span></td>
		<td><span class='lang2' >“</span><br/><span class='keys'>^9</span></td>
		<td><span class='lang2' >”</span><br/><span class='keys'>^0</span></td>
		<td><span class='lang2' >©</span><br/><span class='keys'>^c</span></td>
		<td><span class='lang2' >•</span><br/><span class='keys'>^.</span></td>
		<td><span class='lang2' >^</span><br/><span class='keys'>^^</span></td>
		<td></td>
		<td></td>
	</tr>
</table>


