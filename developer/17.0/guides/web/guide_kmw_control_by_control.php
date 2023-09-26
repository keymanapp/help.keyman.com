<?php
  require_once('includes/template.php');

  head([
    'title' => "Control by Control Example"
  ]);
?>


  <div class="navheader">
    <table width="100%" summary="Navigation header">
      <tr>
        <th colspan="3" align="center">Control by Control Example</th>
      </tr>

      <tr>
        <td width="20%" align="left">
          <a accesskey="p" href="../guide/guide_kmw_full_manual_control">Prev</a>
        </td>

        <th width="60%" align="center">KeymanWeb Guide</th>

        <td width="20%" align="right">
           <a accesskey="n" href="../guide/guide_kmw_defaults">Next</a>
        </td>
      </tr>
    </table>
    <hr>
  </div>

  <div class="section" lang="en">
    <div class="titlepage">
      <h3 class="title" id="guide_kmw_control_by_control">Control by Control Example</h3>
    </div>

    <p>In this example, a simulated webmail form, the default and permissible keyboard for each control is managed by the web page. We use
    the automatic mode for simplicity of demonstration.</p>

    <p>A working example can be seen online at <a class="ulink" href="http://www.keymanweb.com/dev/control_by_control" target=
    "_blank">www.keymanweb.com</a></p>

    <p><span class="inlinemediaobject"><img src="<?= cdn('img/developer/90/kmw_control_by_control_1.png')?>"></span></p>

    <p><span class="inlinemediaobject"><img src="<?= cdn('img/developer/90/kmw_control_by_control_2.png')?>"></span></p>

    <p><span class="inlinemediaobject"><img src="<?= cdn('img/developer/90/kmw_control_by_control_3.png')?>"></span></p>

    <h4><a name="id536046" id="id536046"></a>Code Walkthrough</h4>

    <p>Include the following script in the HEAD of your page:</p>
    <pre class="programlisting">
/* SetupDocument: Called when the page finishes loading */
  function SetupDocument()
  {
    /* Make sure that Keyman is initialized (we can't guarantee initialization order) */
    KeymanWeb.Init();
    /* Disable KeymanWeb interaction on the 'Email to' TEXT control */
    KeymanWeb.DisableControl(document.f.address);
    /* Set the default keyboard for the 'Subject' TEXT control to 'off' (i.e. default browser keyboard) */
    KeymanWeb.SetDefaultKeyboardForControl(document.f.subject, '');
    /* Set the default keyboard for the 'Message body' TEXTAREA to the LaoKeys keyboard */
    KeymanWeb.SetDefaultKeyboardForControl(document.f.text, 'Keyboard_laokeys');
  }

</pre>

    <p>Also include the following HTML code:</p>
    <pre class="programlisting">
&lt;head&gt;
  &lt;!-- Load the KeymanWeb engine --&gt;
  &lt;script type="text/javascript"&gt;KeymanWeb_Key='your_key_here';&lt;/script&gt;
  &lt;script src="keymanweb.js" type="text/javascript"&gt;&lt;/script&gt;
  &lt;!-- Load the LaoKeys keyboard stub --&gt;
  &lt;script src="laokeys_load.js" type="text/javascript"&gt;&lt;/script&gt;
&lt;/head&gt;

&lt;!-- When the page has finished loading, advise KeymanWeb of control settings, see above --&gt;
&lt;body onload="SetupDocument()"&gt;

</pre>
  </div>

  <div class="navfooter">
    <hr>

    <table width="100%" summary="Navigation footer">
      <tr>
        <td width="40%" align="left">
          <a accesskey="p" href="../guide/guide_kmw_full_manual_control">Prev</a>
        </td>

        <td width="20%" align="center">
          <a accesskey="u" href="../guide/index_guide_kmw">Up</a>
        </td>

        <td width="40%" align="right">
           <a accesskey="n" href="../guide/guide_kmw_defaults">Next</a>
        </td>
      </tr>

      <tr>
        <td width="40%" align="left" valign="top">Full Manual Control Example </td>

        <td width="20%" align="center">
          <a accesskey="h" href="../index">Home</a>
        </td>

        <td width="40%" align="right" valign="top"> Changing KeymanWeb's Defaults</td>
      </tr>
    </table>
  </div>

