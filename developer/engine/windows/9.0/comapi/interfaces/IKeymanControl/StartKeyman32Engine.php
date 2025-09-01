<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanControl::StartKeyman32Engine"
  ]);
?>

<h1><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl"
      title="IKeymanControl Interface">IKeymanControl</a>::StartKeyman32Engine</h1>

    <p>Starts the Keyman32.dll engine for the specified product. Used by Keyman Controllers, not by client applications. If you are trying
    to start a specific product, use IKeymanProduct.Start instead.</p>

    <h6><a name="id576015" id="id576015"></a>Declaration</h6>
    <pre class="programlisting">
Sub StartKeyman32Engine(ProductID As Long)
</pre>

    <h6><a name="id576017" id="id576017"></a>Parameters</h6>

    <table id="id575998">
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

        <td>ProductID to start the engine for</td>
      </tr>
    </table>

    <h6><a name="id576047" id="id576047"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
