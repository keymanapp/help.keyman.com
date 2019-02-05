<?php
  require_once('includes/template.php');

  head([
    'title' => "Version store and VERSION statement"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Version store and VERSION statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_name.php">Prev</a> </td><th width="60%" align="center">Headers and System Stores</th><td width="20%" align="right"> <a accesskey="n" href="reference_locale_index.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_version">Version store and VERSION statement</h4></div></div></div><pre class="programlisting">
store( &amp;version ) "%KeymanVersion%"

VERSION %KeymanVersion%
      </pre><p>
        The VERSION statement was added to Keyman 3.0 to allow later versions to easily 
        distinguish what version of Keyman the keyboard was written for and handle it as 
        such.  The VERSION statement is required. For new keyboards, use 6.0 as the version
        number.
      </p><h5><a name="id633716"></a>Example</h5><pre class="programlisting">
VERSION 7.0
      </pre><h5><a name="id634563"></a>Versions</h5><p>The use statement was introduced in Keyman 3.0. Keyman 7.0 will compile Keyman 6.0
      keyboards without modification, but you must specify version 7.0 for keyboards that
      make use of version 6.0 features.
    </p><h5><a name="id633382"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference__struct_headers.php" title="Header keywords">Header keywords</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_name.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_systemstores_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_locale_index.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Name store and NAME statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> Localization of Keyman Desktop</td></tr></table></div>
