<?php 
  $pagename = '\'Uwik̓ala Keyboard Help';
  $pagetitle = '\'Uwik̓ala Keyboard Help';
  $pagestyle = <<<END
  
#wikitext table { margin: 12px; }
#wikitext table td { border: solid 1px #888888 !important }
#wikitext table th { border: solid 1px #888888 !important; background: #ffcccc }
.lang2 {font-family:"Aboriginal Sans"}  
END;

  require_once('header.php');
?>

<p style='margin: 16px 0 0 0'>
This keyboard is designed for the <b>'Uwik̓ala</b> language of the BC Coast region of Canada.
</p>

<p>If square boxes are displayed instead of characters when using this keyboard (and in the keyboard layouts below), please read our <a href="/troubleshooting/#boxes">troubleshooting guide</a>.
</p>


<h2>Desktop Keyboard Layout</h2>
<div id='osk' data-states='default shift'></div>

<ul>
	<li>To type a special combining symbol, first type the base alphabet character (such as <strong>a</strong>), and then type the symbol key (such as <strong>SEMICOLON ;</strong>).</li>
	<ul>
		<li>Háček (◌̌): type <strong>Semicolon ;</strong> (Example: a + Semicolon = ǎ)</li>
		<li>Standalone háček (ˇ): type <strong>Backquote `</strong> (Example: Backquote ` + G = ˇG)</li>
		<li>Combining apostrophe (◌̓): type <strong>Slash /</strong> (Example: k + Slash = k̓)</li>
		<li>Grave accent (◌̀): type <strong>Left-Bracket [</strong> (Example: e + Left-Bracket = è)</li>
		<li>Standalone apostrophe (’) is typed with <strong>Apostrophe '</strong>
	</ul>
	<li>You can type the English value of the punctuation keys by holding down the Right-Alt or Option key. The Slash / is typed Right-Alt+Slash (Windows) or Option+Slash (Mac).</li>
	<li>Opening and closing quotes. For Mac users, Right-Alt is either of the Option Keys.</li>
	<ul>
		<li>quotations: “ Shift+Hyphen — ” Shift+Equals</li>
		<li>single ‹ Right-Alt+Shift+9 — › Right-Alt+Shift+0</li>
		<li>double « Right-Alt+9 — » Right-Alt+0</li>
	</ul>
	<li>Some addtional characters are also available:</li>
	<ul>
		<li>Underdot (◌̣): type <strong>Backslash \</strong> (Example: n + Backslash = ṇ)</li>
		<li>Diaeresis (◌̈): type <strong>Shift+Left-Bracket }</strong> (Example: c + Slash = c̈)</li>
		<li>Tie-bar (◌͡◌) is typed between two letters using <strong>Shift+Backslash |</strong> (Example: n + Slash + n = n͡n)</li>
	</ul>
</ul> 

<p>The following Unicode fonts have been installed on your computer: <strong>Aboriginal Sans, Aboriginal Serif.</strong> Please use these fonts when typing in your language as they have been specially built to represent your language as accurately as possible. </p>

<h3><a href="http://www.languagegeek.com/font/fontdownload.html">Download the latest version of Aboriginal Sans and Aboriginal Serif</a></h3>
    
<h2>Mobile Touch Layout</h2>

<div id='osk-tablet' data-states='default shift'></div>

<p>Long-press options are available. The first character in a cell is the "one-tap" key, any further characters are "hold-select" keys.</p>

<table border='1' style='border-collapse:collapse' cellpadding='5' >
	<tr >
		<td  align='center'>q q̓</td>
		<td  align='center'>w w̓</td>
		<td  align='center'>ə ə̀</td>
		<th  align='center'>◌̓</th>
		<td  align='center'>t t̓</td>
		<td  align='center'>y y̓</td>
		<td  align='center'>u u̓ ù</td>
		<td  align='center'>i i̓ ì</td>
		<th  align='center'>◌̀</th>
		<td  align='center'>p p̓</td>
	</tr>
	<tr >
		<td  align='center'>a a̓ à ǎ ’ǎ</td>
		<td  align='center'>s</td>
		<td  align='center'>d</td>
		<td  align='center'>ǧ</td>
		<td  align='center'>g</td>
		<td  align='center'>h h̓</td>
		<td  align='center'>x̌</td>
		<td  align='center'>k k̓</td>
		<td  align='center'>l l̓ l͡l</td>
		<td  align='center'>’ " ’ǎ</td>
	</tr>
	<tr >
		<td >&nbsp;</td>
		<td  align='center'>z</td>
		<td  align='center'>x</td>
		<td  align='center'>c c̓</td>
		<td  align='center'>v</td>
		<td  align='center'>b</td>
		<td  align='right'>n n̓ n͡n</td>
		<td  align='center'>m m̓ m͡m</td>
		<td  colspan='2'>&nbsp;</td>
	</tr>
</table>

<p>Keys with a red background are combining accents.</p>
