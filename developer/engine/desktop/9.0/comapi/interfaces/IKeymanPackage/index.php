<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackage Interface"
  ]);
?>

<h1>IKeymanPackage Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackage/Description">IKeymanPackage::Description</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackage/Filename">IKeymanPackage::Filename</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackage/Keyboards">IKeymanPackage::Keyboards</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackage/Name">IKeymanPackage::Name</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanPackage : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>Base interface that describes a Keyman Package (.kmp)</p>

    <h5><a name="id572692" id="id572692"></a>Interface Properties</h5>

    <table id="id572670">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackage/Description" title="IKeymanPackage::Description">Description</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Description As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackage/Filename" title="IKeymanPackage::Filename">Filename</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Filename As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackage/Keyboards" title="IKeymanPackage::Keyboards">Keyboards</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Keyboards As IKeymanKeyboardsPackage</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackage/Name" title="IKeymanPackage::Name">Name</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Name As String</td>
      </tr>
    </table>
