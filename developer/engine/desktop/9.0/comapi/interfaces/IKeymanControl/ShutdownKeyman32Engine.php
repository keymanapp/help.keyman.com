<?php
  require_once('includes/template.php');

  head([
    'title' => "IKeymanControl::ShutdownKeyman32Engine"
  ]);
?>

<h1><a class="link" href=
      "/developer/engine/desktop/9.0/comapi/interfaces/IKeymanControl" title="IKeymanControl Interface">IKeymanControl</a>::ShutdownKeyman32Engine</h1>

    <p>Shuts down the Keyman32.dll engine across all processes in the current session. Used by Keyman Controllers, not by client
    applications. If you are trying to stop a specific product, use IKeymanProduct.Stop instead.</p>

    <h6><a name="id575970" id="id575970"></a>Declaration</h6>
    <pre class="programlisting">
Sub ShutdownKeyman32Engine
</pre>

    <h6><a name="id575955" id="id575955"></a>Parameters</h6>

    <table id="id575961">
      <tr>
        <th>No</th>

        <th>Name</th>

        <th>Type</th>

        <th>Description</th>
      </tr>
    </table>

    <h6><a name="id575978" id="id575978"></a>Example Code</h6>
    <pre class="programlisting">
</pre>
