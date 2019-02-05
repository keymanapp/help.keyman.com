<?php
  require_once('includes/template.php');

  head([
    'title' => "Simple Touch Keyboard Development Example"
	

  ]);
?>
<h1>Making a touchscreen keyboard</h1>
<h2>Setting up your Keyman project </h2>
<p>This is a useful convention for keeping track of your files:
<ol>
<li>Create a folder on your hard drive for all your Keyman developer files
<li>In that folder, create a folder for this project, named after the 
language. Use all lowercase letters for compatibility with other platforms.
<li>Now create a project in Keyman Developer with the same name as the new 
folder, and save it inside the new folder
</ol>
<p>Now you will be able to use this project to organize and create any files 
for desktop, mobile, web or other. It also facilitates uploading the files to 

the Keyman website later on.</p>

<h2>Add touch to an existing keyboard or create a new keyboard?</h2>

<p>
You
can add a mobile touchscreen keyboard to an existing desktop keyboard, or
you can create a new touchscreen keyboard from scratch. You should be aware 
that there will be cross-over between mobile and desktop keyboards. (In 
Keyman 
terms, "desktop" includes laptop computers or any device with a physical 
keyboard). Your mobile device can have an external keyboard, which will use 

the desktop Keyman keyboard. So the Keyman strategy is to always bundle touch 

keyboards with desktop keyboards to make them work on multiple platforms.</p>


<p>If creating
from scratch, you click the New icon in the Keyman Developer toolbar
(or select File &gt; New from the menu), and specify the file name
for your keyboard. We recommend a name using only lowercase letters,
numbers and underscore. I&rsquo;ll choose &ldquo;mobile_fulfulde.kmn&rsquo;
.
</p>

<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_1.png')?>"  width=
"371" height="368" alt="choose new file type"/></p>
<h2>Adding the required metadata</h2>

<p>After
creating the file, Keyman Developer will ask you to name the
keyboard. This name can include spaces and upper case letters if
desired. I&rsquo;ll name this one &ldquo;Fulfulde for Mobile&rdquo;.</p>
<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_2.png')?>" alt=
"keyboard metadata"  width="486" height="281" /></p>

<p>The
first thing you need to do is to tell Keyman Developer this keyboard
will include some kind of mobile device. &nbsp;You do this in the
Targets list just below the keyboard name. I&rsquo;ll select &ldquo;mobile
&rdquo;
in the list, (towards the end). You see in the picture above that
Keyman Developer checked the &ldquo;windows&rdquo; box by default, I
can uncheck that or leave it checked if I am going to add a Windows
keyboard to this set. </p>
<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_3.png')?>" alt=
"mobile target" /></p>

<p>This
will include all mobile devices, both Android and iOS, both phones
and tablets. It is possible if needed to select Android only or iOS
only if needed, and to develop a different keyboard layout for
tablets than for phones, but for this example, with only a few
characters needed to be added to the default keyboards, there is no
need for that kind of complexity. 
</p>

<p> 
(If
you are adding a mobile layout to an existing keyboard file, you
would open that file in Keyman Developer, go to the Targets box and
check &ldquo;mobile&rdquo; or whatever mobile targets you wanted to
specify, then follow along from here). </p>

<h2>Adding the touch optimized feature</h2>
<p>The
next step is to add the touch-optimised feature to our keyboard
setup. If you scroll to the bottom of the details tab, there is the
list of features to add. I&rsquo;ll click the Add button and choose
&ldquo;touch optimised keyboard.&rdquo; 
</p>
<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_4.png')?>" alt=
"touch-optimised"  width="624" height="340" /></p>

<p>
Keyman
developer asks me to choose one of three templates for the mobile
layout.</p>
<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_5.png')?>" alt=
"three templates"  width="229" height="274" /></p>

<p>
The
&ldquo;template-latin&rdquo; layout includes many accented
characters, like the default keyboards for Android and iOS do. The
&ldquo;template-basic&rdquo; layout has no extra characters, and the
template-traditional has a few extra characters (mostly punctuation
symbols if you long-press period or full stop). For this example,
I&rsquo;ll choose &ldquo;template-basic&rdquo; because accented
characters are not needed for Fulfulde. But if I knew that many
eventual users might want to be able to type French or other European
languages as well as Fulfulde, and wouldn&rsquo;t like to have to
switch the keyboard to do so, I could choose &ldquo;template-latin&rdquo;.
</p>

<p>
<h2> Defining one or several touch layouts</h2>
I
select the template and click OK. Keyman Developer now adds a new tab
in the left column, the Touch Layout tab. 
</p>
<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_6.png')?>" alt=
"touch layout"  width="624" height="473" /></p>
<p>
That
is where we need to go now to add characters to our touch layout. But
before doing that, there is one important thing to take note of in
the touch layout. By default, Keyman Developer has created a layout
for phones and another layout for tablets. They all start out the
same, but as I add characters, I will have to make sure I add all the
characters to both layouts, or I&rsquo;ll discover that my keyboard
does not work for all device sizes. 
</p>
<p>
In
the image, you see that Keyman Developer is currently showing the
tablet layout. The box at top left that says &ldquo;layout&rdquo; is
where I&rsquo;d choose which layout I&rsquo;d design in.</p>
<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_7.png')?>" alt=
"platform list"  width="265" height="179" /></p>

<p>
But
I&rsquo;m going to make this keyboard simple, and just have one
layout for both tablets and phones. So beside the platform box, I am
going to click the &ldquo;Del&rdquo; box, &nbsp;to delete the tablet
layout. When there is only one mobile layout, Keyman Developer will
compile that layout for all mobile devices. (I could also have chosen
to delete the phone layout and done my layout design in the tablet
layout). </p>

<h2>Adding longpress characters</h2>
<p>Now
I can start adding characters. I&rsquo;ll click on the &ldquo;y&rdquo;
key in the layout, then I&rsquo;ll look for the &ldquo;add longpress
popup&rdquo; button at the lower left. </p>
<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_8.png')?>" alt=
"add longpress"  width="624" height="252" /></p>
<p>I
click that, and Keyman Developer adds a new key below the keyboard
layout.</p>
<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_9.png')?>" alt=
"longpress added"  width="624" height="252" /></p>
<p>First,
I need to put something in the keycap image for my new key. I&rsquo;ll
click inside the empty box of the new key, then I&rsquo;ll go look
for my y with hook character in the character map to the right. If I
type &ldquo;y hook&rdquo; in the search box, Keyman Developer shows
the character I&rsquo;m looking for.</p>
<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_10.png')?>" alt=
"adding keycap"  width="624" height="256" /></p>
<p>If
I double click on the lower case y with hook, that adds the character
to the keycap box of my new key. 
</p>
<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_11.png')?>" alt=
"keycap added"  width="624" height="272" /></p>
<h2>Adding the output</h2>
<p>
Now
there is still one very important thing I need to do. If you have
ever designed desktop keyboards in the layout view, you would think
putting the character you want on the keycap is all you need to do.
But mobile keys don&rsquo;t work that way. (Technically there is a
difference between a physical keyboard, where pressing a key sends a
unique code to the computer, and a virtual keyboard, where tapping a
key only registers a tap on an arbitrary part of the screen). In
adding a mobile key, we have to enter what the key does, not just add
a character to the keycap. To make our new key insert the Unicode
character 01B4, I&rsquo;ll go to the &ldquo;code&rdquo; box and
change the string to &ldquo;U_01B4&rdquo;. (&ldquo;U_&rdquo; followed
by a Unicode hex value is the code for &ldquo;insert the character
with this Unicode value&rdquo;). 
<a href=
"../../../../language/guide/virtual-keys#toc-virtual-keys-and-touch-layouts">

See the Keyman Language guide on virtual keys</a>
</p>
<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_12.png')?>" alt=
"keycode added"  width="624" height="125" /></p>
<p>Now
I can also add the upper case hook y here, so users won&rsquo;t
have to hold Shift before getting to an upper case y with hook. To 
add another new key to this longpress popup row, I
click on the green triangle with a plus sign to the lower right of my
new key, this adds a second new key. 
</p>
<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_13.png')?>" alt=
"adding new key to row"  width="118" height="102" /></p>

<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_14.png')?>" alt=
"new key added to row"  width="188" height="97" /></p>

<p>(If
I had clicked on the green triangle to the left of my first key, the
new key would be added to the left of that key).</p>
<p>For
this new key, I go through the same steps. I click in the empty box
on the new key, then double click the upper case y with hook in the
character map to put that in the keycap. I also change the code of
this new key to &ldquo;U_01B3&rdquo;</p>
<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_15.png')?>" alt=
"keycap and code added to new key"  width="537" height="191" /></p>
<h2>Another option for upper case characters</h2>
<p>
I might also add the upper case character to a longpress character on the 
upper-case Y key, because some users will press the Shift key then look for 

the letter to type. To do this, I change the layer at the top of the tablet 

layout to "shift" from "default".</p>
<p><img src="<?= cdn(
'img/developer/100/simpleTouchKeyboard_15b.png')?>" alt="changing layer"  
width
="400" height="101" /></p> 
<p>Now I click the Y key, and add a longpress character, then add the upper 

case y with hook to the keycap and add the keycode as shown before. </p>
<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_16b.png')?>" alt
=
"key added to longpress Y"  width="805" height="571" /></p>
<p>You can design your keyboard either way, with the upper case characters in 

the same longpress row as the lower case, or in a longpress row off of the
shift layer. The rest of this tutorial shows the upper case characters in the 

same row as the lower case, but I don't mean to present this as the best way.
If you do put 
upper case characters in the shift layer, you'll have to remember to change 

the layer back to "default" when you want to add a lower case letter, then
back to "shift" when adding an upper case letter. You could put the upper 
case characters in both places, if you think that best.</p>
<p>Now
I&rsquo;ll add the two d hook characters as a longpress popup for the
d key. I click the d key in the layout, click &ldquo;Add longpress
popup&rdquo;, add the lower case hook d to the keycap and change the
code to &ldquo;U_0257&rdquo;; then click the plus sign to add a
second key, add the upper case hook D to the keycap and change its
code to &ldquo;U_018A&rdquo;. The end result should look like this:</p>
<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_16.png')?>" alt=
"longpress row on d"  width="459" height="208" /></p>

<p>I&rsquo;ll
do the similar step to add two characters as a longpress popup for
&ldquo;b&rdquo;</p>
<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_17.png')?>" alt=
"longpress row on b"  width="624" height="301" /></p>

<p>And
two characters as a longpress popup for &ldquo;n&rdquo;. (Tip, to
search for &#331; in the character map, type &ldquo;eng&rdquo;). 
</p>
<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_18.png')?>" alt=
"longpress row on n"  width="570" height="228" /></p>
<p>When
no keys are selected in the keyboard layout, I can still see which
ones I have set up longpress popups for, because Keyman Developer
shows a faint gray line at the top right corner of the key. So you
should have a faint diagonal line on your y, d, b and n keys. 
</p>
<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_19.png')?>" alt=
"lines on longpress keys"  width="669" height="245" /></p>
<h2> Compiling your keyboard</h2>
<p>Now
click Save to save your work, and compile the keyboard. (Keyboard &gt;
Compile Keyboard, or press F7). Hopefully you&rsquo;ll see it
compiled with no error messages:</p>
<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_20.png')?>" alt=
"successful compile"  width="624" height="87" /></p>
<p>If
you see a warning like:</p>
<p style="font-family:courier;">Warning: line 0 &nbsp;warning 2092: Key &quot;
T_new_579&quot; on layer
&quot;default&quot;, platform &quot;phone&quot;, is a custom key but has no 
corresponding rule in the source.
</p>
<p></p>
<p>This
shows you forgot to enter the correct keycode for a new key you
added. Double check your longpress popup keys for one with a
&ldquo;T_new_NNN&rdquo; code, and add in the desired &ldquo;U_NNNN&rdquo;
code.
</p>
<p>You
might also see a message like
<p style="font-family:courier;">Error: line 0 &nbsp;error 405A: Key &quot;
U+0181&quot; on &quot;phone&quot;, layer &quot;default&quot; has an invalid 

identifier.</p>
<p></p>
<p>This
shows you attempted to change the keycode but mistyped the code. I&rsquo;ve
gotten this more than once, because I am used to typing <code class=
'language-none'>U+0181</code>to
refer to a Unicode value, but the correct syntax for a keycode in
Keyman Developer is <code class='language-none'>U_0181</code>
</p>

<h1>Testing your keyboard</h1>
<p>Other Keyman help pages describe how 
you can test your keyboard:
<ul><li> <a href=
"..\..\test\how-to-test-your-touch-layout-in-the-google-chrome-mobile-emulator.php">
  On a virtual device in the Chrome web browser on your computer</a></li>
<li><a href=
"..\..\test\how-to-test-your-keyboard-layout-with-keyman-developer-10-touch-and-desktop.php">
  On your own device accessing the keyboard over the network
</a></li>
</ul>
<p>If your device cannot connect to your computer on the local network (for 
instance if your computer is on a wired office network and your device is on 
the wireless office network), the above technique for sharing may not work.
You can put your keyboard in a package and share it over the Internet with
your device, as described below.</p>
<h1>Packaging and distributing your keyboard</h1>
<p>Another Keyman help file describes <a href="../../distribute/tutorial">how 
to build a package file.</a></p>
<h2>BCP 47 tags for Fulfulde</h2>
<p></p>
<p><a href="../../distribute/tutorial/step-3.php">Step 3</a> of the package 

building tutorial describes adding the BCP 47 language tag to your package.


When I came to the step of adding a tag for Fulfulde, I had to do some 
research. I naively thought "Fulfulde" was a clear enough label for the 
language. It is not, since it is a language chain rather than one language. 

The BCP 47 tag in many cases is the same as the <a href=
"https://www.ethnologue.com">SIL Ethnologue code</a>, so that is where I had 

to go to find the tags I needed. In the end I added four tags for four
Fulfulde languages:</p>
<p><img src="<?= cdn('img/developer/100/simpleTouchKeyboard_36.png')?>" alt=
"BCP 47 tags"   /></p>
<p>I also added the script designator <code class='language-none'>Latn</code> 
for Latin script. This is recommended for Windows, which sometimes fails to 

install the desktop keyboard if there is not a script designator on the BCP
47 
tag. We recommend that you always put in the script tag unless there is a 
specific reason not to.</p>
<p>Some languages have only two letters in their BCP 47 tag. For instance, the 
Hausa language has an Ethnologue code <code class='language-none'>hau</code> 

but the BCP 47 tag is <code class='language-none'>ha</code>. Keyman Developer

knows about this, and will change the tag to <code>ha</code> if I put in the

Ethnologue tag.</p>
<h1>Next steps</h1>
<p>The two following articles on Amharic describe a more complex touchscreen 
example where quite frequently two keys are pressed to get one distinct 
character. (Amharic is a Abugida or syllabary script, where one character can 

represent a consonant and following vowel).
<ul>
  <li>
    <a href="../creating-a-touch-keyboard-layout-for-amharic-with-keyman-developer-10">
    Creating a touch keyboard layout for Amharic - part 1</a>
  </li>
  <li>
    <a href="../creating-a-touch-keyboard-layout-for-amharic-the-nitty-gritty">
    Creating a touch keyboard layout for Amharic - part 2</a>
  </li>
</ul>
