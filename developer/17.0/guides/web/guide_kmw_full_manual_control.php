<?php
  require_once('includes/template.php');

  head([
    'title' => "Full Manual Control Example"
  ]);
?>


  <div class="navheader">
    <table width="100%" summary="Navigation header">
      <tr>
        <th colspan="3" align="center">Full Manual Control Example</th>
      </tr>

      <tr>
        <td width="20%" align="left">
          <a accesskey="p" href="../guide/guide_kmw_manual_control">Prev</a>
        </td>

        <th width="60%" align="center">KeymanWeb Guide</th>

        <td width="20%" align="right">
           <a accesskey="n" href="../guide/guide_kmw_control_by_control">Next</a>
        </td>
      </tr>
    </table>
    <hr>
  </div>

  <div class="section" lang="en">
    <div class="titlepage">
      <h3 class="title" id="guide_kmw_full_manual_control">Full Manual Control Example</h3>
    </div>

    <p>In this example, the web page designer has opted for their own user interface instead of the KeymanWeb interface. The keyboards in
    the selector are populated from the KeymanWeb list of keyboards.</p>

    <p>A working example can be seen online at <a class="ulink" href="http://www.keymanweb.com/dev/full_manual_control" target=
    "_blank">www.keymanweb.com</a></p>

    <p><span class="inlinemediaobject"><img src="<?= cdn('img/developer/90/kmw_full_manual_control.png')?>"></span></p>

    <h4><a name="id535934" id="id535934"></a>Code Walkthrough</h4>

    <p>Include the following script in the HEAD of your page:</p>
    <pre class="programlisting">
var KWControl = null;

  /* SetupDocument: Called when the page finishes loading */
  function SetupDocument()
  {
    /* Make sure that Keyman is initialized (we can't guarantee initialization order) */
    KeymanWeb.Init();
    /* Change the UI control mode of KeymanWeb to manual (default automatic) */
    KeymanWeb.SetMode('manual');
    KWControl = document.getElementById('KWControl');
    /* Retrieve the list of keyboards available from KeymanWeb and populate the selector using the DOM */
    var kbds = KeymanWeb.GetKeyboards();
    for(var kbd in kbds)
    {
      var opt = document.createElement('OPTION');
      opt.value = kbds[kbd].InternalName;
      opt.innerHTML = kbds[kbd].Name;
      KWControl.appendChild(opt);
    }
    /* Focus onto the multilingual field in the form */
    document.f.multilingual.focus();
  }

  /* KWControlChange: Called when user selects an item in the KWControl SELECT */
  function KWControlChange()
  {
    /* Select the keyboard in KeymanWeb */
    KeymanWeb.SetActiveKeyboard(KWControl.value);
    /* Focus onto the multilingual field in the form */
    document.f.multilingual.focus();
  }

  /* KWHelpClick: Called when user clicks the help icon */
  function KWHelpClick()
  {
    /* Toggle display of help below the KWControl SELECT */
    if(KeymanWeb.IsHelpVisible()) KeymanWeb.HideHelp();
    else KeymanWeb.ShowHelp(KeymanWeb.GetAbsoluteX(KWControl), KeymanWeb.GetAbsoluteY(KWControl) + KWControl.offsetHeight + 2);
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

  &lt;!-- When the page has finished loading, populate the keyboard selector, see above --&gt;
  &lt;body onload="SetupDocument()"&gt;

</pre>

    <p>And finally, include the keyboard SELECT and the clickable help img:</p>
    <pre class="programlisting">
&lt;!-- Display the KWControl selector with different keyboards listed --&gt;
  &lt;para&gt;Keyboard: &lt;select id='KWControl' onchange='KWControlChange()'&gt;&lt;option value=''&gt;English&lt;/option&gt;&lt;/select&gt;
  &lt;img src='form_help.jpg' style='vertical-align: bottom' onclick='KWHelpClick()' /&gt;&lt;/para&gt;

</pre>
  </div>

  <div class="navfooter">
    <hr>

    <table width="100%" summary="Navigation footer">
      <tr>
        <td width="40%" align="left">
          <a accesskey="p" href="../guide/guide_kmw_manual_control">Prev</a>
        </td>

        <td width="20%" align="center">
          <a accesskey="u" href="../guide/index_guide_kmw">Up</a>
        </td>

        <td width="40%" align="right">
           <a accesskey="n" href="../guide/guide_kmw_control_by_control">Next</a>
        </td>
      </tr>

      <tr>
        <td width="40%" align="left" valign="top">Manual Control Example </td>

        <td width="20%" align="center">
          <a accesskey="h" href="../index">Home</a>
        </td>

        <td width="40%" align="right" valign="top"> Control by Control Example</td>
      </tr>
    </table>
  </div>

