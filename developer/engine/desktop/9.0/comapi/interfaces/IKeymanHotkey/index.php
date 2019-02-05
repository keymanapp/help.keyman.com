<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanHotkey Interface"
  ]);
?>

<h1>IKeymanHotkey Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanHotkey/Target">IKeymanHotkey::Target</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanHotkey/Value">IKeymanHotkey::Value</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanHotkey : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>An interface to a hotkey for a Keyman product.</p>

    <h5><a name="id577798" id="id577798"></a>Interface Properties</h5>

    <table id="id577807">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanHotkey/Target" title="IKeymanHotkey::Target">Target</a>
        </td>

        <td>Property Get/Let</td>

        <td>Property Get/Let Target As Long</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanHotkey/Value" title="IKeymanHotkey::Value">Value</a>
        </td>

        <td>Property Get/Let</td>

        <td>Property Get/Let Value As Long</td>
      </tr>
    </table>
