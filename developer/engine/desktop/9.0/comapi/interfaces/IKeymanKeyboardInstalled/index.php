<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanKeyboardInstalled Interface"
  ]);
?>

<h1>IKeymanKeyboardInstalled Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardInstalled/InstalledByAdmin">IKeymanKeyboardInstalled::InstalledByAdmin</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardInstalled/InstallVisualKeyboard">IKeymanKeyboardInstalled::InstallVisualKeyboard</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardInstalled/KeymanID">IKeymanKeyboardInstalled::KeymanID</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardInstalled/Loaded">IKeymanKeyboardInstalled::Loaded</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardInstalled/OwnerPackage">IKeymanKeyboardInstalled::OwnerPackage</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardInstalled/OwnerProduct">IKeymanKeyboardInstalled::OwnerProduct</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardInstalled/Uninstall">IKeymanKeyboardInstalled::Uninstall</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardInstalled/VisualKeyboard">IKeymanKeyboardInstalled::VisualKeyboard</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanKeyboardInstalled : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboard" title=
    "IKeymanKeyboard Interface">IKeymanKeyboard</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>Returns information about a currently installed Keyman Keyboard.</p>

    <h5><a name="id569736" id="id569736"></a>Interface Methods</h5>

    <table id="id569737">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardInstalled/InstallVisualKeyboard" title=
          "IKeymanKeyboardInstalled::InstallVisualKeyboard">InstallVisualKeyboard</a>
        </td>

        <td>Method</td>

        <td>Sub InstallVisualKeyboard(Filename As String)</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardInstalled/Uninstall" title=
          "IKeymanKeyboardInstalled::Uninstall">Uninstall</a>
        </td>

        <td>Method</td>

        <td>Sub Uninstall</td>
      </tr>
    </table>

    <h5><a name="id569797" id="id569797"></a>Interface Properties</h5>

    <table id="id569780">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardInstalled/InstalledByAdmin" title=
          "IKeymanKeyboardInstalled::InstalledByAdmin">InstalledByAdmin</a>
        </td>

        <td>Property Get</td>

        <td>Property Get InstalledByAdmin As Boolean</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardInstalled/KeymanID" title=
          "IKeymanKeyboardInstalled::KeymanID">KeymanID</a>
        </td>

        <td>Property Get</td>

        <td>Property Get KeymanID As Long</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardInstalled/Loaded" title="IKeymanKeyboardInstalled::Loaded">Loaded</a>
        </td>

        <td>Property Get/Let</td>

        <td>Property Get/Let Loaded As Boolean</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardInstalled/OwnerPackage" title=
          "IKeymanKeyboardInstalled::OwnerPackage">OwnerPackage</a>
        </td>

        <td>Property Get</td>

        <td>Property Get OwnerPackage As IKeymanPackageInstalled</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardInstalled/OwnerProduct" title=
          "IKeymanKeyboardInstalled::OwnerProduct">OwnerProduct</a>
        </td>

        <td>Property Get</td>

        <td>Property Get OwnerProduct As IKeymanProduct</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanKeyboardInstalled/VisualKeyboard" title=
          "IKeymanKeyboardInstalled::VisualKeyboard">VisualKeyboard</a>
        </td>

        <td>Property Get</td>

        <td>Property Get VisualKeyboard As IKeymanVisualKeyboard</td>
      </tr>
    </table>
