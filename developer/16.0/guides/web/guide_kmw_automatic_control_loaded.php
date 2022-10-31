<?php
  require_once('includes/template.php');

  head([
    'title' => "Automatic Control (pre-loaded) Example"
  ]);
?>


  <div class="navheader">
    <table width="100%" summary="Navigation header">
      <tr>
        <th colspan="3" align="center">Automatic Control (pre-loaded) Example</th>
      </tr>

      <tr>
        <td width="20%" align="left">
          <a accesskey="p" href="../guide/guide_kmw_automatic_control.php">Prev</a> 
        </td>

        <th width="60%" align="center">KeymanWeb Guide</th>

        <td width="20%" align="right">
           <a accesskey="n" href="../guide/guide_kmw_manual_control.php">Next</a>
        </td>
      </tr>
    </table>
    <hr>
  </div>

  <div class="section" lang="en">
    <div class="titlepage">
      <h3 class="title" id="guide_kmw_automatic_control_loaded">Automatic Control (pre-loaded) Example</h3>
    </div>

    <p>This page shows the simplest method of utilising KeymanWeb. Only one tag per keyboard, plus the reference to KeymanWeb itself, is
    required.</p>

    <p>In this example, we use only the LaoKey keyboard, and we load it at the time that the page loads.</p>

    <p>A working example can be seen online at <a class="ulink" href="http://www.keymanweb.com/dev/automatic_control_loaded.php" target=
    "_blank">www.keymanweb.com</a></p><span class="inlinemediaobject"><img src="<?= cdn('img/developer/90/kmw_automatic_control.png')?>"></span>

    <h4><a name="id535274" id="id535274"></a>Code Walkthrough</h4>
    <pre class="programlisting">
&lt;head&gt;  
  &lt;!-- Start of Code --&gt;  
  &lt;script type="text/javascript"&gt;KeymanWeb_Key='your_key_here';&lt;/script&gt;  
  &lt;script src="keymanweb.js" type="text/javascript"&gt;&lt;/script&gt;  
  &lt;script src="laokeys.js" type="text/javascript"&gt;&lt;/script&gt;  
  &lt;!-- End of Code --&gt;  
&lt;/head&gt;
  
</pre>
  </div>

  <div class="navfooter">
    <hr>

    <table width="100%" summary="Navigation footer">
      <tr>
        <td width="40%" align="left">
          <a accesskey="p" href="../guide/guide_kmw_automatic_control.php">Prev</a> 
        </td>

        <td width="20%" align="center">
          <a accesskey="u" href="../guide/index_guide_kmw.php">Up</a>
        </td>

        <td width="40%" align="right">
           <a accesskey="n" href="../guide/guide_kmw_manual_control.php">Next</a>
        </td>
      </tr>

      <tr>
        <td width="40%" align="left" valign="top">Automatic Mode Example </td>

        <td width="20%" align="center">
          <a accesskey="h" href="../index.php">Home</a>
        </td>

        <td width="40%" align="right" valign="top"> Manual Control Example</td>
      </tr>
    </table>
  </div>

