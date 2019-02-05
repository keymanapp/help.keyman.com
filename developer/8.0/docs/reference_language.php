<?php
  require_once('includes/template.php');

  head([
    'title' => "LANGUAGE statement"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">LANGUAGE statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_includecodes.php">Prev</a> </td><th width="60%" align="center">Headers and System Stores</th><td width="20%" align="right"> <a accesskey="n" href="reference_layout.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_language">LANGUAGE statement</h4></div></div></div><pre class="programlisting">
LANGUAGE %nLang%, %nSubLang%
store(&amp;language) "%nLang%, %nSubLang%"
      </pre><p>
        The LANGUAGE statement in Keyman Desktop 7.0 specifies the system language that a keyboard should be associated with.
        This parameter is only used with Keyman Desktop Professional - the Light edition does not support language association.
  </p><p>
        When using the Professional version of Keyman Desktop, if the specified language is available on the user's system, 
        Keyman Desktop will install it and associate it with the keyboard for the Keyman Desktop keyboard.  
        The Keyman Desktop keyboard will then be activated whenever the language is selected using Windows' language 
        selector in the taskbar.
  </p><p>
        Administrative privileges are NOT required to install a keyboard with the LANGUAGE option under Keyman Desktop 7.0.
  </p><p>
        One situation where the LANGUAGE keyword is very useful is in writing a Keyman keyboard for
        a right-to-left language. If you specify a right-to-left language with the LANGUAGE keyword, then
        the keyboard will work as expected; otherwise it will produce left-to-right output.
  </p><h5><a name="id633151"></a>Example</h5><pre class="programlisting">
store(&amp;language) "1, 1"  c Use this keyboard with the Arabic locale
      </pre><pre class="programlisting">
store(&amp;language) "9, 1"  c Use this keyboard with the US English locale
      </pre><h5><a name="id634714"></a>Versions</h5><p>The LANGUAGE statement was introduced in Keyman 4.0.</p><p>
      <a class="ulink" href="http://msdn2.microsoft.com/en-us/library/ms776294.aspx" target="_blank">Microsoft language identifier reference</a>
    </p><h5><a name="id634213"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference__struct_headers.php" title="Header keywords">Header keywords</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_includecodes.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_systemstores_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_layout.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">includecodes system store </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> LAYOUT statement</td></tr></table></div>
