<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanAddinInstalled Interface"
  ]);
?>

<h1>IKeymanAddinInstalled Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddinInstalled/InstalledByAdmin">IKeymanAddinInstalled::InstalledByAdmin</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddinInstalled/Uninstall">IKeymanAddinInstalled::Uninstall</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanAddinInstalled : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddin" title=
    "IKeymanAddin Interface">IKeymanAddin</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>Interface describing an installed Keyman addin. Access this interface through the TavultesoftKeyman.Addins collection.</p>

    <h5><a name="id568616" id="id568616"></a>Interface Methods</h5>

    <table id="id568635">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddinInstalled/Uninstall" title=
          "IKeymanAddinInstalled::Uninstall">Uninstall</a>
        </td>

        <td>Method</td>

        <td>Sub Uninstall</td>
      </tr>
    </table>

    <h5><a name="id568672" id="id568672"></a>Interface Properties</h5>

    <table id="id568676">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddinInstalled/InstalledByAdmin" title=
          "IKeymanAddinInstalled::InstalledByAdmin">InstalledByAdmin</a>
        </td>

        <td>Property Get</td>

        <td>Property Get InstalledByAdmin As Boolean</td>
      </tr>
    </table>
