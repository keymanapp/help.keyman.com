<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackagesInstalled::Items"
  ]);
?>

<h1><a class="link" href=
      "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackagesInstalled" title="IKeymanPackagesInstalled Interface">IKeymanPackagesInstalled</a>::Items</h1>

    <p>Retrieves the package at index Index, or raises an exception if no package can be found with that Index.</p>

    <h6><a name="id574932" id="id574932"></a>Declaration</h6>
    <pre class="programlisting">
Property Get Items(Index) As IKeymanPackageInstalled
</pre>

    <h6><a name="id574953" id="id574953"></a>Parameters</h6>

    <table id="id574970">
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

        <td>1-based index of the package, or Name of the package</td>
      </tr>
    </table>

    <h6><a name="id574982" id="id574982"></a>Return Value</h6><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageInstalled" title=
    "IKeymanPackageInstalled Interface">IKeymanPackageInstalled</a>

    <h6><a name="id574972" id="id574972"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
