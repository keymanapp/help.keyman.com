<?php
  require_once('includes/template.php');

  head([
    'title' => "Copyright store and COPYRIGHT statement"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Copyright store and COPYRIGHT statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_caps.php">Prev</a> </td><th width="60%" align="center">Headers and System Stores</th><td width="20%" align="right"> <a accesskey="n" href="reference_ethnologuecode.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_copyright">Copyright store and COPYRIGHT statement</h4></div></div></div><pre class="programlisting">
store( &amp;copyright ) "%tsCopyrightMessage%"

COPYRIGHT "%tsCopyrightMessage%"
      </pre><p>
        Keyman keyboards have a provision to display a copyright message when they are installed.  
        This statement is optional.  The message should be enclosed in quotes.
      </p><h5><a name="id634509"></a>Example</h5><pre class="programlisting">
store( &amp;copyright ) "Copyright © 2001 Joe Bloggs"
      </pre><h5><a name="id633782"></a>Versions</h5><p>The beep statement was introduced in Keyman 4.0.</p><h5><a name="id633228"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference_match.php" title="match rule">match rule</a></p></li><li><p><a class="xref" href="reference_nomatch.php" title="nomatch rule">nomatch rule</a></p></li><li><p><a class="xref" href="reference__struct_headers.php" title="Header keywords">Header keywords</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_caps.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_systemstores_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_ethnologuecode.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Caps Lock stores and statements </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> EthnologueCode system store</td></tr></table></div>
