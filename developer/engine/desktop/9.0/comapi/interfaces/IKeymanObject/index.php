<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanObject Interface"
  ]);
?>

<h1>IKeymanObject Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject/SerializeXML">IKeymanObject::SerializeXML</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject/UniqueIndex">IKeymanObject::UniqueIndex</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanObject : IDispatch</p>

    <p>Base interface for all Keyman COM API objects</p>

    <h5><a name="id568040" id="id568040"></a>Interface Methods</h5>

    <table id="id568042">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject/SerializeXML" title="IKeymanObject::SerializeXML">SerializeXML</a>
        </td>

        <td>Method</td>

        <td>Sub SerializeXML(XML As String, Flags As tagKeymanSerializeFlags, ImagePath As String, References)</td>
      </tr>
    </table>

    <h5><a name="id568100" id="id568100"></a>Interface Properties</h5>

    <table id="id568095">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject/UniqueIndex" title="IKeymanObject::UniqueIndex">UniqueIndex</a>
        </td>

        <td>Property Get</td>

        <td>Property Get UniqueIndex As Long</td>
      </tr>
    </table>
