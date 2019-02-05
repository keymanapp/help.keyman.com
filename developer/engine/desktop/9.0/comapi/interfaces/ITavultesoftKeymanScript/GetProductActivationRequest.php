<?php
  require_once('includes/template.php');

  head([
    'title' => "ITavultesoftKeymanScript::GetProductActivationRequest"
  ]);
?>

<h1><a class="link" href=
      "/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeymanScript" title=
      "ITavultesoftKeymanScript Interface">ITavultesoftKeymanScript</a>::GetProductActivationRequest</h1>

    <p>Returns a string with the activation request which must be sent on to the Tavultesoft activation servers to receive an activation
    response.</p>

    <h6><a name="id574113" id="id574113"></a>Declaration</h6>
    <pre class="programlisting">
Function GetProductActivationRequest(ByVal ProductID as Long, ByVal LicenceCode As String) As String
</pre>

    <h6><a name="id574115" id="id574115"></a>Parameters</h6>

    <table id="id574118">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>

      <tr>
        <td>1</td>

        <td>ProductID</td>

        <td>Long</td>

        <td>The ID of the product to retrieve product activation request for.</td>
      </tr>

      <tr>
        <td>2</td>

        <td>LicenceCode</td>

        <td>String</td>

        <td>The licence code to which the activation request applies.</td>
      </tr>
    </table>

    <h6><a name="id574163" id="id574163"></a>Return Value</h6>String

    <h6><a name="id574156" id="id574156"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
