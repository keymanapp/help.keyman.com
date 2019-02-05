<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardInstalled::InstallVisualKeyboard"
  ]);
?>

<h1><a class="link" href=
      "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardInstalled" title=
      "IKeymanKeyboardInstalled Interface">IKeymanKeyboardInstalled</a>::InstallVisualKeyboard</h1>

    <p>Installs the On Screen Keyboard referred to by Filename into the Keyman Engine and associates it with the installed keyboard.</p>

    <h6><a name="id569922" id="id569922"></a>Declaration</h6>
    <pre class="programlisting">
Sub InstallVisualKeyboard(Filename As String)
</pre>

    <h6><a name="id569954" id="id569954"></a>Parameters</h6>

    <table id="id569934">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>

      <tr>
        <td>1</td>

        <td>Filename</td>

        <td>String</td>

        <td>Full path and filename of On Screen Keyboard (.kvk) file to associate with the keyboard.</td>
      </tr>
    </table>

    <h6><a name="id569936" id="id569936"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
