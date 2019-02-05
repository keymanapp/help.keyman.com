<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 3: The Keyboard Header"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 3: The Keyboard Header</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_keyboard_2.php">Prev</a> </td><th width="60%" align="center">Keyboard Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_keyboard_4.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="tutorial_keyboard_3">Step 3: The Keyboard Header</h3></div></div></div><h4><a name="id661904"></a>Comments</h4><pre class="programlisting">
c Simplified French Keyboard for Keyman 7.0
  </pre><p>
    Most of the header in this example is made up of <a class="link" href="reference__struct_comments.php" title="Comments">comments</a>. A comment is used
    to make notes about the keyboard, or to provide information on the workings of
    the keyboard. The comments are readable by anyone looking at the source code of
    the keyboard.
  </p><p>
    A comment always starts with a lowercase 'c', followed by one or more spaces,
    and continues to the end of the line. Keyman Developer will ignore comments
    when compiling a keyboard.
  </p><p>
    Comments can take up a whole line, or can start in the middle of the line.
    The latter is useful for making short notes about individual lines. As you
    can see we have used both kinds of comments in the header.
  </p><h4><a name="id661927"></a>The &amp;Version system store</h4><pre class="programlisting">
store(&amp;Version) "7.0"             c This keyboard is for use with Keyman 7.0
  </pre><p>
    The <a class="link" href="reference_version.php" title="Version store and VERSION statement">&amp;Version system store</a> identifies the Keyman version for which this keyboard
    was written; this keyboard is for use with Keyman 7.0. The &amp;Version system
    store is a required part of each keyboard header, and should be the first
    store in the file.
  </p><h4><a name="id661943"></a>The &amp;Name system store</h4><pre class="programlisting">
store(&amp;Name)    "Quick French"
  </pre><p>
    The <a class="link" href="reference_name.php" title="Name store and NAME statement">&amp;Name system store</a> specifies a descriptive name for the keyboard, which can be
    up to eighty characters long. The
    name we have given to this keyboard is "Quick French". The &amp;Name system store is
    not required but is highly recommended!
  </p><h4><a name="id661958"></a>The &amp;Bitmap system store</h4><pre class="programlisting">
store(&amp;Bitmap)  "qfrench.ico"
  </pre><p>
    The optional <a class="link" href="reference_bitmap.php" title="Bitmap store and BITMAP statement">&amp;Bitmap system store</a> tells Keyman which image to use for the
    keyboard's icon. The picture should be in the standard Windows .ICO or .BMP format,
    and should be 16x16 pixels.  If you use a modern icon editor, the icon can use
    alpha transparency.  For this keyboard we will be using the following bitmap:
    <span class="inlinemediaobject"><img src="developer_images/tutorial_keyboard_qfrench.gif"></span>
    ; it is found in the Keyman Developer
    folder, under <code class="filename">Samples\Examples\qfrench.ico</code> - you should copy it into
    the same folder in which you will save your keyboard.
  </p><h4><a name="id661989"></a>The &amp;MnemonicLayout system store</h4><pre class="programlisting">
store(&amp;MnemonicLayout) "1"
  </pre><p>
    The <a class="link" href="reference_mnemoniclayout.php" title="mnemoniclayout system store">&amp;MnemonicLayout system store</a> tells Keyman that the layout 
    is meant to conform to the user's keyboard layout; for example, if the user presses the quote key (') on their 
    keyboard (whether they are using a US English, UK English, French, German, Swedish, etc.) it
    should work in the same way. The opposite of this is a positional layout (the default), which is intended for keyboards for
    which there is no correspondence between what is printed on the keyboard and what is output.
  </p><h4><a name="id662005"></a>The begin statement</h4><pre class="programlisting">
begin Unicode &gt; use(Main)
  </pre><p>
    The <a class="link" href="reference_begin.php" title="begin statement">begin statement</a> tells Keyman which group of rules to process first when it
    receives a keystroke. The use of multiple groups is an advanced feature, and
    unnecessary for this tutorial, so we will use a single group, called Main. The
    begin statement is required in every keyboard, and marks the start of the
    keyboard body. A keyboard can have one or two begin statements, for Unicode and/or
    legacy codepage-based systems (also known as "ANSI"). We will be using Unicode.
  </p><p>
    <a class="xref" href="tutorial_keyboard_4.php" title="Step 4: The Keyboard Body">Step 4: The Keyboard Body</a>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_keyboard_2.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_keyboard.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_keyboard_4.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Step 2: Writing the Header </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Step 4: The Keyboard Body</td></tr></table></div>
