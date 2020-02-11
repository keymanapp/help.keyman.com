<?php
  require_once('includes/template.php');

  head([
    'title' => "Automatic Mode Example"
  ]);
?>


  <div class="navheader">
    <table width="100%" summary="Navigation header">
      <tr>
        <th colspan="3" align="center">Automatic Mode Example</th>
      </tr>

      <tr>
        <td width="20%" align="left">
          <a accesskey="p" href="../guide/index_guide_kmw.php">Prev</a> 
        </td>

        <th width="60%" align="center">KeymanWeb Guide</th>

        <td width="20%" align="right">
           <a accesskey="n" href="../guide/guide_kmw_automatic_control_loaded.php">Next</a>
        </td>
      </tr>
    </table>
    <hr>
  </div>

  <div class="section" lang="en">
    <div class="titlepage">
      <h3 class="title" id="guide_kmw_automatic_control">Automatic Mode Example</h3>
    </div>

    <p>This page shows the simplest method of utilising KeymanWeb. Only one tag per keyboard, plus the reference to KeymanWeb itself, is
    required.</p>

    <p>In this example, we use only the LaoKey keyboard.</p>

    <p>A working example can be seen online at <a class="ulink" href="http://www.keymanweb.com/dev/automatic_control.php" target=
    "_blank">www.keymanweb.com</a></p>

    <p><span class="inlinemediaobject"><img src="<?= cdn('img/developer/90/kmw_automatic_control.png')?>"></span></p>

    <h4><a name="id536564" id="id536564"></a>Code Walkthrough</h4>
    <pre class="programlisting">
&lt;head&gt;  
  &lt;!-- Start of Code --&gt;  
  &lt;script type="text/javascript"&gt;KeymanWeb_Key='your_key_here';&lt;/script&gt;  
  &lt;script src="keymanweb.js" type="text/javascript"&gt;&lt;/script&gt;  
  &lt;script src="laokeys_load.js" type="text/javascript"&gt;&lt;/script&gt;  
  &lt;!-- End of Code --&gt;  
&lt;/head&gt;
  
</pre>

    <p>As you can see above, the second line in the code snippet above references the LaoKey keyboard loader JavaScript file. This is a
    small stub file, typically less than 200 bytes, that defines the name and actual location of the real keyboard file (in this case,
    <code class="filename">laokeys.js</code>). When a page may reference many keyboards, this saves downloading potentially hundreds of
    kilobytes of unused Javascript keyboards - the keyboard is downloaded when it is first selected by the user.</p>

    <p>If you know that a keyboard will be required for a page, you can skip the loader and load the keyboard directly instead, shown as a
    <a class="link" href="../guide/guide_kmw_automatic_control_loaded.php" title="Automatic Control (pre-loaded) Example">separate example</a>.</p>

    <h4><a name="id536576" id="id536576"></a>The KeymanWeb_Key</h4>

    <p>KeymanWeb_Key is a code that is generated for your domain when you purchase a licence for KeymanWeb. This key is required in order
    for KeymanWeb to operate. You will receive the key in an email when you provide a list of domains to Tavultesoft.</p>
  </div>

  <div class="navfooter">
    <hr>

    <table width="100%" summary="Navigation footer">
      <tr>
        <td width="40%" align="left">
          <a accesskey="p" href="../guide/index_guide_kmw.php">Prev</a> 
        </td>

        <td width="20%" align="center">
          <a accesskey="u" href="../guide/index_guide_kmw.php">Up</a>
        </td>

        <td width="40%" align="right">
           <a accesskey="n" href="../guide/guide_kmw_automatic_control_loaded.php">Next</a>
        </td>
      </tr>

      <tr>
        <td width="40%" align="left" valign="top">KeymanWeb Guide </td>

        <td width="20%" align="center">
          <a accesskey="h" href="../index.php">Home</a>
        </td>

        <td width="40%" align="right" valign="top"> Automatic Control (pre-loaded) Example</td>
      </tr>
    </table>
  </div>

