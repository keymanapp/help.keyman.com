<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanPackagesInstalled::Install"
  ]);
?>

<h1><a class="link" href=
      "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanPackagesInstalled" title="IKeymanPackagesInstalled Interface">IKeymanPackagesInstalled</a>::Install</h1>

    <p>Install the package for use within Keyman Engine.</p>

    <h6><a name="id574870" id="id574870"></a>Declaration</h6>
    <pre class="programlisting">
Sub Install(Filename As String, AllUsers As Boolean, Force As Boolean, ShortcutRootPath As String)
</pre>

    <h6><a name="id574851" id="id574851"></a>Parameters</h6>

    <table id="id574911">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>

      <tr>
        <td>1</td>

        <td>Filename</td>

        <td>String</td>

        <td>The full path and filename of the package to install</td>
      </tr>

      <tr>
        <td>2</td>

        <td>AllUsers</td>

        <td>Boolean</td>

        <td>True if the package should be installed for all users. If true, then requires administrative privileges to install.</td>
      </tr>

      <tr>
        <td>3</td>

        <td>Force</td>

        <td>Boolean</td>

        <td>If True, then overwrites an existing package with the same name if it exists. If false, then will raise an exception if the
        package is already installed.</td>
      </tr>

      <tr>
        <td>4</td>

        <td>ShortcutRootPath</td>

        <td>String</td>

        <td>The base path name for shortcuts to be installed into. For example, Keyman Desktop may specify
        &quot;[StartMenuPrograms]\Tavultesoft Keyman Desktop Professional 7.0\&quot; (where [StartMenuPrograms] is the full path to the
        Start Menu Programs folder).</td>
      </tr>
    </table>

    <h6><a name="id574924" id="id574924"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
