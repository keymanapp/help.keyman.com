<?php
  require_once('includes/template.php');

  head([
    'title' => "mnemoniclayout system store"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">mnemoniclayout system store</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_message.php">Prev</a> </td><th width="60%" align="center">Headers and System Stores</th><td width="20%" align="right"> <a accesskey="n" href="reference_name.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_mnemoniclayout">mnemoniclayout system store</h4></div></div></div><p>
    Keyman 6.0 supports two different types of keyboards: positional and mnemonic
    keyboards.
  </p><p>
    The layout of a positional keyboard is based on the scan codes sent by the keyboard,
    which are related to the actual key location on the keyboard. This means that if you
    press any particular key, the output will be the same regardless of the underlying
    physical keyboard or the keyboard layout selected in Control Panel.
  </p><p>
    With a mnemonic keyboard, Keyman will instead examine the character output by the current
    Windows keyboard layout. For example, with English, French, and German Windows keyboard layouts,
    pressing "z" will produce the same output, even though the "z" key is in different positions
    on all three layouts.
  </p><p>
    Virtual keys do change their behaviour somewhat in a mnemonic layout.  For the "white" character
    keys (i.e. numbers, alphabet, and punctuation keys on the primary section of the keyboard),
    'virtual character keys' are used instead of regular virtual keys.  See the section on
    <a class="link" href="reference__struct_vkeys.php" title="Virtual Keys and Virtual Character Keys">virtual keys and virtual character keys</a> for details.
  </p><p>
    All keyboards are positional by default. To make a keyboard mnemonic, use:
  </p><pre class="programlisting">
store(&amp;mnemoniclayout) "1"
    </pre><p>
    Note that positional keyboards are based on a US English layout: any positional keyboard that
    tries to match keystrokes with characters or virtual keys (except [K_oE2]) not present on a US English layout
    will not function correctly. If you are creating a positional keyboard, and you do not use a US English
    layout normally, we suggest you install another language in Control Panel and assign the US English layout
    to it, so that you can easily switch to it to write your keyboard.  You can also view
    <a class="link" href="reference__english.php" title="US English keyboard layout">a reference diagram of the US English keyboard layout</a> in this help file.
  </p></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_message.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_systemstores_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_name.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Message store and MESSAGE statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Name store and NAME statement</td></tr></table></div>
