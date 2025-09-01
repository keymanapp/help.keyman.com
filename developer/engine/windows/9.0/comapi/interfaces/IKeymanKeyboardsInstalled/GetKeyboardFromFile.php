<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardsInstalled::GetKeyboardFromFile"
  ]);
?>

<h1><a class="link" href=
      "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardsInstalled" title=
      "IKeymanKeyboardsInstalled Interface">IKeymanKeyboardsInstalled</a>::GetKeyboardFromFile</h1>

    <p>Loads the keyboard file referred to by Filename and returns details about the file. Does not install the keyboard for use.</p>

    <h6><a name="id573761" id="id573761"></a>Declaration</h6>
    <pre class="programlisting">
Function GetKeyboardFromFile(Filename as String) as IKeymanKeyboardFile
</pre>

    <h6><a name="id573776" id="id573776"></a>Parameters</h6>

    <table id="id573806">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>

      <tr>
        <td>1</td>

        <td>File</td>

        <td>String</td>

        <td>Full path and filename of the keyboard to load</td>
      </tr>
    </table>

    <h6><a name="id573792" id="id573792"></a>Return Value</h6><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardFile" title=
    "IKeymanKeyboardFile Interface">IKeymanKeyboardFile</a>

    <h6><a name="id573788" id="id573788"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
