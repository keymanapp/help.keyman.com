<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackageSubFile::FileType"
  ]);
?>

<h1><a class="link" href=
      "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackageSubFile" title="IKeymanPackageSubFile Interface">IKeymanPackageSubFile</a>::FileType</h1>

    <p>Returns the type of the file: ftKeymanSource = $00000000; ftPackageSource = $00000001; ftKeymanFile = $00000002; ftPackageFile =
    $00000003; ftPackageInstallerFile = $00000004; ftFont = $00000005; ftReadme = $00000006; ftTextFile = $00000007; ftKeymanWizard =
    $00000008; ftOther = $00000009; ftBitmap = $0000000A; ftVisualKeyboard = $0000000B; ftAddinFile = $0000000C; ftCustomisation =
    $0000000D;</p>

    <h6><a name="id574491" id="id574491"></a>Declaration</h6>
    <pre class="programlisting">
Property Get FileType As tagKeymanFileType
</pre>

    <h6><a name="id574511" id="id574511"></a>Parameters</h6>

    <table id="id574521">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>
    </table>

    <h6><a name="id574517" id="id574517"></a>Return Value</h6><a class="link" href="/developer/engine/desktop/9.0/comapi/enumerations/tagKeymanFileType" title=
    "tagKeymanFileType Enumeration">tagKeymanFileType</a>

    <h6><a name="id574541" id="id574541"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
