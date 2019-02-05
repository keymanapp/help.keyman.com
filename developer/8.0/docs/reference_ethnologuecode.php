<?php
  require_once('includes/template.php');

  head([
    'title' => "EthnologueCode system store"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">EthnologueCode system store</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_copyright.php">Prev</a> </td><th width="60%" align="center">Headers and System Stores</th><td width="20%" align="right"> <a accesskey="n" href="reference_hotkey.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_ethnologuecode">EthnologueCode system store</h4></div></div></div><p>
        The optional EthnologueCode system store specifies the language the keyboard
        is made for by use of an SIL Ethnologue three-letter language code. This
        information is intended for use by third-party applications.
      </p><p>
        For a list of codes, or more information about Ethnologue, see
        <a class="ulink" href="http://www.ethnologue.com/" target="_blank">www.ethnologue.com</a>.
      </p><p>
    Multiple ethnologue codes can be included by separating them with spaces.  You
    should not include punctuation between ethnologue codes.  However, for legacy 
    reasons, applications that process this store should ignore any punctuation found.
  </p><p>
    A proposed addition to this field is to add script or country identifiers as needed.
  </p><p>
    The Ethnologue codes form the draft ISO standard 639-3.
  </p><h5><a name="id633000"></a>Example</h5><pre class="programlisting">
store(&amp;ethnologuecode) "ICE"    c Icelandic
      </pre><h5><a name="id633747"></a>Versions</h5><p>The ethnologuecode system store was introduced in Keyman 6.0.</p><h5><a name="id634550"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference__struct_headers.php" title="Header keywords">Header keywords</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_copyright.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_systemstores_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_hotkey.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Copyright store and COPYRIGHT statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Hotkey store and HOTKEY statement</td></tr></table></div>
