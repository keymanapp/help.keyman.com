<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanAddinsInstalled::Install"
  ]);
?>

<h1><a class="link" href=
      "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanAddinsInstalled" title="IKeymanAddinsInstalled Interface">IKeymanAddinsInstalled</a>::Install</h1>

    <p>Install a .kma addin (optionally bundled in a .kmp package). New addins should be distributed as .msi or .msm. This function may be
    deprecated in a future version of Keyman.</p>

    <h6><a name="id568942" id="id568942"></a>Declaration</h6>
    <pre class="programlisting">
Sub Install(Filename As String, Force As Boolean)
</pre>

    <h6><a name="id568923" id="id568923"></a>Parameters</h6>

    <table id="id568933">
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

        <td>Full pathname to the .kma addin file or .kmp package containing a .kma addin file</td>
      </tr>

      <tr>
        <td>2</td>

        <td>Force</td>

        <td>Boolean</td>

        <td>Not currently used. Use FALSE</td>
      </tr>
    </table>

    <h6><a name="id568974" id="id568974"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
