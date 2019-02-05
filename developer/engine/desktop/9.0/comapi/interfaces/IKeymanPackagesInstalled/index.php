<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackagesInstalled Interface"
  ]);
?>

<h1>IKeymanPackagesInstalled Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackagesInstalled/GetPackageFromFile">IKeymanPackagesInstalled::GetPackageFromFile</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackagesInstalled/IndexOf">IKeymanPackagesInstalled::IndexOf</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackagesInstalled/Install">IKeymanPackagesInstalled::Install</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackagesInstalled/Items">IKeymanPackagesInstalled::Items</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanPackagesInstalled : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackages" title=
    "IKeymanPackages Interface">IKeymanPackages</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanCollection" title=
    "IKeymanCollection Interface">IKeymanCollection</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>Collection of installed packages</p>

    <h5><a name="id574678" id="id574678"></a>Interface Methods</h5>

    <table id="id574696">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackagesInstalled/GetPackageFromFile" title=
          "IKeymanPackagesInstalled::GetPackageFromFile">GetPackageFromFile</a>
        </td>

        <td>Method</td>

        <td>Function GetPackageFromFile(Filename As String) As IKeymanPackageFile</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackagesInstalled/IndexOf" title=
          "IKeymanPackagesInstalled::IndexOf">IndexOf</a>
        </td>

        <td>Method</td>

        <td>Function IndexOf(Name As String) As Long</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackagesInstalled/Install" title=
          "IKeymanPackagesInstalled::Install">Install</a>
        </td>

        <td>Method</td>

        <td>Sub Install(Filename As String, AllUsers As Boolean, Force As Boolean, ShortcutRootPath As String)</td>
      </tr>
    </table>

    <h5><a name="id574732" id="id574732"></a>Interface Properties</h5>

    <table id="id574751">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackagesInstalled/Items" title="IKeymanPackagesInstalled::Items">Items</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Items(Index) As IKeymanPackageInstalled</td>
      </tr>
    </table>
