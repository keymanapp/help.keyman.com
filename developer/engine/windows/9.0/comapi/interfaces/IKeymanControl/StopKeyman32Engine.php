<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanControl::StopKeyman32Engine"
  ]);
?>

<h1><a class="link" href="/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl"
      title="IKeymanControl Interface">IKeymanControl</a>::StopKeyman32Engine</h1>

    <p>Stops the Keyman32.dll engine for the specified product. Used by Keyman Controllers, not by client applications. If you are trying
    to stop a specific product, use IKeymanProduct.Stop instead.</p>

    <h6><a name="id576094" id="id576094"></a>Declaration</h6>
    <pre class="programlisting">
Sub StopKeyman32Engine(ProductID As Long)
</pre>

    <h6><a name="id576082" id="id576082"></a>Parameters</h6>

    <table id="id576084">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>
    </table>

    <h6><a name="id576118" id="id576118"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
