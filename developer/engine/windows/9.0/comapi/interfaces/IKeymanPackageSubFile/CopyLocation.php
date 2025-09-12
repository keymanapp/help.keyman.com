<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackageSubFile::CopyLocation"
  ]);
?>

<h1><a class="link" href=
      "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageSubFile" title="IKeymanPackageSubFile Interface">IKeymanPackageSubFile</a>::CopyLocation</h1>

    <p>Returns the location that the file will be copied to if the package is installed: pfclPackage: the default location, where the
    package is installed to pfclKeymanDir: the Keyman program folder (deprecated) pfclInstallTemp: the file is not copied in the
    installation process but is just used for install (e.g. readme file or the install graphic)</p>

    <h6><a name="id573505" id="id573505"></a>Declaration</h6>
    <pre class="programlisting">
Property Get CopyLocation As tagKeymanPackageSubFileCopyLocation
</pre>

    <h6><a name="id573476" id="id573476"></a>Parameters</h6>

    <table id="id573509">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>
    </table>

    <h6><a name="id573474" id="id573474"></a>Return Value</h6><a class="link" href=
    "../../enumerations/tagKeymanPackageSubFileCopyLocation" title=
    "tagKeymanPackageSubFileCopyLocation Enumeration">tagKeymanPackageSubFileCopyLocation</a>

    <h6><a name="id573486" id="id573486"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
