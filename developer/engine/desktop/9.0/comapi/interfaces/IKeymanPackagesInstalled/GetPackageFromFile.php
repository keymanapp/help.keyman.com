<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackagesInstalled::GetPackageFromFile"
  ]);
?>

<h1><a class="link" href=
      "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackagesInstalled" title=
      "IKeymanPackagesInstalled Interface">IKeymanPackagesInstalled</a>::GetPackageFromFile</h1>

    <p>Loads a package from a file and returns information about it. Does not install the package.</p>

    <h6><a name="id574785" id="id574785"></a>Declaration</h6>
    <pre class="programlisting">
Function GetPackageFromFile(Filename As String) As IKeymanPackageFile
</pre>

    <h6><a name="id574776" id="id574776"></a>Parameters</h6>

    <table id="id574788">
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

        <td>The full path and filename of the package to load</td>
      </tr>
    </table>

    <h6><a name="id574766" id="id574766"></a>Return Value</h6><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageFile" title=
    "IKeymanPackageFile Interface">IKeymanPackageFile</a>

    <h6><a name="id574828" id="id574828"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
