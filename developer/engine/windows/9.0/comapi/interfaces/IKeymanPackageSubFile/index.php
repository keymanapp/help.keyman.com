<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackageSubFile Interface"
  ]);
?>

<h1>IKeymanPackageSubFile Interface</h1>

    <div class="toc">
      <dl>
        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageSubFile/AsStream">IKeymanPackageSubFile::AsStream</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageSubFile/CopyLocation">IKeymanPackageSubFile::CopyLocation</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageSubFile/Description">IKeymanPackageSubFile::Description</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageSubFile/Filename">IKeymanPackageSubFile::Filename</a></span></dt>

        <dt><span class="section"><a href=
        "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageSubFile/FileType">IKeymanPackageSubFile::FileType</a></span></dt>
      </dl>
    </div>

    <p>interface IKeymanPackageSubFile : <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanObject" title=
    "IKeymanObject Interface">IKeymanObject</a> : IDispatch</p>

    <p>A file extracted from a KeymanPackageFile. These files are available for referencing before a package is installed</p>

    <h5><a name="id573360" id="id573360"></a>Interface Properties</h5>

    <table id="id573396">
      <tr>
        <th>Name</th>

        <th>Type</th>

        <th>Declaration</th>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageSubFile/AsStream" title="IKeymanPackageSubFile::AsStream">AsStream</a>
        </td>

        <td>Property Get</td>

        <td>Property Get AsStream As Unknown</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageSubFile/CopyLocation" title=
          "IKeymanPackageSubFile::CopyLocation">CopyLocation</a>
        </td>

        <td>Property Get</td>

        <td>Property Get CopyLocation As tagKeymanPackageSubFileCopyLocation</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageSubFile/Description" title=
          "IKeymanPackageSubFile::Description">Description</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Description As String</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageSubFile/FileType" title="IKeymanPackageSubFile::FileType">FileType</a>
        </td>

        <td>Property Get</td>

        <td>Property Get FileType As tagKeymanFileType</td>
      </tr>

      <tr>
        <td>
          <a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageSubFile/Filename" title="IKeymanPackageSubFile::Filename">Filename</a>
        </td>

        <td>Property Get</td>

        <td>Property Get Filename As String</td>
      </tr>
    </table>
