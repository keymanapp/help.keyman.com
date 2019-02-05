<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanVisualKeyboard Interface"
  ]);
?>

<h1>IKeymanVisualKeyboard Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanVisualKeyboard/Filename">IKeymanVisualKeyboard::Filename</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanVisualKeyboard/Uninstall">IKeymanVisualKeyboard::Uninstall</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanVisualKeyboard : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>Returns information about an On Screen Keyboard installed in Keyman Engine.</p>

    <h5><a name="id575298" id="id575298"></a>Interface Methods</h5>

    <table id="id575312">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanVisualKeyboard/Uninstall" title=
          "IKeymanVisualKeyboard::Uninstall">Uninstall</a>
        </td>

        <td>Method</td>

        <td>Sub Uninstall</td>
      </tr>
    </table>

    <h5><a name="id575297" id="id575297"></a>Interface Properties</h5>

    <table id="id575307">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanVisualKeyboard/Filename" title="IKeymanVisualKeyboard::Filename">Filename</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Filename As String</td>
      </tr>
    </table>
