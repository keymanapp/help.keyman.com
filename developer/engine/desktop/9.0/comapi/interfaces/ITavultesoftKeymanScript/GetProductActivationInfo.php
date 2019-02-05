<?php
  require_once('includes/template.php');

  head([
    'title' => "ITavultesoftKeymanScript::GetProductActivationInfo"
  ]);
?>

<h1><a class="link" href=
      "/developer/engine/desktop/9.0/comapi/interfaces/ITavultesoftKeymanScript" title=
      "ITavultesoftKeymanScript Interface">ITavultesoftKeymanScript</a>::GetProductActivationInfo</h1>

    <p>Returns information about the activation status of a product. The ProductID can be retrieved from the Products collection.</p>

    <h6><a name="id574064" id="id574064"></a>Declaration</h6>
    <pre class="programlisting">
Function GetProductActivationInfo(ByVal ProductID as Long, ByVal InfoType As Long) As Long
</pre>

    <h6><a name="id574040" id="id574040"></a>Parameters</h6>

    <table id="id574071">
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

        <td>The ID of the product to retrieve product activation info for.</td>
      </tr>

      <tr>
        <td>2</td>

        <td>InfoType</td>

        <td>Long</td>

        <td>The type of information to retrieve: 1: Activation status - returns 1 for activated, 0 for not activated 2: Returns the total
        number of days in the product trial 3: Returns the number of days already used in the product trial</td>
      </tr>
    </table>

    <h6><a name="id574091" id="id574091"></a>Return Value</h6>Long

    <h6><a name="id574073" id="id574073"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
