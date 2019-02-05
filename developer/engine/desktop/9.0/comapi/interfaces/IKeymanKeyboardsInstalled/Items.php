<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardsInstalled::Items"
  ]);
?>

<h1><a class="link" href=
      "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardsInstalled" title=
      "IKeymanKeyboardsInstalled Interface">IKeymanKeyboardsInstalled</a>::Items</h1>

    <p>Returns a keyboard from the package. If Index is not found, raises an exception.</p>

    <h6><a name="id573716" id="id573716"></a>Declaration</h6>
    <pre class="programlisting">
Property Get Items(Index) As IKeymanKeyboardInstalled
</pre>

    <h6><a name="id573733" id="id573733"></a>Parameters</h6>

    <table id="id573727">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>

      <tr>
        <td>1</td>

        <td>Index</td>

        <td>Variant</td>

        <td>1-based index of the keyboard to retrieve, or the Name of the keyboard to retrieve</td>
      </tr>
    </table>

    <h6><a name="id573767" id="id573767"></a>Return Value</h6><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard" title=
    "IKeymanKeyboard Interface">IKeymanKeyboard</a>

    <h6><a name="id573755" id="id573755"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
