<?php
  require_once('includes/template.php');

  head([
    'title' => "Simple Touch Keyboard Tutorial"
	

  ]);
?>


<h1>Creating a Simple Touch keyboard</h1>
<h2>Introduction and design</h2>
<p>If you have experience in designing Keyman keyboards for computers, the interface for designing
 mobile keyboards looks very similar, but it hides the reality of additional steps necessary for 
 mobile keyboards. This tutorial attempts to walk you through the process.
<p>The
<a href="../desktop-keyboard-tutorial">Quick French tutorial</a> shows how to create a simple desktop keyboard
for typing accented characters used in French and other European
languages. It is possible to create a touch screen format of that
keyboard, but it is probably unnecessary. The default keyboards for 
both Android and iOS devices have a way to type these accented
characters. Press and hold on a vowel, and a
popup menu will give you a choice of accents to put on that letter.</p>

<p>
For
this tutorial we will demonstrate something usable for the Fulfulde
language cluster spoken across many Sahelian countries of Africa.
Fulfulde is usually written using the Latin alphabet, but there are a
few characters added to the usual list of alphabetical characters. So
this is a useful example for any language wanting to add a few
characters to the standard Latin keyboard. Here are the characters we
are going to add, together with their Unicode values. 
</p>

<table>
  <tr>
    <td><samp>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ɓ</samp></td>
    <td><code class="language-keyman">U+0253</code></td>
    <td><samp>Ɓ</samp></td>
    <td><code class="language-keyman">U+0181</code></td>
	<td></td>
    <td><samp>ɗ</samp></td>
    <td><code class="language-keyman">U+0257</code></td>
    <td><samp>Ɗ</samp></td>
    <td><code class="language-keyman">U+018A</code></td>
  </tr>
  <tr>
    <td><samp>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ŋ</samp></td>
    <td><code class="language-keyman">U+014B</code></td>
    <td><samp>Ŋ</samp></td>
    <td><code class="language-keyman">U+014A</code></td>
    <td></td>
    <td><samp>ƴ</samp></td>
    <td><code class="language-keyman">U+01B4</code></td>
    <td><samp>Ƴ</samp></td>
    <td><code class="language-keyman">U+01B3</code></td>
  </tr>
</table>
<p>Here
we will likely want to proceed differently than with the desktop
keyboard. The usual approach for a desktop keyboard is to create a
deadkey. The keyboards I have used for Fulfulde (going back to
decades ago) used the <kbd>/</kbd> key as the deadkey. <kbd>/</kbd><kbd>b</kbd> gave &#595;,
<kbd>/</kbd><kbd>d</kbd> gave &#599;, and so on. 
</p>
<p>It
would be possible to use that desktop keyboard logic on touch
screens. &nbsp;But your mobile device users will find these rules
annoying. Instead of two keys they would probably have to press four,
since the standard alphabetical keyboard on most touch devices does
not have the slash key. So they would have to press the key to switch
to the numeric keyboard, then press slash, then press the key to go
back to the alphabetical keyboard, then the letter. What touch screen
users would appreciate is something that uses the great feature of
touch screens, the long press or press and hold on a letter, to see
analogous letters. So we&rsquo;ll set up a touch screen keyboard that
lets you press and hold &lsquo;d&rsquo; to see the two hooked d
characters, press and hold &lsquo;b&rsquo; to see the hooked b
characters, and so on.</p>
<a href="making-touch-keyboard.php">Next: Making, testing and distributing the touch keyboard</a>