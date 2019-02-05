<?php
  require_once('includes/template.php');

  head([
    'title' => "Unicode and ANSI"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Unicode and ANSI</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference__struct_strings.php">Prev</a> </td><th width="60%" align="center">Language Structure</th><td width="20%" align="right"> <a accesskey="n" href="reference__struct_vkeys.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference__struct_unicode">Unicode and ANSI</h4></div></div></div><p>
        The <a class="link" href="reference_begin.php" title="begin statement">begin</a> statement defines where processing begins when a key is pressed.
        Keyman first determines whether the active application can accept Unicode input, and then selects 
        the Unicode or ANSI begin statement accordingly.
      </p><p>
        Keyman supports the full Unicode character set (U+0001 - U+10FFFF).  Characters below U+0020 are 
        not recommended, although U+000D may be useful as a carriage return in some circumstances.  Characters
        should be specified in UTF-32.
      </p><p>
        Surrogate characters should not be used, and the compiler will warn accordingly.  Instead the appropriate
        UTF-32 codepoint should be used, and Keyman will translate the character internally into a surrogate pair
        so that the application can use it, if it is compliant.
      </p><p>
        Unicode characters can be specified in all of the methods referred to in the
        <a class="link" href="reference__struct_strings.php" title="Strings">strings</a> topic, but the U+xxxx method is recommended for clarity.
      </p><h5><a name="id607332"></a>Versions</h5><p>Unicode support was introduced in Keyman 5.0.</p><h5><a name="id607285"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference__struct.php" title="Language Structure">Language Structure</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference__struct_strings.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_language_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference__struct_vkeys.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Strings </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Virtual Keys and Virtual Character Keys</td></tr></table></div>
