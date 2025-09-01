<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanAddinsInstalled::Items"
  ]);
?>

<h1><a class="link" href=
      "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddinsInstalled" title="IKeymanAddinsInstalled Interface">IKeymanAddinsInstalled</a>::Items</h1>

    <p>Retrieve information about installed addins</p>

    <h6><a name="id568958" id="id568958"></a>Declaration</h6>
    <pre class="programlisting">
Property Get Items(Index) As IKeymanAddinInstalled
</pre>

    <h6><a name="id569017" id="id569017"></a>Parameters</h6>

    <table id="id569022">
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

        <td>1-based index of KeymanAddinInstalled to retrieve</td>
      </tr>
    </table>

    <h6><a name="id569006" id="id569006"></a>Return Value</h6><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddinInstalled" title=
    "IKeymanAddinInstalled Interface">IKeymanAddinInstalled</a>
