<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackageInstalled::Uninstall"
  ]);
?>

<h1><a class="link" href=
      "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageInstalled" title="IKeymanPackageInstalled Interface">IKeymanPackageInstalled</a>::Uninstall</h1>

    <p>Uninstalls the package. If the package was installed by an administrator, then it must be uninstalled by an administrator.</p>

    <h6><a name="id573023" id="id573023"></a>Declaration</h6>
    <pre class="programlisting">
Sub Uninstall(RemoveFonts As Boolean)
</pre>

    <h6><a name="id573041" id="id573041"></a>Parameters</h6>

    <table id="id573043">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>

      <tr>
        <td>1</td>

        <td>RemoveFonts</td>

        <td>Boolean</td>

        <td>If True, then uninstalls the fonts associated with the package.</td>
      </tr>
    </table>

    <h6><a name="id573084" id="id573084"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
