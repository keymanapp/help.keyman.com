<?php
  require_once('includes/template.php');

  head([
    'title' => "includecodes system store"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">includecodes system store</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_hotkey.php">Prev</a> </td><th width="60%" align="center">Headers and System Stores</th><td width="20%" align="right"> <a accesskey="n" href="reference_language.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_includecodes">includecodes system store</h4></div><div><h4 class="title" id="reference_includecodes">includecodes system store</h4></div></div></div><p>
    &amp;includecodes allows you to reference an external file for <a class="link" href="reference__struct_constants.php" title="Named Constants">named character constants</a>.
    Keyman Developer includes <span style="color: red">&lt;file&gt;unicodedata.txt&lt;/file&gt;</span>, which lists all the named Unicode characters - in version 7.0, it includes
    all the Unicode 5.0 characters.
  </p><p>
    The file format is based on unicodedata.txt.  Fields are delimited by semicolon (;) and only the first two fields are used by Keyman Developer.
  </p><pre class="programlisting">
####;CONSTANT_NAME;additional data
    </pre><div class="itemizedlist"><ul type="disc"><li><p>
        <em class="parameter"><code>####</code></em> should be a 4-6 digit Unicode character value, e.g. 0061, for 'a'
      </p><p>
        <em class="parameter"><code>CONSTANT_NAME</code></em> is a case insensitive name.  Characters allowed are A-Z, 0-9, space and _.  
        Note that space will be converted to underscore (_) by Keyman Developer when the file is imported.
      </p><p>
        <em class="parameter"><code>additional data</code></em> is ignored by Keyman Developer.
      </p></li></ul></div><h5><a name="id633474"></a>Example</h5><pre class="programlisting">
store(CCedilla) U+00E7
+ [RALT K_C] &gt; $CCedilla
      </pre><h5><a name="id633082"></a>Versions</h5><p>The &amp;includecodes statement was introduced in Keyman 5.0.</p><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference__struct_unicode.php" title="Unicode and ANSI">Unicode and ANSI</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_hotkey.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_systemstores_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_language.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">Hotkey store and HOTKEY statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> LANGUAGE statement</td></tr></table></div>
