<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 3: The Keyboard Header"
  ]);
?>

<h1>Step 3: The Keyboard Header</h1>

<h2>Comments</h2>

<pre><code class="language-keyman">c Simplified French Keyboard for Keyman 9.0
</code></pre>

<p>Most of the header in this example is made up of <a class="link" href="/developer/language/guide/comments" title=
"Comments">comments</a>. A comment is used to make notes about the keyboard, or to provide information on the workings of the keyboard.
The comments are readable by anyone looking at the source code of the keyboard.</p>

<p>A comment always starts with a lowercase <code class="language-keyman">&nbsp;c </code>, followed by one or more spaces, and continues to the end of the line. Keyman
Developer will ignore comments when compiling a keyboard.</p>

<p>Comments can take up a whole line, or can start in the middle of the line. The latter is useful for making short notes about
individual lines. As you can see we have used both kinds of comments in the header.</p>

<h2>The <code class="language-keyman">&amp;Version</code> store</h2>
<pre><code class="language-keyman">store(&amp;Version) "9.0"             c This keyboard is for use with Keyman 9.0
</code></pre>

<p>The <a class="link" href="/developer/language/reference/version" title="&amp;Version store"><code class="language-keyman">&amp;Version</code> store</a>
identifies the Keyman version for which this keyboard was written; this keyboard is for use with Keyman 9.0. The <code class="language-keyman">&amp;Version</code>
store is a required part of each keyboard header, and should be the first store in the file.</p>

<h2>The <code class="language-keyman">&amp;Name</code> store</h2>

<pre><code class="language-keyman">store(&amp;Name)    "Quick French"
</code></pre>

<p>The <a class="link" href="/developer/language/reference/name" title="&amp;Name store"><code class="language-keyman">&amp;Name</code> store</a> specifies a
descriptive name for the keyboard, which can be up to eighty characters long. The name we have given to this keyboard is
<code class="language-keyman">"Quick French"</code>. The <code class="language-keyman">&amp;Name</code> store is not required but is highly recommended!</p>

<h2>The <code class="language-keyman">&amp;Bitmap</code> store</h2>

<pre><code class="language-keyman">store(&amp;Bitmap)  "qfrench.ico"
</code></pre>

<p>The optional <a href="/developer/language/reference/bitmap" title="&amp;Bitmap store"><code class="language-keyman">&amp;Bitmap</code> store</a>
tells Keyman which image to use for the keyboard's icon. The picture should be in the standard Windows .ico format, and
should contain at least a single 16x16 pixel image. It can also contain higher resolution images for high resolution "High DPI" displays.
If you use a modern icon editor, the icon can use alpha transparency. For this keyboard we will be using the
following bitmap: <img class='inline' src="<?= cdn('img/developer/100/tutorial_keyboard_qfrench.gif')?>">; it is found in
the Keyman Developer folder, under <code class="filename">Samples\Examples\qfrench.ico</code> - you should copy it into the same folder
in which you will save your keyboard.</p>

<h2>The <code class="language-keyman">&amp;MnemonicLayout</code> store</h2>
<pre><code class="language-keyman">store(&amp;MnemonicLayout) "1"
</code></pre>

<p>The <a href="/developer/language/reference/mnemoniclayout" title="&amp;mnemoniclayout store"><code class="language-keyman">&amp;MnemonicLayout</code> store</a>
tells Keyman that the layout is meant to conform to the user's keyboard layout; for example, if the user presses the quote key
<kbd>'</kbd> on their keyboard (whether they are using a US English, UK English, French, German, Swedish, or other keyboard) it should work in
the same way. The opposite of this is a positional layout (which is the default if this store omitted), which is intended for keyboards for
which there is not necessarily a correspondence between what is printed on the physical keyboard and what is output when that key is pressed.</p>

<h2>The <code class="language-keyman">begin</code> statement</h2>

<pre><code class="language-keyman">begin Unicode &gt; use(Main)
</code></pre>

<p>The <a href="/developer/language/reference/begin" title="begin statement"><code class="language-keyman">begin</code> statement</a> tells Keyman which group of rules to
process first when it receives a keystroke. The use of multiple groups is an advanced feature, and unnecessary for this tutorial, so we
will use a single group, called Main. The <code class="language-keyman">begin</code> statement is required in every keyboard, and marks the start of the keyboard body. The
<code class="language-keyman">begin</code> statement also tells Keyman which encoding to use for the keyboard. Nearly all keyboards will use <code class="language-keyman">Unicode</code>, today.</p>

<ul>
  <li><a href="step-4">Continue with Step 4: The Keyboard Body</a></li>
  <li><a href="step-2">Back to Step 2: Writing the Header</a></li>
</ul>
