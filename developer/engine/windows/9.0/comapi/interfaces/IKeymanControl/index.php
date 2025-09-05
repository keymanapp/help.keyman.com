<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanControl Interface"
  ]);
?>

<h1>IKeymanControl Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/ActiveKeyboard">IKeymanControl::ActiveKeyboard</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/AutoRefresh">IKeymanControl::AutoRefresh</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/DisableUserInterface">IKeymanControl::DisableUserInterface</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/EnableUserInterface">IKeymanControl::EnableUserInterface</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/LastActiveWindow">IKeymanControl::LastActiveWindow</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/LastFocusWindow">IKeymanControl::LastFocusWindow</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/RefreshKeyman">IKeymanControl::RefreshKeyman</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/RegisterControllerWindow">IKeymanControl::RegisterControllerWindow</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/ShutdownKeyman32Engine">IKeymanControl::ShutdownKeyman32Engine</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/StartKeyman32Engine">IKeymanControl::StartKeyman32Engine</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/StartVisualKeyboard">IKeymanControl::StartVisualKeyboard</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/StopKeyman32Engine">IKeymanControl::StopKeyman32Engine</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/StopVisualKeyboard">IKeymanControl::StopVisualKeyboard</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/UnregisterControllerWindow">IKeymanControl::UnregisterControllerWindow</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/VisualKeyboardVisible">IKeymanControl::VisualKeyboardVisible</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanControl : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>Access to methods to control the Keyman Engine keyman.exe and keyman32.dll.</p>

    <h5><a name="id575421" id="id575421"></a>Interface Methods</h5>

    <table id="id575444">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/DisableUserInterface" title=
          "IKeymanControl::DisableUserInterface">DisableUserInterface</a>
        </td>

        <td>Method</td>

        <td>Sub DisableUserInterface</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/EnableUserInterface" title=
          "IKeymanControl::EnableUserInterface">EnableUserInterface</a>
        </td>

        <td>Method</td>

        <td>Sub EnableUserInterface</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/RefreshKeyman" title="IKeymanControl::RefreshKeyman">RefreshKeyman</a>
        </td>

        <td>Method</td>

        <td>Sub RefreshKeyman</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/RegisterControllerWindow" title=
          "IKeymanControl::RegisterControllerWindow">RegisterControllerWindow</a>
        </td>

        <td>Method</td>

        <td>Sub RegisterControllerWindow(Value As Long)</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/ShutdownKeyman32Engine" title=
          "IKeymanControl::ShutdownKeyman32Engine">ShutdownKeyman32Engine</a>
        </td>

        <td>Method</td>

        <td>Sub ShutdownKeyman32Engine</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/StartKeyman32Engine" title=
          "IKeymanControl::StartKeyman32Engine">StartKeyman32Engine</a>
        </td>

        <td>Method</td>

        <td>Sub StartKeyman32Engine(ProductID As Long)</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/StartVisualKeyboard" title=
          "IKeymanControl::StartVisualKeyboard">StartVisualKeyboard</a>
        </td>

        <td>Method</td>

        <td>Sub StartVisualKeyboard</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/StopKeyman32Engine" title=
          "IKeymanControl::StopKeyman32Engine">StopKeyman32Engine</a>
        </td>

        <td>Method</td>

        <td>Sub StopKeyman32Engine(ProductID As Long)</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/StopVisualKeyboard" title=
          "IKeymanControl::StopVisualKeyboard">StopVisualKeyboard</a>
        </td>

        <td>Method</td>

        <td>Sub StopVisualKeyboard</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/UnregisterControllerWindow" title=
          "IKeymanControl::UnregisterControllerWindow">UnregisterControllerWindow</a>
        </td>

        <td>Method</td>

        <td>Sub UnregisterControllerWindow(Value As Long)</td>
      </tr>
    </table>

    <h5><a name="id575535" id="id575535"></a>Interface Properties</h5>

    <table id="id575532">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/ActiveKeyboard" title=
          "IKeymanControl::ActiveKeyboard">ActiveKeyboard</a>
        </td>

        <td>Property Get/Let</td>

        <td>Property Get/Let ActiveKeyboard As IKeymanKeyboardInstalled</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/AutoRefresh" title="IKeymanControl::AutoRefresh">AutoRefresh</a>
        </td>

        <td>Property Get/Let</td>

        <td>Property Get/Let AutoRefresh As Boolean</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/LastActiveWindow" title=
          "IKeymanControl::LastActiveWindow">LastActiveWindow</a>
        </td>

        <td>Property Get</td>

        <td>Property Get LastActiveWindow As Long</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/LastFocusWindow" title=
          "IKeymanControl::LastFocusWindow">LastFocusWindow</a>
        </td>

        <td>Property Get</td>

        <td>Property Get LastFocusWindow As Long</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl/VisualKeyboardVisible" title=
          "IKeymanControl::VisualKeyboardVisible">VisualKeyboardVisible</a>
        </td>

        <td>Property Get</td>

        <td>Property Get VisualKeyboardVisible As Boolean</td>
      </tr>
    </table>
