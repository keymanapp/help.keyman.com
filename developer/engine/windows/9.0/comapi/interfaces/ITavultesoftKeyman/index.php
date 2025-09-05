<?php
  require_once('includes/template.php');

  head([
    'title' => "ITavultesoftKeyman Interface"
  ]);
?>

<h1>ITavultesoftKeyman Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/Addins">ITavultesoftKeyman::Addins</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/BackgroundRefresh">ITavultesoftKeyman::BackgroundRefresh</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/Control">ITavultesoftKeyman::Control</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/Errors">ITavultesoftKeyman::Errors</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/Keyboards">ITavultesoftKeyman::Keyboards</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/Languages">ITavultesoftKeyman::Languages</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/ObjectByIndex">ITavultesoftKeyman::ObjectByIndex</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/Options">ITavultesoftKeyman::Options</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/Packages">ITavultesoftKeyman::Packages</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/Products">ITavultesoftKeyman::Products</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/Refresh">ITavultesoftKeyman::Refresh</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/SystemInfo">ITavultesoftKeyman::SystemInfo</a></span></dt>
      </dl>
    </div>

    <p>interface ITavultesoftKeyman : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>The root interface for all access to the Keyman Engine COM API.</p>

    <h5><a name="id574204" id="id574204"></a>Interface Methods</h5>

    <table id="id574205">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/ObjectByIndex" title=
          "ITavultesoftKeyman::ObjectByIndex">ObjectByIndex</a>
        </td>

        <td>Method</td>

        <td>Function ObjectByIndex(Index As Long) As Object</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/Refresh" title="ITavultesoftKeyman::Refresh">Refresh</a>
        </td>

        <td>Method</td>

        <td>Sub Refresh</td>
      </tr>
    </table>

    <h5><a name="id574236" id="id574236"></a>Interface Properties</h5>

    <table id="id574252">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/Addins" title="ITavultesoftKeyman::Addins">Addins</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Addins As IKeymanAddinsInstalled</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/BackgroundRefresh" title=
          "ITavultesoftKeyman::BackgroundRefresh">BackgroundRefresh</a>
        </td>

        <td>Property Get/Let</td>

        <td>Property Get/Let BackgroundRefresh As Boolean</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/Control" title="ITavultesoftKeyman::Control">Control</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Control As IKeymanControl</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/Errors" title="ITavultesoftKeyman::Errors">Errors</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Errors As IKeymanErrors</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/Keyboards" title="ITavultesoftKeyman::Keyboards">Keyboards</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Keyboards As IKeymanKeyboardsInstalled</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/Languages" title="ITavultesoftKeyman::Languages">Languages</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Languages As IKeymanLanguages</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/Options" title="ITavultesoftKeyman::Options">Options</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Options As IKeymanOptions</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/Packages" title="ITavultesoftKeyman::Packages">Packages</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Packages As IKeymanPackagesInstalled</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/Products" title="ITavultesoftKeyman::Products">Products</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Products As IKeymanProducts</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeyman/SystemInfo" title="ITavultesoftKeyman::SystemInfo">SystemInfo</a>
        </td>

        <td>Property Get</td>

        <td>Property Get SystemInfo As IKeymanSystemInfo</td>
      </tr>
    </table>
