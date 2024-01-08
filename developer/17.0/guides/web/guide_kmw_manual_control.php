<?php
  require_once('includes/template.php');

  head([
    'title' => "Manual Control Example"
  ]);
?>


  <div class="navheader">
    <table width="100%" summary="Navigation header">
      <tr>
        <th colspan="3" align="center">Manual Control Example</th>
      </tr>

      <tr>
        <td width="20%" align="left">
          <a accesskey="p" href="../guide/guide_kmw_automatic_control_loaded">Prev</a>
        </td>

        <th width="60%" align="center">KeymanWeb Guide</th>

        <td width="20%" align="right">
           <a accesskey="n" href="../guide/guide_kmw_full_manual_control">Next</a>
        </td>
      </tr>
    </table>
    <hr>
  </div>

  <div class="section" lang="en">
    <div class="titlepage">
      <h3 class="title" id="guide_kmw_manual_control">Manual Control Example</h3>
    </div>

    <p>In this example, the web page designer specifies the location and activation of the user interface for the KeymanWeb. They have also
    specified that the LaoKeys keyboard should be activated by default. This example continues to use the KeymanWeb default interface.</p>

    <p>A working example can be seen online at <a class="ulink" href="http://www.keymanweb.com/dev/manual_control" target=
    "_blank">www.keymanweb.com</a></p><span class="inlinemediaobject"><img src="<?= cdn('img/developer/90/kmw_manual_control.png')?>"></span>

    <h4><a name="id535470" id="id535470"></a>Code Walkthrough</h4>

    <p>Include the following script in the HEAD of your page:</p>
    <pre class="programlisting">
/* SetupDocument: Called when the page finishes loading */
function SetupDocument()
{
  /* Make sure that Keyman is initialized (we can't guarantee initialization order) */
  KeymanWeb.Init();

  KWControl = document.getElementById('KWControl');
  /* Change the UI control mode of KeymanWeb to manual (default automatic) */
  KeymanWeb.SetMode('manual');
  /* Select the LaoKeys keyboard */
  KeymanWeb.SetActiveKeyboard('Keyboard_laokeys');
}

/* KWControlClick: Called when user clicks on the KWControl IMG */
function KWControlClick()
{
  /* Toggle display of the default KeymanWeb interface to the right of the KWControl IMG */
  var KWControl = document.getElementById('KWControl');
  if(KeymanWeb.IsInterfaceVisible()) KeymanWeb.HideInterface();
  else KeymanWeb.ShowInterface(
        KeymanWeb.GetAbsoluteX(KWControl) + KWControl.offsetWidth - 1,
        KeymanWeb.GetAbsoluteY(KWControl));
     /*
       Note the use of KeymanWeb.GetAbsoluteX and GetAbsoluteY - helper
       functions for getting browser-independent X and Y offsetLeft and offsetTop
     */
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

&lt;!-- When the page has finished loading, activate the LaoKeys keyboard, see above --&gt;
&lt;body onload="SetupDocument()"&gt;

</pre>

    <p>And finally, include the control img for KeymanWeb:</p>
    <pre class="programlisting">
&lt;!-- Display the KeymanWeb icon for the user to click on --&gt;
&lt;img style="border: solid 1px black; padding: 2px 2px 3px 2px" src='kmicon.png' alt='KeymanWeb' onclick='KWControlClick()' id='KWControl' /&gt;

</pre>
  </div>

  <div class="navfooter">
    <hr>

    <table width="100%" summary="Navigation footer">
      <tr>
        <td width="40%" align="left">
          <a accesskey="p" href="../guide/guide_kmw_automatic_control_loaded">Prev</a>
        </td>

        <td width="20%" align="center">
          <a accesskey="u" href="../guide/index_guide_kmw">Up</a>
        </td>

        <td width="40%" align="right">
           <a accesskey="n" href="../guide/guide_kmw_full_manual_control">Next</a>
        </td>
      </tr>

      <tr>
        <td width="40%" align="left" valign="top">Automatic Control (pre-loaded) Example </td>

        <td width="20%" align="center">
          <a accesskey="h" href="../index">Home</a>
        </td>

        <td width="40%" align="right" valign="top"> Full Manual Control Example</td>
      </tr>
    </table>
  </div>

