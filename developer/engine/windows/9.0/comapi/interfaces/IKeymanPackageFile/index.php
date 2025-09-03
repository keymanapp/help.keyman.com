<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackageFile Interface"
  ]);
?>

<h1>IKeymanPackageFile Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageFile/Graphic">IKeymanPackageFile::Graphic</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageFile/Install">IKeymanPackageFile::Install</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageFile/ReadMe">IKeymanPackageFile::ReadMe</a></span></dt>

        <dt><span class="section"><a href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageFile/SubFiles">IKeymanPackageFile::SubFiles</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanPackageFile : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackage" title=
    "IKeymanPackage Interface">IKeymanPackage</a> : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>Describes a Keyman Package file that has not been installed.</p>

    <h5><a name="id573078" id="id573078"></a>Interface Methods</h5>

    <table id="id573054">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageFile/Install" title="IKeymanPackageFile::Install">Install</a>
        </td>

        <td>Method</td>

        <td>Sub Install(AllUsers As Boolean, Force As Boolean, ShortcutRootPath As String)</td>
      </tr>
    </table>

    <h5><a name="id573121" id="id573121"></a>Interface Properties</h5>

    <table id="id573127">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageFile/Graphic" title="IKeymanPackageFile::Graphic">Graphic</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Graphic As stdole.IPicture</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageFile/ReadMe" title="IKeymanPackageFile::ReadMe">ReadMe</a>
        </td>

        <td>Property Get</td>

        <td>Property Get ReadMe As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageFile/SubFiles" title="IKeymanPackageFile::SubFiles">SubFiles</a>
        </td>

        <td>Property Get</td>

        <td>Property Get SubFiles As IKeymanPackageSubFiles</td>
      </tr>
    </table>
