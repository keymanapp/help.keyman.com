<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanAddin Interface"
  ]);
?>

<h1>IKeymanAddin Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddin/Description">IKeymanAddin::Description</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddin/Filename">IKeymanAddin::Filename</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddin/Name">IKeymanAddin::Name</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddin/OwnerPackage">IKeymanAddin::OwnerPackage</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanAddin : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title="IKeymanObject Interface">IKeymanObject</a>
    : IDispatch</p>

    <p>Base interface describing a Keyman addin.</p>

    <h5><a name="id568407" id="id568407"></a>Interface Properties</h5>

    <table id="id568371">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddin/Description" title="IKeymanAddin::Description">Description</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Description As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddin/Filename" title="IKeymanAddin::Filename">Filename</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Filename As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddin/Name" title="IKeymanAddin::Name">Name</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Name As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddin/OwnerPackage" title="IKeymanAddin::OwnerPackage">OwnerPackage</a>
        </td>

        <td>Property Get</td>

        <td>Property Get OwnerPackage As IKeymanPackage</td>
      </tr>
    </table>
