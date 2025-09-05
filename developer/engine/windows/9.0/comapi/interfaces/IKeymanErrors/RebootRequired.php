<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanErrors::RebootRequired"
  ]);
?>

<h1><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanErrors" title=
      "IKeymanErrors Interface">IKeymanErrors</a>::RebootRequired</h1>

    <p>Set to True if a reboot is required after an installation or uninstallation process is completed. You should check this value
    (through TavultesoftKeyman.Errors.RebootRequired) after calling any install or uninstall function.</p>

    <h6><a name="id570936" id="id570936"></a>Declaration</h6>
    <pre class="programlisting">
Property Get RebootRequired As Boolean
</pre>

    <h6><a name="id570946" id="id570946"></a>Parameters</h6>

    <table id="id570979">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>
    </table>

    <h6><a name="id570990" id="id570990"></a>Return Value</h6>Boolean

    <h6><a name="id570971" id="id570971"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
