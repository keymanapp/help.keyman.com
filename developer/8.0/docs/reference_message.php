<?php
  require_once('includes/template.php');

  head([
    'title' => "Message store and MESSAGE statement"
  ,'css' => ['template.css','keyboard.css','keys.css']]);
?>
<div class="navheader"><table width="100%" summary="Navigation header"><tr><th colspan="3" align="center">Message store and MESSAGE statement</th></tr><tr><td width="20%" align="left"><a accesskey="p" href="reference_layout.php">Prev</a> </td><th width="60%" align="center">Headers and System Stores</th><td width="20%" align="right"> <a accesskey="n" href="reference_mnemoniclayout.php">Next</a></td></tr></table><hr></div><div class="section" lang="en"><div class="titlepage"><div><div><h4 class="title" id="reference_message">Message store and MESSAGE statement</h4></div></div></div><pre class="programlisting">
store( &amp;message ) "%tsMessage%"

MESSAGE %tsMessage%
      </pre><p>
    This is a generic message, such as a shareware notice that you can display when the 
    keyboard is installed.  This statement is optional.
  </p><h5><a name="id633231"></a>Example</h5><pre class="programlisting">
store( &amp;message ) "This keyboard is freely redistributable."
      </pre><h5><a name="id633757"></a>Versions</h5><p>The beep statement was introduced in Keyman 3.0.</p><h5><a name="id634483"></a>Related Topics</h5><div class="itemizedlist"><ul type="disc"><li><p><a class="xref" href="reference__struct_headers.php" title="Header keywords">Header keywords</a></p></li></ul></div></div><div class="navfooter"><hr><table width="100%" summary="Navigation footer"><tr><td width="40%" align="left"><a accesskey="p" href="reference_layout.php">Prev</a> </td><td width="20%" align="center"><a accesskey="u" href="reference_systemstores_index.php">Up</a></td><td width="40%" align="right"> <a accesskey="n" href="reference_mnemoniclayout.php">Next</a></td></tr><tr><td width="40%" align="left" valign="top">LAYOUT statement </td><td width="20%" align="center"><a accesskey="h" href="index.php">Home</a></td><td width="40%" align="right" valign="top"> mnemoniclayout system store</td></tr></table></div>
