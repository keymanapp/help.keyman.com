<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanProduct Interface"
  ]);
?>

<h1>IKeymanProduct Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Activate">IKeymanProduct::Activate</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/AllUsers">IKeymanProduct::AllUsers</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Description">IKeymanProduct::Description</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Filename">IKeymanProduct::Filename</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/GetActivationData">IKeymanProduct::GetActivationData</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/GetActivationRequestCode">IKeymanProduct::GetActivationRequestCode</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Hotkeys">IKeymanProduct::Hotkeys</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Name">IKeymanProduct::Name</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/OpenAbout">IKeymanProduct::OpenAbout</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/OpenConfiguration">IKeymanProduct::OpenConfiguration</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/OpenHelp">IKeymanProduct::OpenHelp</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/OpenProduct">IKeymanProduct::OpenProduct</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/ProductID">IKeymanProduct::ProductID</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/RegistryKey">IKeymanProduct::RegistryKey</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Running">IKeymanProduct::Running</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Start">IKeymanProduct::Start</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Stop">IKeymanProduct::Stop</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Uninstall">IKeymanProduct::Uninstall</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Valid">IKeymanProduct::Valid</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Validate">IKeymanProduct::Validate</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanProduct : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>Interface describing a currently installed product in Keyman Engine</p>

    <h5><a name="id567096" id="id567096"></a>Interface Methods</h5>

    <table id="id567085">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Activate" title="IKeymanProduct::Activate">Activate</a>
        </td>

        <td>Method</td>

        <td>Sub Activate(ActivationResponseBlob As String)</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/GetActivationData" title=
          "IKeymanProduct::GetActivationData">GetActivationData</a>
        </td>

        <td>Method</td>

        <td>Sub GetActivationData(ActivatedState As Long, TrialDayCount As Long, DaysUsed As Long)</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/GetActivationRequestCode" title=
          "IKeymanProduct::GetActivationRequestCode">GetActivationRequestCode</a>
        </td>

        <td>Method</td>

        <td>Sub GetActivationRequestCode(LicenceNumber As String, ActivationRequestBlob As String)</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/OpenAbout" title="IKeymanProduct::OpenAbout">OpenAbout</a>
        </td>

        <td>Method</td>

        <td>Sub OpenAbout</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/OpenConfiguration" title=
          "IKeymanProduct::OpenConfiguration">OpenConfiguration</a>
        </td>

        <td>Method</td>

        <td>Sub OpenConfiguration</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/OpenHelp" title="IKeymanProduct::OpenHelp">OpenHelp</a>
        </td>

        <td>Method</td>

        <td>Sub OpenHelp(topic As String)</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/OpenProduct" title="IKeymanProduct::OpenProduct">OpenProduct</a>
        </td>

        <td>Method</td>

        <td>Sub OpenProduct</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Start" title="IKeymanProduct::Start">Start</a>
        </td>

        <td>Method</td>

        <td>Sub Start</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Stop" title="IKeymanProduct::Stop">Stop</a>
        </td>

        <td>Method</td>

        <td>Sub Stop</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Uninstall" title="IKeymanProduct::Uninstall">Uninstall</a>
        </td>

        <td>Method</td>

        <td>Sub Uninstall</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Validate" title="IKeymanProduct::Validate">Validate</a>
        </td>

        <td>Method</td>

        <td>Function Validate(ParentWindow As Long) As Boolean</td>
      </tr>
    </table>

    <h5><a name="id567182" id="id567182"></a>Interface Properties</h5>

    <table id="id567194">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/AllUsers" title="IKeymanProduct::AllUsers">AllUsers</a>
        </td>

        <td>Property Get</td>

        <td>Property Get AllUsers As Boolean</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Description" title="IKeymanProduct::Description">Description</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Description As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Filename" title="IKeymanProduct::Filename">Filename</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Filename As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Hotkeys" title="IKeymanProduct::Hotkeys">Hotkeys</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Hotkeys As IKeymanHotkeys</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Name" title="IKeymanProduct::Name">Name</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Name As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/ProductID" title="IKeymanProduct::ProductID">ProductID</a>
        </td>

        <td>Property Get</td>

        <td>Property Get ProductID As Long</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/RegistryKey" title="IKeymanProduct::RegistryKey">RegistryKey</a>
        </td>

        <td>Property Get</td>

        <td>Property Get RegistryKey As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Running" title="IKeymanProduct::Running">Running</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Running As Boolean</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct/Valid" title="IKeymanProduct::Valid">Valid</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Valid As Boolean</td>
      </tr>
    </table>
