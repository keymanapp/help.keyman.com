<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanSystemInfo Interface"
  ]);
?>

<h1>IKeymanSystemInfo Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanSystemInfo/EngineInstallPath">IKeymanSystemInfo::EngineInstallPath</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanSystemInfo/EngineVersion">IKeymanSystemInfo::EngineVersion</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanSystemInfo/IsAdministrator">IKeymanSystemInfo::IsAdministrator</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanSystemInfo/Refresh">IKeymanSystemInfo::Refresh</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanSystemInfo/RunDiagnostics">IKeymanSystemInfo::RunDiagnostics</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanSystemInfo : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>Returns information about the Keyman Engine installation and allows access to the diagnostic tool.</p>

    <h5><a name="id575000" id="id575000"></a>Interface Methods</h5>

    <table id="id575016">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanSystemInfo/Refresh" title="IKeymanSystemInfo::Refresh">Refresh</a>
        </td>

        <td>Method</td>

        <td>Sub Refresh</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanSystemInfo/RunDiagnostics" title=
          "IKeymanSystemInfo::RunDiagnostics">RunDiagnostics</a>
        </td>

        <td>Method</td>

        <td>Sub RunDiagnostics</td>
      </tr>
    </table>

    <h5><a name="id575049" id="id575049"></a>Interface Properties</h5>

    <table id="id575033">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanSystemInfo/EngineInstallPath" title=
          "IKeymanSystemInfo::EngineInstallPath">EngineInstallPath</a>
        </td>

        <td>Property Get</td>

        <td>Property Get EngineInstallPath As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanSystemInfo/EngineVersion" title=
          "IKeymanSystemInfo::EngineVersion">EngineVersion</a>
        </td>

        <td>Property Get</td>

        <td>Property Get EngineVersion As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanSystemInfo/IsAdministrator" title=
          "IKeymanSystemInfo::IsAdministrator">IsAdministrator</a>
        </td>

        <td>Property Get</td>

        <td>Property Get IsAdministrator As Boolean</td>
      </tr>
    </table>
