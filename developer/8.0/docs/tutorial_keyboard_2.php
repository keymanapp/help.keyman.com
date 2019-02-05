<?php
  require_once('includes/template.php');

  head([
    'title' => "Step 2: Writing the Header"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Step 2: Writing the Header</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="tutorial_keyboard_1.php">Prev</a> </td><th width="60%" align="center">Keyboard Tutorial</th><td width="20%" align="right"> <a accesskey="n" href="tutorial_keyboard_3.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h3 class="title" id="tutorial_keyboard_2">Step 2: Writing the Header</h3></div></div></div><h4><a name="id661857"></a>Overview of a keyboard file</h4><p>
    A keyboard file is divided into two sections: the header and the rules.
    The header section defines the name of the keyboard, its bitmap, and other
    general settings. The rules are used to define how the keyboard responds
    to keystrokes from the user, and are divided into groups. We will start by
    writing the header.
  </p><h4><a name="id661865"></a>The keyboard header </h4><p>
    The keyboard header is the first part of a keyboard; it consists of statements
    that help Keyman identify the keyboard and set default options for it.  Each
    statement in the header must be on a separate line and is usually written
    with capital letters, although that is not required.
    Keeping the statements in the header in upper case helps you identify them
    easily, and keeps them consistent with keyboard programs other people might
    write.
  </p><p>
    We will begin to write the keyboard. If Keyman Developer is not already
    running, start it now. It will open with a blank keyboard file ready
    for us.
  </p><p>
    Type or paste the following code into the keyboard file. This is the header
    of our keyboard file.
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
  </pre><p>
    An explanation of the various parts of the header follows on the next page.
  </p><p>
    <a class="xref" href="tutorial_keyboard_3.php" title="Step 3: The Keyboard Header">Step 3: The Keyboard Header</a>
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="tutorial_keyboard_1.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="tutorial_keyboard.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="tutorial_keyboard_3.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Step 1: Planning the Keyboard </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Step 3: The Keyboard Header</td></tr></table></div>
