<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackageInstalled Interface"
  ]);
?>

<h1>IKeymanPackageInstalled Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageInstalled/InstalledByAdmin">IKeymanPackageInstalled::InstalledByAdmin</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageInstalled/Uninstall">IKeymanPackageInstalled::Uninstall</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanPackageInstalled : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackage" title=
    "IKeymanPackage Interface">IKeymanPackage</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <h5><a name="id572923" id="id572923"></a>Interface Methods</h5>

    <table id="id572924">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageInstalled/Uninstall" title=
          "IKeymanPackageInstalled::Uninstall">Uninstall</a>
        </td>

        <td>Method</td>

        <td>Sub Uninstall(RemoveFonts As Boolean)</td>
      </tr>
    </table>

    <h5><a name="id572970" id="id572970"></a>Interface Properties</h5>

    <table id="id572940">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageInstalled/InstalledByAdmin" title=
          "IKeymanPackageInstalled::InstalledByAdmin">InstalledByAdmin</a>
        </td>

        <td>Property Get</td>

        <td>Property Get InstalledByAdmin As Boolean</td>
      </tr>
    </table>
