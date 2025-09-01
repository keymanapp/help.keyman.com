<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanProduct::GetActivationRequestCode"
  ]);
?>

<h1><a class="link" href=
      "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanProduct" title="IKeymanProduct Interface">IKeymanProduct</a>::GetActivationRequestCode</h1>

    <p>When passed a valid licence number, this function will return a text string that must be passed to the Tavultesoft Activation
    Server, in order to get an ActivationResponseBlob that can be passed to the Activate function. See the Activate function for an
    example.</p>

    <h6><a name="id567572" id="id567572"></a>Declaration</h6>
    <pre class="programlisting">
Sub GetActivationRequestCode(LicenceNumber As String, ActivationRequestBlob As String)
</pre>

    <h6><a name="id567574" id="id567574"></a>Parameters</h6>

    <table id="id567570">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>

      <tr>
        <td>1</td>

        <td>LicenceNumber</td>

        <td>String</td>

        <td>The licence number the user has received after purchasing the product</td>
      </tr>

      <tr>
        <td>2</td>

        <td>ActivationRequestBlob</td>

        <td>String</td>

        <td>The returned blob that must be sent to the Tavultesoft Activation Server in order to activate the product on the current
        computer.</td>
      </tr>
    </table>

    <h6><a name="id567622" id="id567622"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
