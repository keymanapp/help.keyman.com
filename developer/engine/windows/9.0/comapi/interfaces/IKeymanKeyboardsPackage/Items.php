<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardsPackage::Items"
  ]);
?>

<h1><a class="link" href=
      "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardsPackage" title="IKeymanKeyboardsPackage Interface">IKeymanKeyboardsPackage</a>::Items</h1>

    <p>Returns a keyboard from the package. If Index is not found, raises an exception.</p>

    <h6><a name="id573582" id="id573582"></a>Declaration</h6>
    <pre class="programlisting">
Property Get Items(Index) As IKeymanKeyboard
</pre>

    <h6><a name="id573556" id="id573556"></a>Parameters</h6>

    <table id="id573574">
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

    <h6><a name="id573607" id="id573607"></a>Return Value</h6><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard" title=
    "IKeymanKeyboard Interface">IKeymanKeyboard</a>

    <h6><a name="id573604" id="id573604"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
